(function () {
    var li = document.createElement('script');
    li.type = 'text/javascript';
    li.src = "https://www.googletagmanager.com/gtag/js?id=AW-578626169";
    li.async = true;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(li, s);
})();
window.dataLayer = window.dataLayer || [];

const event = document.createEvent('Event');
event.initEvent('cookie', true, true);

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'AW-578626169');

var send_to = 'AW-578626169/wN_ECPmM_-4BEPnE9JMC'

function gtag_report_conversion_cookie(e) {
    gtag('event', 'conversion', {
        'event_callback': function() {
            var elem = e.target;
            if (elem !== undefined && elem != null) elem.dispatchEvent(event);
        },
        'send_to': send_to
    });
    return false;
}

//track without callback handler
function gtag_report_conversion() {
    gtag('event', 'conversion', {
        'send_to': send_to
    });
    return false;
}


function addEventClickCookieNotice (el){
    el.addEventListener('click', function (e) {
        event.preventDefault();
        if (e.target.closest('.cn-button')) {
            if (gtagIsLoaded()) gtag_report_conversion_cookie(e);
            else e.target.dispatchEvent(event)
        }
        return true;
    })
}

function gtagIsLoaded(){
    return window.google_tag_manager !== undefined
}


let cookieWindow = document.getElementById('simple-overlay');
if (cookieWindow !== undefined && cookieWindow != null) {
    addEventClickCookieNotice(cookieWindow)
}