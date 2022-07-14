/* jshint ignore:start */

// Notification
function notification(type, message) {
    const elm = document.createElement('div');
    elm.classList.add('alert');
    elm.classList.add(type);

    const span = document.createElement('span');
    span.innerHTML = message;

    elm.appendChild(span);

    document.getElementsByTagName('body')[0].appendChild(elm);

    elm.addEventListener('click', function() {
        elm.remove();
    });

    window.setTimeout(() => elm.remove(), 8000);
}

// Ajax
function ajax(method, url, data, success, failure) {
    const xhr = new XMLHttpRequest();
    xhr.open(method, url, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status >= 200 && xhr.status <= 299) {
                success(JSON.parse(xhr.response));
            } else {
                failure(JSON.parse(xhr.response));
            }
        }
    }

    if (method === 'POST' && data) {
        data = JSON.stringify(data);

        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        xhr.send(data);
    } else {
        xhr.send();
    }

    return xhr;
}

// Cookie
(function(Cookie) {
    Cookie.set = (key, value, expireDate) => {
        const expires = !!expireDate ? `; expires=${expireDate.toUTCString()}` : '';
        document.cookie = `${key}=${value}`;
    };

    Cookie.get = key => {
        return document.cookie?.split('; ')?.find(row => row.startsWith(`${key}=`))?.split('=')[1];
    };

    Cookie.remove = key => {
        document.cookie = `${key}=; expires=Thu, 01 Jan 1970 00:00:00 GMT`;
    };
})(cookie = {});

// LocalStorage
(function(LocalStorage) {
    LocalStorage.set = (key, value) => {
        window.localStorage.setItem(key, JSON.stringify(value))
    };

    LocalStorage.get = key => {
        return JSON.parse(window.localStorage.getItem(key));
    };

    LocalStorage.remove = key => {
        window.localStorage.removeItem(key);
    };
})(localStorage = {});

// Tracking
(function(Tracking) {
    Tracking.log = () => {
        if (
            window.WhowEventLog &&
            typeof window.WhowEventLog.track === 'function' &&
            casino.env === 'production'
        ) {
            window.WhowEventLog.track(arguments);
        }
    };
})(tracking = {});

/* Include SSOs */
/* jshint ignore:start */

(function(SsoGoogle) {
    /**
     * Google OAuth login URL
     */
    const OAUTH_LOGIN_URL = 'https://accounts.google.com/o/oauth2/v2/auth';
    const OAUTH_REDIRECT_PATH = '/login/google';

    /**
     * Query string parameters for the Google login OAuth URL.
     */
    const OAUTH_QUERY_DATA = {
        client_id: window.casino && window.casino.googleSso && window.casino.googleSso.clientId ? window.casino.googleSso.clientId : null,
        redirect_uri: window.location.protocol + '//' + window.location.host + OAUTH_REDIRECT_PATH,
        response_type: 'code',
        access_type: 'offline',
        prompt: 'consent',
        scope: 'email+profile',
    };

    /**
     * Build a query string from the Google login parameters
     *
     * @returns {string}
     */
    function buildQueryString() {
        return Object.keys(OAUTH_QUERY_DATA)
            .map(function(key) {
                return key + '=' + OAUTH_QUERY_DATA[key];
            })
            .join('&');
    }

    /**
     * OAUTH Login to Google
     */
    SsoGoogle.login = function() {
        window.location = OAUTH_LOGIN_URL + '?' + buildQueryString();
    };
})(ssoGoogle = {});

 /* jshint ignore:end */

/* jshint ignore:start */

(function(SsoFacebook, Ajax, Notification, LocalStorage, Tracking) {
    /**
     * Handle blocked users
     *
     * @param response
     */
    function handleLoginError(response) {
        if (response.error.message === 'blocked') {
            window.setTimeout(function () {
                window.location = response.error.redirect.replace(/\\/g, "");
            }, 500);
        } else {
            Notification('error', response.error.message);
        }
    }

    /**
     * Handle login success
     */
    function handleLoginSuccess() {
        let redirectTo = LocalStorage.redirectTo || '/';
        const queryString = window.location.search;

        redirectTo += queryString;

        /* globals query */
        if (typeof query.isFacebookCanvas !== 'undefined') {
            Tracking.log('js_fbcanvas', 'canvas', true);
            window.location = '/lpa/facebook-canvas?isFacebookCanvas';
        } else {
            Tracking.log('js_fbcanvas', 'canvas', false);

            if (window.location.href === redirectTo) {
                window.location.reload();
            } else {
                if (queryString) {
                    window.location = redirectTo + '&s=fb';
                } else {
                    window.location = redirectTo + '?s=fb'; //s=fb tells the next page that user registered via facebook
                }
            }
        }
    }
    /**
     * Display a success message
     *
     * @param response
     */
    function displaySuccess(response) {
        Notification('success', response.success.message);
    }

    /**
     * Check if a user is blocked
     *
     * @param response
     * @returns {boolean}
     */
    function isErrorResponse(response) {
        return typeof response.error !== 'undefined' && typeof response.error.message !== 'undefined';
    }

    /**
     * Check whether the response is "successful"
     *
     * @param response
     * @returns {boolean}
     */
    function isSuccessResponse(response) {
        return typeof response.success !== 'undefined' && typeof response.success.message !== 'undefined';
    }

    /**
     * Perform a facebook login
     *
     * @param args
     * @param ageCheck
     */
     SsoFacebook.login = function(args = {}, ageCheck = false) {
        if (typeof args.type === 'undefined') {
            args.type = 'facebook-login';
        }

        try {
            /* globals FB */
            FB.login(function (loginResponse) {
                if (loginResponse.authResponse) {
                    Ajax('POST', '/api/login/facebook', {
                        response: loginResponse.authResponse,
                        signup: {
                            screen: location.hostname + location.pathname //whow tracking (cfigge)
                        },
                        mobileCode: args.mobileCode || null, //code from mobile to merge mobile account to web (optionally)
                        age: ageCheck,
                    }, (response) => {
                        if (isErrorResponse(response)) {
                            handleLoginError(response);
                        } else if (isSuccessResponse(response)) {
                            displaySuccess(response);
                        } else {
                            handleLoginSuccess();
                        }
                    },
                    (response) => {
                        Notification('error', 'A login error has occurred.');
                        console.error(response);
                    });
                } else {
                    Notification('error', 'A login error has occurred.');
                    console.error(loginResponse);
                }
            }, {
                'scope': 'public_profile,email',
                'auth_type': args.scope ? 'rerequest' : null
            });
        } catch (e) {}
    };
})(ssoFacebook = {}, ajax, notification, localStorage, tracking);

 /* jshint ignore:end */

/* jshint ignore:start */

(function(SsoOk) {
    /**
     * OK OAuth login URL
     */
    const LOGIN_URL = 'https://connect.ok.ru/oauth/authorize';

    /**
     * Query string parameters for the OK login OAuth URL.
     */
    const QUERY_DATA = {
        client_id: '1261719296',
        response_type: 'code',
        redirect_uri: `${window.location.protocol}//${window.location.host}/login/ok`,
        scope: 'VALUABLE_ACCESS;GET_EMAIL',
        layout: 'm',
        state: 'okCallback',
    };

    /**
     * Build a query string from the OK login parameters
     *
     * @returns {string}
     */
    function buildQueryString() {
        return Object.keys(QUERY_DATA).map(key => key + '=' + QUERY_DATA[key]).join('&');
    }

    /**
     * Login to OK. There is currently no ajax login support at OK
     */
    SsoOk.login = () => {
        window.location = `${LOGIN_URL}?${buildQueryString()}`;
    };
})(ssoOk = {});

 /* jshint ignore:end */

/* jshint ignore:start */

(function(SsoVk, Ajax, Cookie) {
    const self = this;

    /* vk API properties */
    const API_VERSION = '5.68';

    /* local storage keys */
    const ID_KEY = 'VK_ID';
    const TOKEN_KEY = 'VK_TOKEN';

    /**
     * Set permission values: See https://vk.com/dev/permissions
     */
    const settings = {};

    /**
     * Get settings value for login
     */
    function getSettingsValue() {
        let sum = 0;
        for (let property in settings) {
            if (settings.hasOwnProperty(property)) {
                sum += settings[property];
            }
        }
        return sum;
    }

    /**
     * Handle VK login success - retrieve additional data from the vk API and log into the Jackpot backend.
     *
     * @param vkLoginResponse
     * @param {object} args
     */
    function handleVkLoginSuccess(vkLoginResponse, args) {
        setCookies(vkLoginResponse);
        const fields = ['photo_50', 'photo_200', 'sex', 'bdate'].join(',');

        VK.api('users.get', {fields: fields, v: API_VERSION}, function (vkApiResponse) {
            console.log(vkApiResponse);
            // Backend login / user creation
            try {
                if (vkApiResponse.error) {
                    throw new Error(vkApiResponse.error.error_msg);
                }

                const request = vkApiResponse.response[0];

                Ajax('POST', '/api/login/vk', request, (backendLoginResponse) => {
                    // backend login error
                    if (backendLoginResponse.action === 'errors') {
                        handleBackendLoginError(backendLoginResponse);
                    } else {
                        window.location.reload(); // instantly login
                    }
                }, (backendLoginResponse) => {
                    console.error(backendLoginResponse);
                });
            } catch (e) {
                console.error(e);
            }
        });
    }

    /**
     * Handle a backend login error
     *
     * @param response
     */
    function handleBackendLoginError(response) {
        Cookie.remove('VK');
        console.error(response);
    }

    /**
     * Set VK Cookies
     *
     * @param vkLoginResponse
     */
    function setCookies(vkLoginResponse) {
        const cookie = {};

        cookie[ID_KEY] = vkLoginResponse.session.user.id;
        cookie[TOKEN_KEY] = vkLoginResponse.session.sid;

        Cookie.set('VK', JSON.stringify(cookie), new Date(vkLoginResponse.session.expire * 1000));
    }

    /**
     * Perform a VK login
     *
     * @param {object} args
     */
    SsoVk.login = args => {
        /* globals VK */
        VK.Auth.login(vkResponse => {
            // VK login
            if (vkResponse.session) {
                handleVkLoginSuccess(vkResponse, args);
            } else {
                console.error(vkResponse);
            }
        }, getSettingsValue());
    };

    /**
     * Return the current API token of the VK app
     *
     * @returns {string}
     * @constructor
     */
    SsoVk.getVkToken = () => {
        try {
            return JSON.parse(Cookie.get('VK'))[TOKEN_KEY];
        } catch (e) {
            return '';
        }
    };

    /**
     * Return the current users VK ID
     *
     * @returns {string}
     * @constructor
     */
    SsoVk.getVkId = () => {
        try {
            return JSON.parse(Cookie.get('VK'))[ID_KEY];
        } catch (e) {
            return '';
        }
    };
})(ssoVk = {}, ajax, cookie);

 /* jshint ignore:end */


(function(Ajax, Notification, SsoGoogle, SsoFacebook, SsoOk, SsoVk) {
    // General things for logic below
    const removeActive = function() {
        document.querySelectorAll('[data-target], section.login, section.signup').forEach(function(element) {
            element.classList.remove('active');
        });
    };

    const backdrop = function(onOrOff) {
        if (typeof onOrOff === 'undefined' || !onOrOff) {
            document.querySelector('body').classList.remove('backdrop');
        } else {
            document.querySelector('body').classList.add('backdrop');
        }
    };

    // Logic for login / signup tabs
    document.querySelectorAll('[data-target]').forEach(function(e) {
        e.addEventListener('click', function() {
            removeActive();
            this.classList.add('active');

            document.querySelectorAll(this.getAttribute('data-target')).forEach(function(element) {
                element.classList.add('active');
            });
        });
    });

    // Logic for backdrop
    function isIndexPage() {
        return window.location.pathname === '/';
    }

    document.querySelector('header .login button').addEventListener('click', () => {
        if (!isIndexPage()) {
            document.querySelector('section.login-signup').style.display = 'block';
        }

        removeActive();
        document.querySelector('[data-target="section.login"]').classList.add('active');
        document.querySelector('section.login').classList.add('active');
        backdrop(true);
    });

    document.querySelector('header .signup button').addEventListener('click', () => {
        if (!isIndexPage()) {
            document.querySelector('section.login-signup').style.display = 'block';
        }

        removeActive();
        document.querySelector('[data-target="section.signup"]').classList.add('active');
        document.querySelector('section.signup').classList.add('active');
        backdrop(true);
    });

    document.querySelector('.close-backdrop').addEventListener('click', () => {
        if (!isIndexPage()) {
            document.querySelector('section.login-signup').style.display = 'none';
        }

        backdrop(false);
    });

    function trackBetgeniusPixel(params) {
        if (casino.slug !== 'merkur24-com') {
            return;
        }

        var script = document.createElement('script'), callback = null;
        script.type = 'text/javascript';
        script.src = 'https://zz.connextra.com/dcs/tagController/tag/94094b0da329/' + params;
        script.async = true;
        script.defer = true;

        document.head.appendChild(script);
    }

    // logic for signup more
    function showSignupMore() {
        if (!document.querySelector('.signup-step2').classList.contains('hidden') &&
            document.querySelector('.signup-more').classList.contains('hidden')
        ) {
            return false;
        }

        document.querySelectorAll('.signup-step2').forEach((elm) => {
            elm.classList.remove('hidden');
        });

        document.querySelector('.signup-more').classList.add('hidden');

        trackBetgeniusPixel('regstart');
    }

    document.querySelector('.signup-more').addEventListener('click', () => {
        showSignupMore();
    });

    document.getElementById('signup-name').addEventListener('input', () => {
        let timeout;

        window.clearTimeout(timeout);

        if (document.getElementById('signup-name').value.length >= 2) {
            timeout = window.setTimeout(function () {
                showSignupMore();
            }, 500);
        }
    });

    // Logic for password forgotten
    document.getElementById('password-forgotten-link').addEventListener('click', () => {
        document.getElementById('login-form').classList.add('hidden');
        document.getElementById('password-form').classList.remove('hidden');
    });

    document.getElementById('back-to-login-link').addEventListener('click', () => {
        document.getElementById('login-form').classList.remove('hidden');
        document.getElementById('password-form').classList.add('hidden');
    });

    // login
    function login(action) {
        Ajax('POST', action, {
            email: document.getElementById('login-email').value,
            password: document.getElementById('login-password').value,
            persists: 1
        }, (response) => {
            if (!response.errors.length) {
                window.setTimeout(() => {
                    window.location = '/' + window.location.search;
                }, 500);
            } else {
                if ( //check for blocked users
                    response.errors[0].message === 'blocked'
                ) {
                    window.setTimeout(() => {
                        window.location = response.errors[0].redirect.replace(/\\/g, "");
                    }, 500);
                } else {
                    Notification('error', response.errors.map(e => e.message).join('<br>'));
                }
            }
        },
        (response) => {
            Notification('error', 'A login error has occurred.');
            console.error(response);
        });
    }

    if (document.getElementById('login-form')) {
        document.getElementById('login-form').addEventListener('submit', (e) => {
            e.preventDefault();

            login(e.target.action);
        })
    }

    if (document.getElementById('instant-play-form')) {
        if (document.getElementById('signup-form')) {
            toggleSignupForm(true);
        }

        document.getElementById('instant-play-form').addEventListener('submit', (e) => {
            e.preventDefault();

            signup(e.target.action);
        });

        document.getElementById('button-show-signup').addEventListener('click', (e) => {
            e.preventDefault();
            toggleSignupForm(false);
            showSignupMore();
        });
    }

    function toggleSignupForm(hide) {
        if (!document.getElementById('signup-form')) {
            return;
        }

        if (hide) {
            document.getElementById('signup-form').classList.add('hidden');
            document.getElementById('instant-play').classList.remove('hidden');
        } else {
            document.getElementById('signup-form').classList.remove('hidden');
            document.getElementById('instant-play').classList.add('hidden');
        }
    }

    // password forgotten
    function passwordForgotten(action) {
        Ajax('POST', action, {
            email: document.getElementById('password-email').value,
        }, (response) => {
            if (!response.errors.length) {
                document.getElementById('password-form').classList.add('hidden');
                document.getElementById('login-form').classList.remove('hidden');

                Notification('success', response.successes[0].message);
            } else {
                Notification('error', response.errors.map(e => e.message).join('<br>'));
            }
        },
        (response) => {
            Notification('error', 'An error occurred while attempting to resend a password.');
            console.error(response);
        });
    }

    if (document.getElementById('password-form')) {
        document.getElementById('password-form').addEventListener('submit', (e) => {
            e.preventDefault();

            passwordForgotten(e.target.action);
        })
    }

    // signup
    function signup(action) {
        let post = {
            username: document.getElementById('signup-name').value,
            email: document.getElementById('signup-email').value,
            password: document.getElementById('signup-password').value,
            persists: true,
            age: true,
            dataAgreement: true,
            termsAndConditions: document.getElementById('terms-and-conditions').checked,
            newsletter: document.getElementById('newsletter').checked,
            signup: { // tracking
                screen: location.hostname + location.pathname,
            },
        };

        /* merkur age checkbox */
        if (document.getElementById('age') && !document.getElementById('age').checked) {
            post.age = false;
        }

        /* add dsid to signup params if duarblestorage is available */
        if (typeof ds !== 'undefined') {
            ds.get("dsid", function(value) {
                post.dsid = value || null;
            });
        }

        Ajax('POST', action, post, (response) => {
            if (!response?.errors?.length) {
                if (response?.successes?.length) {
                    Notification('success', response.successes.map(e => e.message).join('<br>'));
                } else {
                    let lsUser = window.localStorage.getItem('user');

                    if (lsUser?.length) {
                        lsUser = JSON.parse(lsUser);
                        window.localStorage.setItem('user', JSON.stringify(Object.assign(lsUser, {
                            email: document.getElementById('signup-email').value,
                        })));
                    } else {
                        window.localStorage.setItem('user', JSON.stringify({
                            email: document.getElementById('signup-email').value,
                        }));
                    }

                    const queryString = window.location.search;
                    let redirectTo = response.redirect || window.localStorage.getItem('redirectTo');

                    redirectTo = !redirectTo ? '/' : redirectTo;
                    redirectTo += queryString;
                    window.location = redirectTo;
                }
            } else {
                // check for blocked users
                if (response?.errors[0]?.message === 'blocked') {
                    window.setTimeout(function() {
                        window.location = response.errors[0].redirect.replace(/\\/g, "");
                    }, 500);
                } else {
                    Notification('error', response.errors.map(e => e.message).join('<br>'));
                }
            }
        },
        (response) => {
            Notification('error', 'An error occurred while attempting to register.');
            console.error(response);
        });
    }

    if (document.getElementById('signup-form')) {
        document.getElementById('signup-form').addEventListener('submit', (e) => {
            e.preventDefault();

            signup(e.target.action);
        })
    }

    function sso(service) {
        switch (service) {
            case 'google':
                SsoGoogle.login();
                break;

            case 'fbook':
                SsoFacebook.login();
                break;

            case 'ok':
                SsoOk.login();
                break;

            case 'vk':
                SsoVk.login();
                break;
        }
    }

    ['google', 'fbook', 'ok', 'vk'].forEach(service => {
        document.querySelectorAll(`.sso-button-${service}`).forEach(btn => {
            btn.addEventListener('click', () => {
                sso(service);
            });
        });
    });

    if (cookie.get('registered')) {
        document.querySelector('[data-target="section.login"]').click();
    }

    // navigation (burger menu)
    function toggleTopNavElement(id) {
        const topnav = document.getElementById(id);

        if (topnav.classList.contains('hidden')) {
            topnav.classList.remove('hidden');
        } else {
            topnav.classList.add('hidden');
        }
    }

    document.getElementById('nav-toggle').addEventListener('click', () => {
        toggleTopNavElement('topnav');
    });

    document.getElementById('topnav-languages-toogle').addEventListener('click', () => {
        toggleTopNavElement('topnav-languages');
    });

    /* Settings sidebar */
    const settingsElm = document.querySelector('sidebar.settings');

    settingsElm.addEventListener('mouseenter', elm => {
        elm.target.querySelector('ul').classList.add('visible');
    })
    settingsElm.addEventListener('mouseleave', elm => {
        elm.target.querySelector('ul').classList.remove('visible');
    });
})(ajax, notification, ssoGoogle, ssoFacebook, ssoOk, ssoVk);

/* jshint ignore:end */
