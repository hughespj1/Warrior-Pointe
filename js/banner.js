(function(window) {
    fp_cookie = {
        showing: false,
        parentElement: null,
        init: function() {
            var seen = parseInt(window.fp_cookie.checkCookie(), 0);
            if (isNaN(seen)) {
                seen = 0
            }
            if (seen < 3) {
                window.fp_cookie.displayMessage();
                window.fp_cookie.writeCookie(seen + 1)
            }
        },
        displayMessage: function() {
            window.fp_cookie.showing = true;
            theCenter = document.createElement("div");
            theCenter.setAttribute("id", "fp_cookieMessageContainer");
            theCenter = window.fp_cookie.addCSSRules(theCenter, "z-index: 16777271; position:fixed; bottom: 0; right: 0; left: 0");
            messageContainer = document.createElement("div");
            messageContainer = window.fp_cookie.addCSSRules(messageContainer, "padding: 0 5px 0 5px; position: relative; margin: 0 auto; line-height: 35px; border: none; background-color: #ff0000; color: #fff; overflow: hidden; text-align: center; font-size: 30px; font-family: Raleway-Light; min-width:100%");
            messageContainer.innerHTML = 'A new Limited Edition Warrior Pointe shirt is available from Grunt Style.  Order yours today! Find out more <a href="http://www.gruntstyle.com/new/warrior-pointe-our-oath-never-ends.html" target="_blank" style="color: #000; font-weight: bold; text-decoration: none; border-bottom: 1px solid #000;">here</a>!';
            messageClose = document.createElement("a");
            messageClose.setAttribute("id", "fp_cookieMessageCloseButton");
            messageClose.setAttribute("href", "#null");
            messageClose = window.fp_cookie.addCSSRules(messageClose, "display: block; width: 25px; height: 25px; border: solid 1px #000000; color: #000000; font-size: 20px; line-height: 25px; text-decoration: none; position: absolute; right: 5px; top: 5px;");
            messageClose.innerHTML = "&#215;";
            messageContainer.appendChild(messageClose);
            theCenter.appendChild(messageContainer);
            window.fp_cookie.parentElement = window.fp_cookie.getCookieContainerDiv();
            window.fp_cookie.parentElement.appendChild(theCenter);
            window.fp_cookie.addEvent(messageClose, "click", function(e) {
                if (typeof window.event != "undefined") {
                    if (window.event.preventDefault) window.event.preventDefault();
                    window.event.returnValue = false
                }
                return window.fp_cookie.closeMessage()
            })
        },
        getCookieContainerDiv: function() {
            wrapperIds = ["future_company_footer", "1" ];
            for (i = 0; i < wrapperIds.length; i++) {
                element = document.getElementById(wrapperIds[i]);
                if (typeof element !== "undefined" && element != null) {
                    display = window.fp_cookie.getStyle(element, "display");
                    if (display !== "none") {
                        return element
                    }
                }
            }
            divs = document.getElementsByTagName("div");
            for (i = 0; i < divs.length; i++) {
                display = window.fp_cookie.getStyle(divs[i], "display");
                if (display !== "none" && divs[i].parentNode.tagName.toUpperCase() == "BODY") return divs[i]
            }
        },
        getStyle: function(ele, prop) {
            if (ele.currentStyle) {
                return ele.currentStyle[prop]
            } else if (document.defaultView && document.defaultView.getComputedStyle) {
                return document.defaultView.getComputedStyle(ele, "")[prop]
            } else {
                return ele.style[prop]
            }
        },
        closeMessage: function() {
            window.fp_cookie.writeCookie(5);
            ele = document.getElementById("fp_cookieMessageContainer");
            window.fp_cookie.parentElement.removeChild(ele);
            return false
        },
        addCSSRules: function(obj, rules) {
            if (typeof obj == "object") {
                if (typeof obj.style.cssText !== "undefined") {
                    obj.style.cssText = rules
                } else {
                    obj.setAttribute("style", rules)
                }
            }
            return obj
        },
        writeCookie: function(content) {
            date = new Date;
            date.setTime(date.getTime() + 730 * 24 * 60 * 60 * 1e3);
            expires = "; expires=" + date.toGMTString();
            document.cookie = "fp_cookieWarningSeen=" + content + expires + "; path=/"
        },
        checkCookie: function() {
            nameEQ = "fp_cookieWarningSeen=";
            cookie = document.cookie.split(";");
            for (var i = 0; i < cookie.length; i++) {
                c = cookie[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1, c.length)
                }
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length)
            }
            return null
        },
        addEvent: function(obj, type, fn) {
            if (obj.addEventListener) {
                obj.addEventListener(type, fn, false)
            } else if (obj.attachEvent) {
                obj["e" + type + fn] = fn;
                obj[type + fn] = function() {
                    obj["e" + type + fn](window.event)
                };
                obj.attachEvent("on" + type, obj[type + fn])
            } else {
                obj["on" + type] = obj["e" + type + fn]
            }
        }
    };
    window.fp_cookie.addEvent(window, "load", function() {
        window.fp_cookie.init()
    })
})(window);