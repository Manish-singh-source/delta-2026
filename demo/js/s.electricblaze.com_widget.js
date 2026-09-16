window.electricblaze || (window.electricblaze = function () {
    "use strict";
    e = [], r = document, i = r.documentElement.doScroll, n = "DOMContentLoaded", (o = (i ? /^loaded|^c/ : /^loaded|^i|^c/).test(r.readyState)) || r.addEventListener(n, t = function () {
        for (r.removeEventListener(n, t), o = !0; t = e.shift();) t()
    });
    var t, e, r, i, n, o, s = function (t) {
        o ? t() : e.push(t)
    };

    function a(t) {
        return t.charAt(0).toLowerCase() + t.slice(1)
    }

    function c() { }

    function f(t, e) {
        this.data = t, this.platform = e.platform
    }

    function u() {
        this.widgets = {}, this._regWaiting = {}
    }

    function d(t) {
        for (var e in t = t || {}) "state" !== e && (this[e] = t[e]);
        this.state(t.state || "init")
    } 

    function h() {
        return !0
    }

    function l() {
        return !1
    }

    function p(t) {
        this._buffers = {}, this._timeouts = {}, this._listeners = {}, this.containers = t ? t.slice() : []
    }

    function g(t) {
        var e, o = this;
        for (e in t) this[e] = t[e];
        this.assets = [], this.widgetRegistry = new c.Registry;
        var r = {
            containerClassPrefix: this.containerClassPrefix,
            stateClassPrefix: this.stateClassPrefix,
            observe: !0
        };
        this.widgetContainers = c.Container.Collection.fromDocument(r).on("add", this.loadWidgets.bind(this)), window.addEventListener("message", function (t) {
            var e = t.data,
                r = e && "string" == typeof e.action && e.action.split(".") || [];
            if (r[0] === o.name && "widget" === r[1] && (r = r.slice(2).join("."))) {
                var i = e.widget && e.widget.id || "",
                    n = o.findWidgets("#" + i);
                switch (r) {
                    case "ping":
                        return n.length && o.broadcastEvent({
                            type: "widget.pong",
                            widget: {
                                id: i
                            }
                        });
                    case "update":
                        return n.forEach(function (t) {
                            "function" == typeof t.set && t.set(e.payload)
                        });
                    default:
                        return n.forEach(function (t) {
                            "function" == typeof t.call && t.call(r, e.payload)
                        })
                }
            }
        }, !1)
    }
    return c.State = {
        LOADING: "loading",
        MOUNTING: "mounting",
        MOUNTED: "mounted",
        ERROR: "error"
    }, c.Package = (f.for = function (t, e, r) {
        var t = t.map(function (t) {
            return t.widgetId
        }),
            i = e.platform.apiUrl + "/v1/package?platformVersion=" + e.platform.version + "&widgets=" + t.join(","),
            n = new XMLHttpRequest;
        n.open("GET", i), n.withCredentials = !0, n.onload = function () {
            var t;
            try {
                t = JSON.parse(n.response)
            } catch (t) {
                return r(new Error("Failed to load widgets package due to unexpected server response"))
            }
            if (n.status < 200 || 400 <= n.status) return r(new Error("Failed to load widgets package due to " + a(t.message)));
            r(null, new f(t, e))
        }, n.onerror = function () {
            r(new Error("Failed to load widgets package from " + i))
        }, n.send()
    }, f.prototype.getWidgetById = function (i, n) {
        var t = this.data.widgets[i];
        if (!t) return n(new Error("Widget not found"));
        if (!t.ok) return n(new Error(t.error.message));
        var o = t.data;
        this.platform.loadAssets(o.assets).whenWidgetRegistered(o.type, function (t) {
            var e, r = {
                id: i,
                website: window.location.host || "undefined"
            };
            for (e in o.settings) r[e] = o.settings[e];
            try {
                o = new t(r)
            } catch (t) {
                return n(t)
            }
            n(null, o)
        })
    }, f.prototype.getWidgetForEachContainer = function (t, i) {
        t.forEach(function (r) {
            this.getWidgetById(r.widgetId, function (t, e) {
                i(t, r, e)
            })
        }, this)
    }, f), c.Registry = (u.prototype.register = function (e) {
        if ("function" != typeof (t = e) || "string" != typeof t.type || !/^[-a-z0-9.]+$/.test(t.type) || !t.prototype || "function" != typeof t.prototype.mount) throw new Error("Constructor is out of specification");
        var t = e.type;
        if (this.widgets[t]) throw new Error('Type "' + t + '" is already registered');
        this.widgets[t] = e;
        var r = this._regWaiting;
        return r[t] && (r[t].forEach(function (t) {
            t(e)
        }), r[t] = []), this
    }, u.prototype.whenWidgetRegistered = function (t, e) {
        var r;
        return this.widgets[t] ? e(this.widgets[t]) : ((r = this._regWaiting)[t] || (r[t] = []), r[t].push(e)), this
    }, u), d.from = function (t, e) {
        return new this({
            node: t,
            widgetId: t.className.split(" ")[0].slice(e.containerClassPrefix.length),
            stateClassPrefix: e.stateClassPrefix
        })
    }, d.prototype.state = function (t) {
        return arguments.length ? (this._state !== t && (e = this._state && this.stateClassPrefix + this._state, this.node.className = this.node.className.split(" ").filter(function (t) {
            return t !== e
        }).concat(t ? this.stateClassPrefix + t : []).join(" "), this._state = t), this) : this._state;
        var e
    }, d.prototype.connect = function (t) {
        return t.mount(this), this.widget = t, this
    }, d.prototype.restore = function () {
        return this.widget && ("function" == typeof this.widget.unmount && this.widget.unmount(this), delete this.widget), this.state(null), this
    }, (c.Container = d).Selector = {
        from: function (e) {
            if ("function" == typeof e) return e;
            if ("string" != typeof e) throw new TypeError("Argument must be a string or a function");
            return "#" === e.charAt(0) ? function (t) {
                return t.widgetId === e.slice(1)
            } : "*" === e ? h : l
        }
    }, c.Container.Collection = (p.fromDocument = function (t) {
        var e = new this;
        return setTimeout(function () {
            s(function () {
                e.collectFrom(document, t)
            })
        }, 1), e
    }, p.prototype.has = function (e) {
        return this.containers.some(function (t) {
            return t.node === e.node
        })
    }, p.prototype._emitBuffer = function (t, e, r) {
        var i = this,
            n = this._buffers[t] || (this._buffers[t] = []);
        this._timeouts[t] && clearTimeout(this._timeouts[t]), this._timeouts[t] = setTimeout(function () {
            n.length && (i._buffers[t] = [], (i._listeners[e || t] || []).forEach(function (t) {
                t(new p(n))
            }))
        }, r || 45)
    }, p.prototype._addToBuffer = function (t, e) {
        this._buffers[t] || (this._buffers[t] = []), this._buffers[t].push(e)
    }, p.prototype.add = function (t, e) {
        return this._emitBuffer("add", null, e && e.waitForBuffering), this.has(t) || (this.containers.push(t), this._addToBuffer("add", t)), this
    }, p.prototype._getContainersNodes = function (t, e) {
        return "function" != typeof t.querySelectorAll ? [] : Array.prototype.slice.call(t.querySelectorAll('[class^="' + e.containerClassPrefix + '"]')).concat("string" == typeof t.className && 0 === t.className.indexOf(e.containerClassPrefix) ? t : [])
    }, p.prototype.collectFrom = function (t, e) {
        return e && e.observe && this.observe(t, e), this._getContainersNodes(t, e).map(function (t) {
            return c.Container.from(t, e)
        }).forEach(function (t) {
            this.add(t, e)
        }, this), this
    }, p.prototype.forget = function (t, e) {
        var r = this._getContainersNodes(t, e);
        return r.length && (this.containers = this.containers.filter(function (t) {
            return !(-1 < r.indexOf(t.node)) || (t.restore(), !1)
        })), this
    }, p.prototype.observe = function (t, e) {
        if (!window.MutationObserver || "function" != typeof t.querySelectorAll) return this;
        var r = this,
            i = {
                containerClassPrefix: e.containerClassPrefix,
                stateClassPrefix: e.stateClassPrefix,
                waitForBuffering: 1e3
            };
        return new MutationObserver(function (t) {
            t.forEach(function (t) {
                Array.prototype.forEach.call(t.addedNodes, function (t) {
                    r.collectFrom(t, i)
                }), Array.prototype.forEach.call(t.removedNodes, function (t) {
                    r.forget(t, i)
                })
            })
        }).observe(t, {
            childList: !0,
            subtree: !0
        }), this
    }, p.prototype.on = function (t, e) {
        return this._listeners[t] || (this._listeners[t] = []), this._listeners[t].push(e), this
    }, p.prototype.state = function (e) {
        return this.containers.forEach(function (t) {
            t.state(e)
        }), this
    }, p.prototype.map = function (t, e) {
        return this.containers.map(t, e)
    }, p.prototype.forEach = function (t, e) {
        return this.containers.forEach(t, e)
    }, p.prototype.filter = function (t, e) {
        return this.containers.filter(c.Container.Selector.from(t), e)
    }, p), g.prototype.logError = function () {
        var t = Array.prototype.slice.call(arguments);
        return t[0] = this.name + " error: " + a(t[0]), 1 < t.length && (t[0] = t[0] + "\n↪ "), console.error.apply(console, t), this
    }, g.prototype.registerWidget = function (e) {
        try {
            this.widgetRegistry.register(e)
        } catch (t) {
            this.logError("Widget constructor can't be registered because of " + a(t.message), e)
        }
        return this
    }, g.prototype.whenWidgetRegistered = function (t, e) {
        return this.widgetRegistry.whenWidgetRegistered(t, e), this
    }, g.prototype.loadWidgets = function (r) {
        var i = this;
        r.state(c.State.LOADING), c.Package.for(r, {
            platform: i
        }, function (t, e) {
            if (t) return r.state(c.State.ERROR), void i.logError(t.message);
            e.getWidgetForEachContainer(r, function (t, e, r) {
                if (t) return e.state(c.State.ERROR), void i.logError("Widget with ID " + e.widgetId + " can't be loaded because of " + a(t.message), e.node);
                e.state(c.State.MOUNTING);
                try {
                    e.connect(r).state(c.State.MOUNTED)
                } catch (t) {
                    return e.state(c.State.ERROR), void i.logError("Widget with ID " + e.widgetId + " can't be mounted because of " + a(t.message), {
                        container: e.node,
                        widget: r
                    })
                }
                i.broadcastEvent({
                    type: "widget." + c.State.MOUNTED,
                    widget: {
                        id: e.widgetId,
                        parameters: "function" == typeof r.getParameters ? r.getParameters() : {}
                    }
                })
            })
        })
    }, g.prototype.loadAssets = function (t) {
        return t.forEach(function (t) {
            var e; - 1 < this.assets.indexOf((t = "string" == typeof t ? {
                src: t
            } : t).src) || ((e = document.createElement("script")).src = t.src, e.setAttribute("defer", "defer"), e.setAttribute("charset", "UTF-8"), t.name && e.setAttribute("data-asset-name", t.name), t.params && e.setAttribute("data-asset-params", JSON.stringify(t.params)), document.head.appendChild(e), this.assets.push(t.src))
        }, this), this
    }, g.prototype.findWidgets = function (t) {
        return this.widgetContainers.filter(t).reduce(function (t, e) {
            return e.widget && t.push(e.widget), t
        }, [])
    }, g.prototype.broadcastEvent = function (r) {
        var t;
        r && "object" == typeof r && "string" == typeof r.type && (t = Object.keys(r).reduce(function (t, e) {
            return "type" !== e && (t[e] = r[e]), t
        }, {
                event: this.name + "." + r.type,
                platform: {
                    version: this.version
                }
            }), window.parent.postMessage(t, "*"))
    }, new g({
        name: "Electricblaze",
        apiUrl: "https://api.electricblaze.com",
        version: "0.0.2",
        containerClassPrefix: "electricblaze-id-",
        stateClassPrefix: "electricblaze-state-"
    })
}());