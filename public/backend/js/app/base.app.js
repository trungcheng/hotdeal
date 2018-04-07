/**
 * Created by AnhNguyen on 12/8/15.
 */
if (!window.config) var config = {};
config.userAgent = navigator.userAgent.toLowerCase();
config.browser = {
    isIE9: -1 != config.userAgent.indexOf("msie 9.0") && -1 == config.userAgent.indexOf("opera"),
    isIE: -1 != config.userAgent.indexOf("msie") && -1 == config.userAgent.indexOf("opera"),
    isChrome: -1 != config.userAgent.indexOf("chrome"),
    isSafari: -1 == config.userAgent.indexOf("chrome") && -1 != config.userAgent.indexOf("applewebkit"),
    isFF: -1 != config.userAgent.indexOf("firefox") && -1 == config.userAgent.indexOf("opera"),
    isOpera: -1 != config.userAgent.indexOf("opera"),
    isBadSafari: !RegExp("[\u0150\u0170]", "g").test("\u0150"),
    firefoxDate: /gecko\/(\d{8})/i.exec(config.userAgent),
    isLinux: -1 != config.userAgent.indexOf("linux"),
    isUnix: -1 != config.userAgent.indexOf("x11"),
    isMac: -1 != config.userAgent.indexOf("mac"),
    isWindows: -1 != config.userAgent.indexOf("win")
};

(function() {
    "use strict";

    $.app = new function() {

        var appRunCls = {};
        var appData;
        var interval = null;
        var instance = this;

        this.lang = {};
        this.vars = {};
        this.t = {};
        this.io = null;

        this.f = function(str, data) {
            return str.replace(/{([^{}]*)}/g,
                function(a, b) {
                    var r = data[b];
                    if (r === undefined) r = '{' + b + '}';
                    return typeof r === 'string' ? r : "" + r;
                }
            );
        };

        this.addCls = function(name, cls) {
            name = name.toLowerCase().trim();
            if (!appRunCls[name]) appRunCls[name] = cls;
        };
        this.getCls = function(name) {
            name = name.toLowerCase().trim();
            return appRunCls[name];
        };

        this.init = function(args) {

            //Set vars
            for (var i in args) {
                if (args.hasOwnProperty(i)) {
                    instance.vars[i] = args[i];
                }
            }

            addPrototype();

            //Run app
            this.run();
        };

        this.pushNoty = function(type, msg) {

            if (type == 'success') $.growl.notice({
                message: msg
            });
            else $.growl.error({
                message: msg
            });
        };

        this.pushConfirmNoti = function(msg, okCb, canCb) {

            return noty({
                text: msg,
                type: 'error',
                layout: 'center',
                buttons: [{
                    addClass: 'btn btn-primary',
                    text: 'OK',
                    onClick: okCb
                }, {
                    addClass: 'btn btn-danger',
                    text: 'Cancel',
                    onClick: canCb
                }]
            });
        };

        this.run = function() {
            $.each(appRunCls, function(index, data) {
                if (data.hasOwnProperty('run'))
                    data.run();
            });
        };

        //function to block element (indicate loading)
        this.blockUI = function(options) {
            var options = $.extend(true, {}, options);
            var html = '<div class="loader">' +
                '<svg class="circular" viewBox="25 25 50 50">' +
                '<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>' +
                '</svg>' +
                '</div>';

            if (options.target) { // element blocking
                var el = $(options.target);
                if (el.height() <= ($(window).height())) {
                    options.cenrerY = true;
                }
                el.block({
                    message: html,
                    baseZ: options.zIndex ? options.zIndex : 999999,
                    centerY: options.cenrerY != undefined ? options.cenrerY : false,
                    css: {
                        top: '10%',
                        border: '0',
                        padding: '0',
                        backgroundColor: 'none'
                    },
                    overlayCSS: {
                        backgroundColor: options.overlayColor ? options.overlayColor : '#000',
                        opacity: options.boxed ? 0.05 : 0.25,
                        cursor: 'wait'
                    }
                });
            } else { // page blocking
                $.blockUI({
                    message: html,
                    baseZ: options.zIndex ? options.zIndex : 999999,
                    css: {
                        border: '0',
                        padding: '0',
                        backgroundColor: 'none'
                    },
                    overlayCSS: {
                        backgroundColor: options.overlayColor ? options.overlayColor : '#000',
                        opacity: options.boxed ? 0.05 : 0.25,
                        cursor: 'wait'
                    }
                });
            }
        };

        //function to un-block element (finish loading)
        this.unblockUI = function(target) {
            if (target) {
                $(target).unblock({
                    onUnblock: function() {
                        $(target).css('position', '');
                        $(target).css('zoom', '');
                    }
                });
            } else {
                $.unblockUI();
            }
        };

        //function to scroll(focus) to an element
        this.scrollTo = function(ele, offset) {
            var pos = (ele && ele.size() > 0) ? ele.offset().top : 0;

            if (ele) {
                if ($('body').hasClass('page-header-fixed')) {
                    pos = pos - $('.page-header').height();
                }
                pos = pos + (offset ? offset : -1 * ele.height());
            }

            $('html,body').animate({
                scrollTop: pos
            }, 'slow');
        };

        this.groupCheckable = function(obj) {

            var set = obj.data('set');
            $(set).change(function() {

                var $this = $(this);
                var refGroup = $this.data('ref');
                var refObj = $(refGroup);
                var setCheckbox = $(refObj.data('set'));
                var setChecked = $(refObj.data('set') + ":checked");

                if ($(setCheckbox).length == $(setChecked).length) {
                    refObj.prop('checked', true);
                } else {
                    refObj.prop('checked', false);
                }
            });

            obj.change(function() {
                var set = $(this).data('set');
                var checked = $(this).is(":checked");
                $(set).each(function() {
                    if (checked) {
                        $(this).prop("checked", true);
                    } else {
                        $(this).prop("checked", false);
                    }
                });
            });
        };

        //function to make animate to an element
        this.animated = function(ele, type, loop, cb) {

            if (cb) ele.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
                cb(ele);
            });

            ele.addClass('animated');
            ele.addClass(type);

            if (!loop) {
                setTimeout(function(e, t) {
                    e.removeClass(t);
                }, 1000, ele, type);
            } else ele.addClass('animated-loop');
        };

        this.upload = function(obj, endpoint, cbComplete) {

            if (!(obj instanceof Element)) obj = obj[0];

            var uploader = new qq.FineUploader({
                element: obj,
                multiple: false,
                text: {
                    uploadButton: "SELECT IMAGE"
                },
                dragAndDrop: {
                    disableDefaultDropzone: true
                },
                validation: {
                    allowedExtensions: ["jpg", "jpeg", "png", "gif"],
                    sizeLimit: 5000 * 1024
                },
                request: {
                    endpoint: endpoint,
                    paramsInBody: true,
                    params: {
                        _csrf: this.vars.csrf
                    }
                },
                callbacks: {
                    onSubmit: function() {
                        var qqProgress = $(obj).find(".qq-progress-bar");
                        qqProgress.hide();
                    },
                    onProgress: function(qqid, fileName) {
                        var qqProgress = $(obj).find(".qq-progress-bar");
                        qqProgress.hide();
                    },
                    onUpload: function(qqid, fileName) {},
                    onComplete: cbComplete
                }
            });

            return uploader;
        };

        //Common ajax
        this.ajax = function(url, params, method, dataType, showLoading, onSuccess, onError, onComplete) {
            showLoading = (typeof showLoading === 'undefined' || showLoading === '') ? false : showLoading;
            method = (typeof(method) == 'undefined' || method == '' || (['GET', 'POST', 'PUT', 'DELETE'].indexOf(method.toUpperCase()) == -1)) ? 'GET' : method.toUpperCase();
            dataType = (typeof(dataType) == 'undefined' || dataType == '') ? 'html' : dataType;

            if (interval) clearInterval(interval);

            if (typeof(onSuccess) == 'undefined' || onSuccess == '') {
                var _onSucess = function(data) {
                    if (dataType.toLocaleLowerCase() == 'json') {
                        if (typeof eID != 'undefined')
                            $(eID).html(data.form);
                    } else {
                        if (typeof eID != 'undefined')
                            $(eID).html(data);
                    }
                };
            } else {
                var _onSucess = onSuccess;
            }

            if (typeof(onError) == 'undefined' || onError == '') {
                var _onError = function(jqXHR, textStatus, errorThrown) {

                    NProgress.done();
                    instance.unblockUI();
                    clearTimeout(interval);

                    try {
                        if (eID != undefined)
                            $(eID).html("Sorry. There was an error.");
                    } catch (e) {

                        sweetAlert("Oops...", "An error occurred while processing please try again later!", "error");
                    }
                };
            } else {
                var _onError = onError;
            }

            var _onComplete = function(jqXHR, textStatus) {

                NProgress.done();
                clearTimeout(interval);

                if (typeof(onComplete) != 'undefined' && onComplete != '') {
                    onComplete(jqXHR, textStatus);
                }
            };

            if (showLoading) {

                if (interval) {
                    clearInterval(interval);
                    NProgress.done();
                }

                //Set interval progress
                interval = setInterval(function() {
                    NProgress.inc();
                }, 200);
            }

            //Append CSRF Token
            if (method.toUpperCase() == 'POST' || method.toUpperCase() == 'PUT' || method.toUpperCase() == 'DELETE') {
                if ($.isPlainObject(params) && params['_token'] == undefined) params['_token'] = this.vars.csrf;
                if (typeof(params) == 'string' && params.indexOf('_token') == -1) params += (params != '' ? '&' : '') + '_token=' + encodeURIComponent(this.vars.csrf);
            }

            return $.ajax({
                type: method,
                url: url,
                dataType: dataType,
                data: params,
                success: _onSucess,
                error: _onError,
                complete: _onComplete
            });
        };

        //Common validate parsley
        this.parsley = function(ele) {
            return ele.parsley();
        };

        this.noop = function() {};

        this.handleTooltip = function() {
            $('.tooltips').tooltip();
        };

        this.appendMScript = function(src) {

            var s = document.createElement("script");
            s.type = "text/javascript";
            s.src = src;
            $('body').append(s);
        };

        this.appendMStyle = function(src) {
            var l = document.createElement("link");
            l.rel = "stylesheet";
            l.href = src;
            $('body').append(l);
        };

        this.handleSelect2Ajax = function(ele, endpoint, isMulti, sendData) {
            ele.select2({
                minimumInputLength: 3,
                multiple: isMulti,
                ajax: {
                    url: endpoint,
                    type: "POST",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function(term, page) { // page is the one-based page number tracked by Select2
                        return {
                            q: term, //search term
                            page_limit: 10, // page size
                            page: page, // page number
                            _csrf: instance.vars.csrf
                        };
                    },
                    results: function(data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {
                            results: data.rs
                        };
                    }
                }
            });
        };


        this.genUrlImg = function(imgId) {
            if (!imgId) return '';
            var host = instance.vars.downloadUrl;
            if (!host) return '';
            return host + imgId.substring(0, 3) + '/' + imgId;
        };

        this.parseJSON = function(str) {
            if(!str) return {};
            try {
                return $.parseJSON( str );
            } catch (err) {
                return {};
            }
        };


        var addPrototype = function() {

            //String replace all
            if (!Array.prototype.indexOf) {
                Array.prototype.indexOf = function(elt /*, from*/ ) {
                    var len = this.length;
                    elt = parseInt(elt, 10);
                    var from = Number(arguments[1]) || 0;
                    from = (from < 0) ?
                        Math.ceil(from) :
                        Math.floor(from);
                    if (from < 0)
                        from += len;

                    for (; from < len; from++) {
                        if (from in this &&
                            this[from] === elt)
                            return from;
                    }
                    return -1;
                };
            }

            // Replaces all instances of the given substring.
            String.prototype.replaceAll = function(strTarget, strSubString) {
                var strText = this;
                var intIndexOfMatch = strText.indexOf(strTarget);
                while (intIndexOfMatch != -1) {
                    strText = strText.replace(strTarget, strSubString)
                    intIndexOfMatch = strText.indexOf(strTarget);
                }
                return (strText);
            };

            String.prototype.replaceArray = function(find, replace) {
                var replaceString = this;
                var regex;
                for (var i = 0; i < find.length; i++) {
                    regex = new RegExp(find[i], "g");
                    replaceString = replaceString.replace(regex, replace[i]);
                }
                return replaceString;
            };

            String.prototype.replaceAt = function(index, char) {
                return this.substr(0, index) + char + this.substr(index + char.length);
            };

            Array.prototype.last = function() {
                return this[this.length - 1]
            };
            Array.prototype.find = function(a) {
                if (config.browser.isIE && !config.browser.isIE9) {
                    for (var b = 0; b < this.length; b++)
                        if (this[b] == a) return b;
                    return null
                }
                a = this.indexOf(a);
                return a === -1 ? null : a
            };
            Array.prototype.findInKey = function(a, b) {
                for (var c = 0; c < this.length; c++)
                    if (this[c][a] == b) return c;
                return null
            };
            Array.prototype.findAllInKey = function(a, b) {
                for (var c = [], d = 0; d < this.length; d++) this[d][a] && this[d][a] == b && c.push(this[d]);
                return c
            };
            Array.prototype.contains = function(a) {
                return this.find(a) != null
            };

            Array.prototype.pushUnique = function(a, b) {
                b != void 0 && b == false ? this.push(a) : this.find(a) == null && this.push(a)
            };

            Array.prototype.unique = function() {
                var r = new Array();
                o: for (var i = 0, n = this.length; i < n; i++) {
                    for (var x = 0, y = r.length; x < y; x++) {
                        if (r[x] == this[i]) {
                            continue o;
                        }
                    }
                    r[r.length] = this[i];
                }
                return r;
            };

            Array.prototype.pushArray = function(a, unique) {
                for (var b = 0; b < a.length; ++b) {
                    if (unique) this.pushUnique(a[b]);
                    else this.push(a[b]);
                }
            };

            Array.prototype.removeItem = function(value) {
                var idx = this.indexOf(value);
                if (idx !== -1) {
                    this.splice(idx, 1);
                    return this;
                } else {
                    return this;
                }
            };

            Array.prototype.random = function() {
                return this[Math.floor((Math.random() * this.length))];
            };

            //Fix popover
            var originalLeave = $.fn.popover.Constructor.prototype.leave;
            $.fn.popover.Constructor.prototype.leave = function(obj) {
                var self = obj instanceof this.constructor ?
                    obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)
                var container, timeout;

                originalLeave.call(this, obj);

                if (obj.currentTarget) {
                    container = $(obj.currentTarget).siblings('.popover');
                    timeout = self.timeout;
                    container.one('mouseenter', function() {
                        //We entered the actual popover – call off the dogs
                        clearTimeout(timeout);
                        //Let's monitor popover content instead
                        container.one('mouseleave', function() {
                            $.fn.popover.Constructor.prototype.leave.call(self, self);
                        });
                    })
                }
            };

            $.fn.popover.Constructor.prototype.hasContent = function() {
                return true;
            };

            //Add method for re-render popover after change popover content
            $.fn.popover.Constructor.prototype.reRender = function() {

                var $tip = this.tip();
                var placement = typeof this.options.placement == 'function' ?
                    this.options.placement.call(this, $tip[0], this.$element[0]) :
                    this.options.placement;

                var autoToken = /\s?auto?\s?/i;
                var autoPlace = autoToken.test(placement);
                if (autoPlace) placement = placement.replace(autoToken, '') || 'top';

                $tip
                    .detach()
                    .css({
                        top: 0,
                        left: 0,
                        display: 'block'
                    })
                    .addClass(placement)
                    .data('bs.' + this.type, this);

                this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element);

                var pos = this.getPosition();
                var actualWidth = $tip[0].offsetWidth;
                var actualHeight = $tip[0].offsetHeight;

                if (autoPlace) {
                    var orgPlacement = placement;
                    var $parent = this.$element.parent();
                    var parentDim = this.getPosition($parent);
                    placement = placement == 'bottom' && pos.top + pos.height + actualHeight - parentDim.scroll > parentDim.height ? 'top' :
                        placement == 'top' && pos.top - parentDim.scroll - actualHeight < 0 ? 'bottom' :
                        placement == 'right' && pos.right + actualWidth > parentDim.width ? 'left' :
                        placement == 'left' && pos.left - actualWidth < parentDim.left ? 'right' :
                        placement;

                    $tip.removeClass(orgPlacement).addClass(placement);
                }

                var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight);

                this.applyPlacement(calculatedOffset, placement);
            };

            $.fn.relativePosition = function() {
                var t = this.get(0),
                    x, y;
                if (t.offsetParent) {
                    x = t.offsetLeft;
                    y = t.offsetTop;
                    while ((t = t.offsetParent)) {
                        x += t.offsetLeft;
                        y += t.offsetTop;
                    }
                }
                return {
                    x: x,
                    y: y
                }
            };

            $.fn.getPercentScrolledY = function() {
                return (this.scrollTop() + this.height()) / this[0].scrollHeight;
            };

            $.fn.outerHTML = function() {
                return $('<div />').append(this.eq(0).clone()).html();
            };

            $.fn.refresh = function() {
                return $(this.selector);
            };

            $.fn.alterClass = function(removals, additions) {

                var self = this;
                if (removals.indexOf('*') === -1) {
                    // Use native jQuery methods if there is no wildcard matching
                    self.removeClass(removals);
                    return !additions ? self : self.addClass(additions);
                }

                var patt = new RegExp('\\s' +
                    removals.replace(/\*/g, '[A-Za-z0-9-_]+').split(' ').join('\\s|\\s') +
                    '\\s', 'g');
                self.each(function(i, it) {
                    var cn = ' ' + it.className + ' ';
                    while (patt.test(cn)) {
                        cn = cn.replace(patt, ' ');
                    }
                    it.className = $.trim(cn);
                });

                return !additions ? self : self.addClass(additions);
            };



        };


        this.popoverClickOutSide = function() {
            $('body').on('click', function(e) {
                $('[data-toggle="popover"]').each(function() {
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        $(this).popover('hide');
                    }
                });
            });

            $('body').on('hidden.bs.popover', function(e) {
                $(e.target).data("bs.popover").inState.click = false;
            });
        };

        this.showError = function(errMess) {
            errMess = errMess || '';
            if (errMess == '')
                errMess = 'An error occurred while processing please try again later!';
            sweetAlert('Oops...', errMess, 'error');
        };

        this.removeItemByValue = function(arr, value) {
            return arr.filter(function(elem) {
                return elem != value;
            });
        };

        this.genRandomNumber = function(min, max) {
            return Math.floor((Math.random() * max) + min);
        };

        this.loadCss = function(lstFile) {
            if (!$.isArray(lstFile)) lstFile = [lstFile];

            $.each(lstFile, function(i, url) {

                if (!$('link[href="' + url + '"]').length)
                    $('head').append('<link rel="stylesheet" type="text/css" href="' + url + '">');

            });


        }

        this.genRand = function (length, current) {
            current = current || '';
            return length ? instance.genRand(--length, "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz".charAt(Math.floor(Math.random() * 60)) + current) : current;
        }
    };


    $.evt = new function() {
        var a = {};
        this.on = function(b, c) {
            a[b] || (a[b] = []);
            a[b].pushUnique(c)
        };
        this.off = function(b, c) {
            if (a[b]) {
                var d = a[b].find(c);
                d && a[b].splice(d, 1)
            }
        };
        this.to = function(b, c) {
            if (a[b])
                for (var d = a[b].length, e = 0; e < d; e++)
                    if (a[b][e]) a[b][e](c)
        }
    };


})();