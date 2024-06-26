! function (i) {
    function t(t) {
        var e = 0;
        return t.children("li").each(function () {
            e += i(this).outerWidth(!0)
        }), e
    }

    function e(t) {
        return Math.max.apply(Math, t.children().map(function () {
            return i(this).width()
        }).get())
    }

    function s(i) {
        var t = i.data("settings") || {
                direction: "left",
                speed: 50
            },
            e = i.children().first(),
            s = Math.abs(-i.css(t.direction).replace("px", "").replace("auto", "0") - e.outerWidth(!0)),
            n = 1e3 * s / t.speed,
            r = {};
        return r[t.direction] = i.css(t.direction).replace("px", "").replace("auto", "0") - s, {
            css: r,
            time: n
        }
    }

    function n(i) {
        var t = i.data("settings") || {
            direction: "left"
        };
        i.css("transition-duration", "0s").css(t.direction, "0");
        var e = i.children().first();
        e.hasClass("webticker-init") ? e.remove() : i.children().last().after(e)
    }

    function r(i, t) {
        var e = i.data("settings") || {
            direction: "left"
        };
        "undefined" == typeof t && (t = !1), t && n(i);
        var a = s(i);
        i.animate(a.css, a.time, "linear", function () {
            i.css(e.direction, "0"), r(i, !0)
        })
    }

    function a(i, t) {
        "undefined" == typeof t && (t = !1), t && n(i);
        var e = s(i),
            r = e.time / 1e3;
        r += "s", i.css(e.css).css("transition-duration", r)
    }

    function c(t, e, s) {
        var n = [];
        i.get(t, function (t) {
            var r = i(t);
            r.find("item").each(function () {
                var t = i(this),
                    e = {
                        title: t.find("title").text(),
                        link: t.find("link").text()
                    },
                    s = '<li><a href="' + e.link + '"">' + e.title + "</a></li>";
                n += s
            }), s.webTicker("update", n, e)
        })
    }

    function l(s, n) {
        if (s.children("li").length < 1) return window.console, !1;
        var r = s.data("settings");
        r.duplicateLoops = r.duplicateLoops || 0, s.width("auto");
        var a = 0;
        s.children("li").each(function () {
            a += i(this).outerWidth(!0)
        });
        var c, l = s.find("li:first").height();
        if (r.duplicate) {
            c = e(s);
            for (var o = 0; a - c < s.parent().width() || 1 === s.children().length || o < r.duplicateLoops;) {
                var d = s.children().clone();
                s.append(d), a = 0, a = t(s), c = e(s), o++
            }
            r.duplicateLoops = o
        } else {
            var h = s.parent().width() - a;
            h += s.find("li:first").width(), s.find(".ticker-spacer").length > 0 ? s.find(".ticker-spacer").width(h) : s.append('<li class="ticker-spacer" style="float: ' + r.direction + ";width:" + h + "px;height:" + l + 'px;"></li>')
        }
        r.startEmpty && n && s.prepend('<li class="webticker-init" style="float: ' + r.direction + ";width:" + s.parent().width() + "px;height:" + l + 'px;"></li>'), a = 0, a = t(s), s.width(a + 200);
        var f = 0;
        for (f = t(s); f >= s.width();) s.width(s.width() + 200), f = 0, f = t(s);
        return !0
    }
    var o = function () {
            var i = document.createElement("p").style,
                t = ["ms", "O", "Moz", "Webkit"];
            if ("" === i.transition) return !0;
            for (; t.length;)
                if (t.pop() + "Transition" in i) return !0;
            return !1
        }(),
        d = {
            init: function (t) {
                return t = jQuery.extend({
                    speed: 50,
                    direction: "left",
                    moving: !0,
                    startEmpty: !0,
                    duplicate: !1,
                    rssurl: !1,
                    hoverpause: !0,
                    rssfrequency: 0,
                    updatetype: "reset",
                    transition: "linear",
                    height: "30px",
                    maskleft: "",
                    maskright: "",
                    maskwidth: 0
                }, t), this.each(function () {
                    jQuery(this).data("settings", t);
                    var e = jQuery(this),
                        s = e.wrap('<div class="mask"></div>');
                    s.after('<span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span>');
                    var n, d = e.parent().wrap('<div class="tickercontainer"></div>');
                    if (i(window).resize(function () {
                            clearTimeout(n), n = setTimeout(function () {
                                console.log("window was resized"), l(e, !1)
                            }, 500)
                        }), e.children("li").css("white-space", "nowrap"), e.children("li").css("float", t.direction), e.children("li").css("padding", "0 7px"), e.children("li").css("line-height", t.height), s.css("position", "relative"), s.css("overflow", "hidden"), e.closest(".tickercontainer").css("height", t.height), e.closest(".tickercontainer").css("overflow", "hidden"), e.css("float", t.direction), e.css("position", "relative"), e.css("font", "bold 10px Verdana"), e.css("list-style-type", "none"), e.css("margin", "0"), e.css("padding", "0"), "" !== t.maskleft && "" !== t.maskright) {
                        var h = 'url("' + t.maskleft + '")';
                        d.find(".tickeroverlay-left").css("background-image", h), d.find(".tickeroverlay-left").css("display", "block"), d.find(".tickeroverlay-left").css("pointer-events", "none"), d.find(".tickeroverlay-left").css("position", "absolute"), d.find(".tickeroverlay-left").css("z-index", "30"), d.find(".tickeroverlay-left").css("height", t.height), d.find(".tickeroverlay-left").css("width", t.maskwidth), d.find(".tickeroverlay-left").css("top", "0"), d.find(".tickeroverlay-left").css("left", "-2px"), h = 'url("' + t.maskright + '")', d.find(".tickeroverlay-right").css("background-image", h), d.find(".tickeroverlay-right").css("display", "block"), d.find(".tickeroverlay-right").css("pointer-events", "none"), d.find(".tickeroverlay-right").css("position", "absolute"), d.find(".tickeroverlay-right").css("z-index", "30"), d.find(".tickeroverlay-right").css("height", t.height), d.find(".tickeroverlay-right").css("width", t.maskwidth), d.find(".tickeroverlay-right").css("top", "0"), d.find(".tickeroverlay-right").css("right", "-2px")
                    } else d.find(".tickeroverlay-left").css("display", "none"), d.find(".tickeroverlay-right").css("display", "none");
                    e.children("li").last().addClass("last");
                    var f = l(e, !0);
                    t.rssurl && (c(t.rssurl, t.type, e), t.rssfrequency > 0 && window.setInterval(function () {
                        c(t.rssurl, t.type, e)
                    }, 1e3 * t.rssfrequency * 60)), o ? (e.css("transition-timing-function", t.transition), e.css("transition-duration", "0s").css(t.direction, "0"), f && a(e, !1), e.on("transitionend webkitTransitionEnd oTransitionEnd otransitionend", function (t) {
                        return !!e.is(t.target) && void a(i(this), !0)
                    })) : f && r(i(this)), t.hoverpause && e.hover(function () {
                        if (o) {
                            var e = i(this).css(t.direction);
                            i(this).css("transition-duration", "0s").css(t.direction, e)
                        } else jQuery(this).stop()
                    }, function () {
                        jQuery(this).data("settings").moving && (o ? a(i(this), !1) : r(e))
                    })
                })
            },
            stop: function () {
                var t = i(this).data("settings");
                if (t.moving) return t.moving = !1, this.each(function () {
                    if (o) {
                        var e = i(this).css(t.direction);
                        i(this).css("transition-duration", "0s").css(t.direction, e)
                    } else i(this).stop()
                })
            },
            cont: function () {
                var t = i(this).data("settings");
                if (!t.moving) return t.moving = !0, this.each(function () {
                    o ? a(i(this), !1) : r(i(this))
                })
            },
            transition: function (t) {
                var e = i(this);
                o && e.css("transition-timing-function", t)
            },
            update: function (e, s, n, r) {
                s = s || "reset", "undefined" == typeof n && (n = !0), "undefined" == typeof r && (r = !1), "string" == typeof e && (e = i(e));
                var a = i(this);
                a.webTicker("stop");
                var c = i(this).data("settings");
                if ("reset" === s) a.html(e), l(a, !0);
                else if ("swap" === s) {
                    var o, d, h, f;
                    if (window.console, a.children("li").length < 1) a.html(e), a.css(c.direction, "0"), l(a, !0);
                    else if (c.duplicate === !0) {
                        a.children("li").addClass("old");
                        for (var p = e.length - 1; p >= 0; p--) o = i(e[p]).data("update"), d = a.find('[data-update="' + o + '"]'), d.length < 1 ? n && (0 === a.find(".ticker-spacer:first-child").length && a.find(".ticker-spacer").length > 0 ? a.children("li.ticker-spacer").before(e[p]) : (h = i(e[p]), p === e.length - 1 && h.addClass("last"), a.find("last").after(h), a.find("last").removeClass("last"))) : a.find('[data-update="' + o + '"]').replaceWith(e[p]);
                        a.children("li.webticker-init, li.ticker-spacer").removeClass("old"), r && a.children("li").remove(".old"), f = 0, f = t(a), a.width(f + 200), a.find("li.webticker-init").length < 1 && (c.startEmpty = !1), a.html(e), a.children("li").css("white-space", "nowrap"), a.children("li").css("float", c.direction), a.children("li").css("padding", "0 7px"), a.children("li").css("line-height", c.height), l(a, !0)
                    } else {
                        a.children("li").addClass("old");
                        for (var u = 0; u < e.length; u++) o = i(e[u]).data("update"), d = a.find('[data-update="' + o + '"]'), d.length < 1 ? n && (0 === a.find(".ticker-spacer:first-child").length && a.find(".ticker-spacer").length > 0 ? a.children("li.ticker-spacer").before(e[u]) : (h = i(e[u]), u === e.length - 1 && h.addClass("last"), a.find(".old.last").after(h), a.find(".old.last").removeClass("last"))) : a.find('[data-update="' + o + '"]').replaceWith(e[u]);
                        a.children("li.webticker-init, li.ticker-spacer").removeClass("old"), a.children("li").css("white-space", "nowrap"), a.children("li").css("float", c.direction), a.children("li").css("padding", "0 7px"), a.children("li").css("line-height", c.height), r && a.children("li").remove(".old"), f = 0, f = t(a), a.width(f + 200)
                    }
                }
                a.webTicker("cont")
            }
        };
    i.fn.webTicker = function (t) {
        return d[t] ? d[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof t && t ? void i.error("Method " + t + " does not exist on jQuery.webTicker") : d.init.apply(this, arguments)
    }
}(jQuery);