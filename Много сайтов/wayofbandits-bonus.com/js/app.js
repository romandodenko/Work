/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function (funcName, baseObj) {
  "use strict"; // The public function name defaults to window.docReady
  // but you can modify the last line of this function to pass in a different object or method name
  // if you want to put them in a different namespace and those will be used instead of
  // window.docReady(...)

  funcName = funcName || "docReady";
  baseObj = baseObj || window;
  var readyList = [];
  var readyFired = false;
  var readyEventHandlersInstalled = false; // call this when the document is ready
  // this function protects itself against being called more than once

  function ready() {
    if (!readyFired) {
      // this must be set to true before we start calling callbacks
      readyFired = true;

      for (var i = 0; i < readyList.length; i++) {
        // if a callback here happens to add new ready handlers,
        // the docReady() function will see that it already fired
        // and will schedule the callback to run right after
        // this event loop finishes so all handlers will still execute
        // in order and no new ones will be added to the readyList
        // while we are processing the list
        readyList[i].fn.call(window, readyList[i].ctx);
      } // allow any closures held by these functions to free


      readyList = [];
    }
  }

  function readyStateChange() {
    if (document.readyState === "complete") {
      ready();
    }
  } // This is the one public interface
  // docReady(fn, context);
  // the context argument is optional - if present, it will be passed
  // as an argument to the callback


  baseObj[funcName] = function (callback, context) {
    if (typeof callback !== "function") {
      throw new TypeError("callback for docReady(fn) must be a function");
    } // if ready has already fired, then just schedule the callback
    // to fire asynchronously, but right away


    if (readyFired) {
      setTimeout(function () {
        callback(context);
      }, 1);
      return;
    } else {
      // add the function and context to the list
      readyList.push({
        fn: callback,
        ctx: context
      });
    } // if document already ready to go, schedule the ready function to run
    // IE only safe when readyState is "complete", others safe when readyState is "interactive"


    if (document.readyState === "complete" || !document.attachEvent && document.readyState === "interactive") {
      setTimeout(ready, 1);
    } else if (!readyEventHandlersInstalled) {
      // otherwise if we don't have event handlers installed, install them
      if (document.addEventListener) {
        // first choice is DOMContentLoaded event
        document.addEventListener("DOMContentLoaded", ready, false); // backup is window load event

        window.addEventListener("load", ready, false);
      } else {
        // must be IE
        document.attachEvent("onreadystatechange", readyStateChange);
        window.attachEvent("onload", ready);
      }

      readyEventHandlersInstalled = true;
    }
  };
})("docReady", window);

function show(elementId) {
  document.getElementById(elementId).style.display = 'block';
}

function showInline(elementId) {
  document.getElementById(elementId).style.display = 'inline-block';
}

function hide(elementId) {
  document.getElementById(elementId).style.display = 'none';
}

function addBlocker(elementId) {
  var blocker = document.createElement("div");
  blocker.setAttribute('class', 'jquery-modal blocker current');
  document.body.appendChild(blocker);
  blocker.appendChild(document.getElementById(elementId));

  blocker.onclick = function (e) {
    if (!document.getElementById(elementId).contains(e.target)) {
      hide(elementId);
      removeBlocker(elementId);
    }
  };
}

function addIframe(src) {
  var blocker = document.createElement("div");
  blocker.setAttribute('class', 'jquery-modal blocker current');
  document.body.appendChild(blocker);
  var iframe = document.createElement("iframe");
  iframe.name = 'gamesIFrame';
  iframe.id = 'gamesIFrame';
  iframe.src = src;
  iframe.height = '500px';
  iframe.width = '500px';
  blocker.appendChild(iframe);
}

function removeBlocker(elementId) {
  document.body.appendChild(document.getElementById(elementId));
  var el = document.querySelector('.blocker');
  el.parentNode.removeChild(el);
}

function addPreffix(url) {
  var prefix = "";
  if (url.indexOf('/nl') > -1) prefix = "/nl";
  if (url.indexOf('/ca') > -1) prefix = "/ca";
  if (url.indexOf('/de') > -1) prefix = "/de";
  if (url.indexOf('/no') > -1) prefix = "/no";
  return prefix;
}

docReady(function () {
  document.onkeydown = function (evt) {
    evt = evt || window.event;
    var isEscape = false;

    if ("key" in evt) {
      isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
      isEscape = evt.keyCode === 27;
    }

    if (isEscape) {
      var loginForm = document.getElementById('login-form-wrapper');
      if (loginForm != null) document.body.appendChild(loginForm);
      var registerForm = document.getElementById('register-form-wrapper');
      if (registerForm != null) document.body.appendChild(registerForm);
      var el = document.querySelector('.blocker');
      if (el != null) el.parentNode.removeChild(el);
    }
  };

  var logOut = document.getElementById('logout-btn');

  if (logOut != null) {
    logOut.onclick = function (e) {
      e.preventDefault();
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          var prefix = addPreffix(location.href);
          window.location.href = prefix + '/';
        }

        if (xmlHttp.readyState == 4 && xmlHttp.status == 401) {
          alert('Error loggin out.');
        }
      };

      var prefix = addPreffix(location.href);
      xmlHttp.open("get", prefix + "/" + "logout");
      xmlHttp.send();
    };
  }

  var loginBtn = document.getElementById('login-btn');

  if (loginBtn != null) {
    loginBtn.onclick = function (e) {
      e.preventDefault();
      showInline('login-form-wrapper');
      addBlocker('login-form-wrapper');
    };
  }

  var registerBtn = document.getElementById('register-btn');

  if (registerBtn != null) {
    registerBtn.onclick = function (e) {
      e.preventDefault();
      showInline('register-form-wrapper');
      addBlocker('register-form-wrapper');
    };
  }

  var gameBackgrounds = document.getElementsByClassName('game-background');

  for (var i = 0; i < gameBackgrounds.length; ++i) {
    var gameBackground = gameBackgrounds[i];

    gameBackground.onmouseover = function (event) {
      if (this != event.currentTarget) {
        return false;
      }

      this.getElementsByClassName("game-overlay")[0].style.display = 'block';
    };

    gameBackground.onmouseout = function (event) {
      if (this != event.currentTarget) {
        return false;
      }

      this.getElementsByClassName("game-overlay")[0].style.display = 'none';
    };
  }

  var games = document.getElementsByClassName('game');

  for (var i = 0; i < games.length; ++i) {
    var game = games[i];

    game.onclick = function (e) {
      e.preventDefault();
      var link = this.getAttribute('data-link');
      addIframe(link);
    };
  }

  var loginFormSubmit = document.getElementById('login-form-submit');

  if (loginFormSubmit != null) {
    loginFormSubmit.onclick = function (e) {
      e.preventDefault();
      if (!document.getElementById('login-form').checkValidity()) document.getElementById('login-form').reportValidity();
      var email = document.getElementById('cemail').value;
      var password = document.getElementById('cpassord').value;
      var formData = new FormData();
      formData.append('email', email);
      formData.append('password', password);
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          document.cookie = 'api_token' + '=' + encodeURIComponent(xmlHttp.responseText);
          var prefix = addPreffix(location.href);
          window.location.href = prefix + '/playcta?' + location.search.split('?')[1];
        }

        if (xmlHttp.readyState == 4 && xmlHttp.status == 401) {
          document.getElementById('login-form-error').innerHTML = 'Invalid Credentials';
        }
      };

      xmlHttp.open("post", "login");
      xmlHttp.send(formData);
    };
  }

  var registerFormSubmit = document.getElementById('register-form-submit');

  if (registerFormSubmit != null) {
    registerFormSubmit.onclick = function (e) {
      e.preventDefault();
      if (!document.getElementById('register-form').checkValidity()) document.getElementById('register-form').reportValidity();
      var email = document.getElementById('cremail').value;
      var password = document.getElementById('rpassword').value;
      var first_name = document.getElementById('cfirstname').value; //var last_name = document.getElementById('clastname').value;
      //var address = document.getElementById('caddress').value;
      //var birthday = document.getElementById('cbirthday').value;
      //var phone = document.getElementById('cphone').value;

      var formData = new FormData();
      formData.append('email', email);
      formData.append('password', password);
      formData.append('first_name', first_name); //formData.append('last_name', last_name);
      //formData.append('address', address);
      //formData.append('birthday', birthday);
      //formData.append('phone', phone);

      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          var response = xmlHttp.responseText;

          if (response.indexOf('OK') > -1) {
            document.cookie = 'api_token' + '=' + encodeURIComponent(response.split(':')[1]);
            var prefix = addPreffix(location.href);
            window.location.href = prefix + '/playcta?' + location.search.split('?')[1];
          } else document.getElementById('register-form-error').innerHTML = response;
        }
      };

      xmlHttp.open("post", "register");
      xmlHttp.send(formData);
    };
  }
});

/***/ }),

/***/ "./resources/js/cookies.js":
/*!*********************************!*\
  !*** ./resources/js/cookies.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector || Element.prototype.webkitMatchesSelector || function (s) {
    var matches = (this.document || this.ownerDocument).querySelectorAll(s),
        i = matches.length;

    while (--i >= 0 && matches.item(i) !== this) {}

    return i > -1;
  };
}

if (!Element.prototype.closest) {
  Element.prototype.closest = function (s) {
    var el = this;

    do {
      if (Element.prototype.matches.call(el, s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);

    return null;
  };
}

if (!String.prototype.includes) {
  String.prototype.includes = function (search, start) {
    'use strict';

    if (search instanceof RegExp) {
      throw TypeError('first argument must not be a RegExp');
    }

    if (start === undefined) {
      start = 0;
    }

    return this.indexOf(search, start) !== -1;
  };
}

function setCookie(cname, cvalue, exmin) {
  var d = new Date();
  d.setTime(d.getTime() + exmin * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');

  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];

    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }

  return "";
}

function appendAttr(selector, attr, setterFunction) {
  document.querySelectorAll(selector).forEach(function (el, i) {
    el.setAttribute(attr, setterFunction.call(el, i, attr));
  });
}

var getSiteId = function getSiteId() {
  var copy_paq = JSON.parse(JSON.stringify(_paq));
  var siteId = copy_paq.pop('setSiteId').pop();
  var siteIdQs = 'tid=' + siteId;
  return siteIdQs;
};

var isCookieNoticeEnabled = function isCookieNoticeEnabled() {
  var isEnabled = document.getElementById('simple-overlay').getAttribute('data-enabled');
  if (isEnabled === "1") return true;
};

var getCookieLocation = function getCookieLocation() {
  var cookiePolicyLocation = document.getElementById('cn-link').href;
  var buildUrl = cookiePolicyLocation + location.search;

  if (buildUrl.includes('tid')) {
    return encodeURI(buildUrl);
  } else if (buildUrl.includes('?')) {
    buildUrl += '&' + getSiteId();
  } else {
    buildUrl += '?' + getSiteId();
  }

  return encodeURI(buildUrl);
};

var cookieNotice = function cookieNotice() {
  var cookieWindow = document.getElementById('simple-overlay');
  var cookiePolicyLocation = getCookieLocation(); // let acceptButton = document.getElementById('prea');
  // let rejectButton = document.getElementById('prer');

  cookieWindow.addEventListener('cookie', function (event) {
    if (event.target.closest('.cookie-accept-button')) {
      event.preventDefault(); // acceptButton.innerHTML = '';
      // acceptButton.classList.add('loader');

      setTimeout(function () {
        cookieWindow.classList.remove('is-open');
      }, 2000);
      if (isCookieNoticeEnabled()) window.location = cookiePolicyLocation;
    }

    if (event.target.closest('.cookie-decline-button')) {
      event.preventDefault(); // rejectButton.innerHTML = '';
      // rejectButton.classList.add('loader');

      setTimeout(function () {
        cookieWindow.classList.remove('is-open');
      }, 2000);
      if (isCookieNoticeEnabled()) window.location = cookiePolicyLocation;
    }
  }, false);
};

appendAttr('.landing-start-button', 'href', function (index, attr) {
  var buildUrl = this.href + location.search;

  if (buildUrl.includes('tid')) {
    return encodeURI(buildUrl);
  } else if (buildUrl.includes('?')) {
    buildUrl += '&' + getSiteId();
  } else {
    buildUrl += '?' + getSiteId();
  }

  return encodeURI(buildUrl);
});
cookieNotice();

if (location.search.includes('tid')) {
  document.getElementById('simple-overlay').classList.remove('is-open');
}

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/js/cookies.js ./resources/sass/app.scss ***!
  \***************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/html/public/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /var/www/html/public/resources/js/cookies.js */"./resources/js/cookies.js");
module.exports = __webpack_require__(/*! /var/www/html/public/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });