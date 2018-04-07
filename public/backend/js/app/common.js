/**
 * Created by AnhNguyen on 12/8/15.
 */
(function (app) {
    "use strict";

    app.utils = new function () {

        this.urldecode = function (str) {
            var rt;
            try {
                rt = html_entity_decode(decodeURIComponent((str + '').replace(/\+/g, '%20')));
            } catch (e) {
                rt = html_entity_decode((str + '').replace(/\+/g, '%20'));
            }
            return rt;
        };

        this.uniqueid = function () {
            // always start with a letter (for DOM friendlyness)
            var idstr = String.fromCharCode(Math.floor((Math.random() * 25) + 65));
            do {
                // between numbers and characters (48 is 0 and 90 is Z (42-48 = 90)
                var ascicode = Math.floor((Math.random() * 42) + 48);
                if (ascicode < 58 || ascicode > 64) {
                    // exclude all chars between : (58) and @ (64)
                    idstr += String.fromCharCode(ascicode);
                }
            } while (idstr.length < 32);

            return (idstr);
        };

        this.pickRandomEle = function(obj){
            var result;
            var count = 0;
            for (var prop in obj)
                if (Math.random() < 1/++count)
                   result = prop;
            return obj[result];

        };


        this.genUUID = function(){

            var d = new Date().getTime();
            var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = (d + Math.random()*16)%16 | 0;
                d = Math.floor(d/16);
                return (c=='x' ? r : (r&0x3|0x8)).toString(16);
            });
            return uuid;
        };

        var leftChain = [], rightChain = []; //Using for cache
        this.compare = function (x, y) {
            var p;

            // remember that NaN === NaN returns false
            // and isNaN(undefined) returns true
            if (isNaN(x) && isNaN(y) && typeof x === 'number' && typeof y === 'number') {
                return true;
            }

            // Compare primitives and functions.
            // Check if both arguments link to the same object.
            // Especially useful on step when comparing prototypes
            if (x === y) {
                return true;
            }

            // Works in case when functions are created in constructor.
            // Comparing dates is a common scenario. Another built-ins?
            // We can even handle functions passed across iframes
            if ((typeof x === 'function' && typeof y === 'function') ||
                (x instanceof Date && y instanceof Date) ||
                (x instanceof RegExp && y instanceof RegExp) ||
                (x instanceof String && y instanceof String) ||
                (x instanceof Number && y instanceof Number)) {
                return x.toString() === y.toString();
            }

            // At last checking prototypes as good a we can
            if (!(x instanceof Object && y instanceof Object)) {
                return false;
            }

            if (x.isPrototypeOf(y) || y.isPrototypeOf(x)) {
                return false;
            }

            if (x.constructor !== y.constructor) {
                return false;
            }

            if (x.prototype !== y.prototype) {
                return false;
            }

            // check for infinitive linking loops
            if (leftChain.indexOf(x) > -1 || rightChain.indexOf(y) > -1) {
                return false;
            }

            // Quick checking of one object beeing a subset of another.
            for (p in y) {
                if (y.hasOwnProperty(p) !== x.hasOwnProperty(p)) {
                    return false;
                }
                else if (typeof y[p] !== typeof x[p]) {
                    return false;
                }
            }

            for (p in x) {
                if (y.hasOwnProperty(p) !== x.hasOwnProperty(p)) {
                    return false;
                }
                else if (typeof y[p] !== typeof x[p]) {
                    return false;
                }

                switch (typeof (x[p])) {
                    case 'object':
                    case 'function':

                        leftChain.push(x);
                        rightChain.push(y);

                        if (!this.compare (x[p], y[p])) {
                            return false;
                        }

                        leftChain.pop();
                        rightChain.pop();
                        break;

                    default:
                        if (x[p] !== y[p]) {
                            return false;
                        }
                        break;
                }
            }

            return true;
        };

        this.convertToAlias = function (string) {
            string         = $.trim(string);
            var strFind    = [
                    ': ', ':',
                    ' ',
                    'đ', 'Đ',
                    'á', 'à', 'ạ', 'ả', 'ã', 'Á', 'À', 'Ạ', 'Ả', 'Ã', 'ă', 'ắ', 'ằ', 'ặ', 'ẳ', 'ẵ', 'Ă', 'Ắ', 'Ằ', 'Ặ', 'Ẳ', 'Ẵ', 'â', 'ấ', 'ầ', 'ậ', 'ẩ', 'ẫ', 'Â', 'Ấ', 'Ầ', 'Ậ', 'Ẩ', 'Ẫ',
                    'ó', 'ò', 'ọ', 'ỏ', 'õ', 'Ó', 'Ò', 'Ọ', 'Ỏ', 'Õ', 'ô', 'ố', 'ồ', 'ộ', 'ổ', 'ỗ', 'Ô', 'Ố', 'Ồ', 'Ộ', 'Ổ', 'Ỗ', 'ơ', 'ớ', 'ờ', 'ợ', 'ở', 'ỡ', 'Ơ', 'Ớ', 'Ờ', 'Ợ', 'Ở', 'Ỡ',
                    'é', 'è', 'ẹ', 'ẻ', 'ẽ', 'É', 'È', 'Ẹ', 'Ẻ', 'Ẽ', 'ê', 'ế', 'ề', 'ệ', 'ể', 'ễ', 'Ê', 'Ế', 'Ề', 'Ệ', 'Ể', 'Ễ',
                    'ú', 'ù', 'ụ', 'ủ', 'ũ', 'Ú', 'Ù', 'Ụ', 'Ủ', 'Ũ', 'ư', 'ứ', 'ừ', 'ự', 'ử', 'ữ', 'Ư', 'Ứ', 'Ừ', 'Ự', 'Ử', 'Ữ',
                    'í', 'ì', 'ị', 'ỉ', 'ĩ', 'Í', 'Ì', 'Ị', 'Ỉ', 'Ĩ',
                    'ý', 'ỳ', 'ỵ', 'ỷ', 'ỹ', 'Ý', 'Ỳ', 'Ỵ', 'Ỷ', 'Ỹ'
                ],
                strReplace = [
                    '-', '-',
                    '-',
                    'd', 'd',
                    'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a',
                    'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o',
                    'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e',
                    'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u',
                    'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i',
                    'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y'
                ],
                objMap     = {};

            for (var key in strFind) {
                string = string.replace(new RegExp(strFind[key], "ig"), strReplace[key]);
            }
            return string.toLowerCase();
        };

        this.base64_decode = function (str) {
            return $.base64.decode(str);
        };

        this.html_entity_decode = function (str) {
            str             = decodeURIComponent((str + '').replace(/\+/g, '%20'));
            var tarea       = document.createElement('textarea');
            tarea.innerHTML = str;
            return tarea.value;
            tarea.parentNode.removeChild(tarea);
        };
        this.strpos             = function (haystack, needle, offset) {
            var i = (haystack + '').indexOf(needle, (offset || 0));
            return i === -1 ? false : i;
        };
        this.explode            = function (delimiter, string, limit) {
            var emptyArray = {
                0: ''
            };
            if (arguments.length < 2 || typeof arguments[0] == 'undefined' || typeof arguments[1] == 'undefined') {
                return null;
            }
            if (delimiter === '' || delimiter === false || delimiter === null) {
                return false;
            }

            if (typeof delimiter == 'function' || typeof delimiter == 'object' || typeof string == 'function' || typeof string == 'object') {
                return emptyArray;
            }
            if (delimiter === true) {
                delimiter = '1';
            }
            if (!limit) {
                return string.toString().split(delimiter.toString());
            }
            var splitted = string.toString().split(delimiter.toString());
            var partA    = splitted.splice(0, limit - 1);
            var partB    = splitted.join(delimiter.toString());
            partA.push(partB);
            return partA;
        };

        this.getQueryParam = function (paramName) {
            var strQuery = window.location.search.substring(1);
            var arrParam = strQuery.split("&");
            for (var i = 0; i < arrParam.length; i++) {
                var paramItem = arrParam[i].split("=");
                if (paramItem[0] == paramName) {
                    return paramItem[1];
                }
            }
            return '';
        };

        this.isIntNumber = function (sText) {
            var ValidChars = "0123456789";
            var IsNumber   = true;
            var Char;
            for (var i = 0; i < sText.length; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) == -1 || sText.charAt(0) == "0") {
                    IsNumber = false;
                    break;
                }
            }
            return IsNumber;
        };

        this.strIsNumber = function (sText) {
            var ValidChars = "0123456789";
            var IsNumber   = true;
            var Char;
            for (var i = 0; i < sText.length; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                    break;
                }
            }
            return IsNumber;
        };

        this.getNumberFromStr = function (sText) {
            var ValidChars = "0123456789";
            var relNumber  = '';
            var Char;
            for (var i = 0; i < sText.length; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) != -1) {
                    relNumber += Char;
                }
            }
            return relNumber;
        };

// arrAllowType:  array('.jpg', '.gif', '.png')
        this.uploadValidExtension = function (fileName, arrAllowType) {
            if (fileName == "") {
                return false;
            }
            fileName      = fileName.toLowerCase();
            var extension = fileName.substr(fileName.lastIndexOf('.'), fileName.length);
            var check     = false;
            for (var i in arrAllowType) {
                if (arrAllowType[i] == extension) {
                    check = true;
                    break;
                }
            }
            return check;
        }// JavaScript Document

        this.isUrl = function (urlStr) {
            if (urlStr.indexOf(' ') != -1) {
                return false;
            }

            if (urlStr == '' || urlStr == null) {
                return false;
            }

            var RegexUrl = /(https|http):\/\/([a-z0-9\-._~%!$&'()*+,;=]+@)?([a-z0-9\-._~%]+|\[[a-f0-9:.]+\]|\[v[a-f0-9][a-z0-9\-._~%!$&'()*+,;=:]+\])(:[0-9]+)?(.*)/i;

            var chk = false;
            if (RegexUrl.test(urlStr)) {
                chk = true;
            } else {
                chk = false;
            }

            if (chk) {

                var rex = /(https|http):\/\/w/i;
                if (rex.test(urlStr)) {
                    var RegexUrl2 = /(https|http):\/\/(w{3,3})\./i;
                    if (RegexUrl2.test(urlStr)) {
                        /*
                         var arr = urlStr.toLowerCase().split('www.');
                         var num = 0;
                         for(var i=0; i < arr.length; i++)
                         {
                         if(arr[i] == '')
                         {
                         num++;
                         }
                         }
                         chk = (num == 0) ? true : false;
                         */
                        chk = true;
                    } else {
                        chk = false;
                    }
                }

            }
            return chk;
        };

        this.Encoder = {
            // When encoding do we convert characters into html or numerical entities
            EncodeType: "entity", // entity OR numerical

            isEmpty        : function (val) {
                if (val) {
                    return ((val === null) || val.length == 0 || /^\s+$/.test(val));
                } else {
                    return true;
                }
            },
            arr1           : new Array('&nbsp;', '&iexcl;', '&cent;', '&pound;', '&curren;', '&yen;', '&brvbar;', '&sect;', '&uml;', '&copy;', '&ordf;', '&laquo;', '&not;', '&shy;', '&reg;', '&macr;', '&deg;', '&plusmn;', '&sup2;', '&sup3;', '&acute;', '&micro;', '&para;', '&middot;', '&cedil;', '&sup1;', '&ordm;', '&raquo;', '&frac14;', '&frac12;', '&frac34;', '&iquest;', '&Agrave;', '&Aacute;', '&Acirc;', '&Atilde;', '&Auml;', '&Aring;', '&Aelig;', '&Ccedil;', '&Egrave;', '&Eacute;', '&Ecirc;', '&Euml;', '&Igrave;', '&Iacute;', '&Icirc;', '&Iuml;', '&ETH;', '&Ntilde;', '&Ograve;', '&Oacute;', '&Ocirc;', '&Otilde;', '&Ouml;', '&times;', '&Oslash;', '&Ugrave;', '&Uacute;', '&Ucirc;', '&Uuml;', '&Yacute;', '&THORN;', '&szlig;', '&agrave;', '&aacute;', '&acirc;', '&atilde;', '&auml;', '&aring;', '&aelig;', '&ccedil;', '&egrave;', '&eacute;', '&ecirc;', '&euml;', '&igrave;', '&iacute;', '&icirc;', '&iuml;', '&eth;', '&ntilde;', '&ograve;', '&oacute;', '&ocirc;', '&otilde;', '&ouml;', '&divide;', '&Oslash;', '&ugrave;', '&uacute;', '&ucirc;', '&uuml;', '&yacute;', '&thorn;', '&yuml;', '&quot;', '&amp;', '&lt;', '&gt;', '&oelig;', '&oelig;', '&scaron;', '&scaron;', '&yuml;', '&circ;', '&tilde;', '&ensp;', '&emsp;', '&thinsp;', '&zwnj;', '&zwj;', '&lrm;', '&rlm;', '&ndash;', '&mdash;', '&lsquo;', '&rsquo;', '&sbquo;', '&ldquo;', '&rdquo;', '&bdquo;', '&dagger;', '&dagger;', '&permil;', '&lsaquo;', '&rsaquo;', '&euro;', '&fnof;', '&alpha;', '&beta;', '&gamma;', '&delta;', '&epsilon;', '&zeta;', '&eta;', '&theta;', '&iota;', '&kappa;', '&lambda;', '&mu;', '&nu;', '&xi;', '&omicron;', '&pi;', '&rho;', '&sigma;', '&tau;', '&upsilon;', '&phi;', '&chi;', '&psi;', '&omega;', '&alpha;', '&beta;', '&gamma;', '&delta;', '&epsilon;', '&zeta;', '&eta;', '&theta;', '&iota;', '&kappa;', '&lambda;', '&mu;', '&nu;', '&xi;', '&omicron;', '&pi;', '&rho;', '&sigmaf;', '&sigma;', '&tau;', '&upsilon;', '&phi;', '&chi;', '&psi;', '&omega;', '&thetasym;', '&upsih;', '&piv;', '&bull;', '&hellip;', '&prime;', '&prime;', '&oline;', '&frasl;', '&weierp;', '&image;', '&real;', '&trade;', '&alefsym;', '&larr;', '&uarr;', '&rarr;', '&darr;', '&harr;', '&crarr;', '&larr;', '&uarr;', '&rarr;', '&darr;', '&harr;', '&forall;', '&part;', '&exist;', '&empty;', '&nabla;', '&isin;', '&notin;', '&ni;', '&prod;', '&sum;', '&minus;', '&lowast;', '&radic;', '&prop;', '&infin;', '&ang;', '&and;', '&or;', '&cap;', '&cup;', '&int;', '&there4;', '&sim;', '&cong;', '&asymp;', '&ne;', '&equiv;', '&le;', '&ge;', '&sub;', '&sup;', '&nsub;', '&sube;', '&supe;', '&oplus;', '&otimes;', '&perp;', '&sdot;', '&lceil;', '&rceil;', '&lfloor;', '&rfloor;', '&lang;', '&rang;', '&loz;', '&spades;', '&clubs;', '&hearts;', '&diams;'),
            arr2           : new Array('&#160;', '&#161;', '&#162;', '&#163;', '&#164;', '&#165;', '&#166;', '&#167;', '&#168;', '&#169;', '&#170;', '&#171;', '&#172;', '&#173;', '&#174;', '&#175;', '&#176;', '&#177;', '&#178;', '&#179;', '&#180;', '&#181;', '&#182;', '&#183;', '&#184;', '&#185;', '&#186;', '&#187;', '&#188;', '&#189;', '&#190;', '&#191;', '&#192;', '&#193;', '&#194;', '&#195;', '&#196;', '&#197;', '&#198;', '&#199;', '&#200;', '&#201;', '&#202;', '&#203;', '&#204;', '&#205;', '&#206;', '&#207;', '&#208;', '&#209;', '&#210;', '&#211;', '&#212;', '&#213;', '&#214;', '&#215;', '&#216;', '&#217;', '&#218;', '&#219;', '&#220;', '&#221;', '&#222;', '&#223;', '&#224;', '&#225;', '&#226;', '&#227;', '&#228;', '&#229;', '&#230;', '&#231;', '&#232;', '&#233;', '&#234;', '&#235;', '&#236;', '&#237;', '&#238;', '&#239;', '&#240;', '&#241;', '&#242;', '&#243;', '&#244;', '&#245;', '&#246;', '&#247;', '&#248;', '&#249;', '&#250;', '&#251;', '&#252;', '&#253;', '&#254;', '&#255;', '&#34;', '&#38;', '&#60;', '&#62;', '&#338;', '&#339;', '&#352;', '&#353;', '&#376;', '&#710;', '&#732;', '&#8194;', '&#8195;', '&#8201;', '&#8204;', '&#8205;', '&#8206;', '&#8207;', '&#8211;', '&#8212;', '&#8216;', '&#8217;', '&#8218;', '&#8220;', '&#8221;', '&#8222;', '&#8224;', '&#8225;', '&#8240;', '&#8249;', '&#8250;', '&#8364;', '&#402;', '&#913;', '&#914;', '&#915;', '&#916;', '&#917;', '&#918;', '&#919;', '&#920;', '&#921;', '&#922;', '&#923;', '&#924;', '&#925;', '&#926;', '&#927;', '&#928;', '&#929;', '&#931;', '&#932;', '&#933;', '&#934;', '&#935;', '&#936;', '&#937;', '&#945;', '&#946;', '&#947;', '&#948;', '&#949;', '&#950;', '&#951;', '&#952;', '&#953;', '&#954;', '&#955;', '&#956;', '&#957;', '&#958;', '&#959;', '&#960;', '&#961;', '&#962;', '&#963;', '&#964;', '&#965;', '&#966;', '&#967;', '&#968;', '&#969;', '&#977;', '&#978;', '&#982;', '&#8226;', '&#8230;', '&#8242;', '&#8243;', '&#8254;', '&#8260;', '&#8472;', '&#8465;', '&#8476;', '&#8482;', '&#8501;', '&#8592;', '&#8593;', '&#8594;', '&#8595;', '&#8596;', '&#8629;', '&#8656;', '&#8657;', '&#8658;', '&#8659;', '&#8660;', '&#8704;', '&#8706;', '&#8707;', '&#8709;', '&#8711;', '&#8712;', '&#8713;', '&#8715;', '&#8719;', '&#8721;', '&#8722;', '&#8727;', '&#8730;', '&#8733;', '&#8734;', '&#8736;', '&#8743;', '&#8744;', '&#8745;', '&#8746;', '&#8747;', '&#8756;', '&#8764;', '&#8773;', '&#8776;', '&#8800;', '&#8801;', '&#8804;', '&#8805;', '&#8834;', '&#8835;', '&#8836;', '&#8838;', '&#8839;', '&#8853;', '&#8855;', '&#8869;', '&#8901;', '&#8968;', '&#8969;', '&#8970;', '&#8971;', '&#9001;', '&#9002;', '&#9674;', '&#9824;', '&#9827;', '&#9829;', '&#9830;'),
            // Convert HTML entities into numerical entities
            HTML2Numerical : function (s) {
                return this.swapArrayVals(s, this.arr1, this.arr2);
            },
            // Convert Numerical entities into HTML entities
            NumericalToHTML: function (s) {
                return this.swapArrayVals(s, this.arr2, this.arr1);
            },
            // Numerically encodes all unicode characters
            numEncode      : function (s) {

                if (this.isEmpty(s))
                    return "";

                var e = "";
                for (var i = 0; i < s.length; i++) {
                    var c = s.charAt(i);
                    if (c < " " || c > "~") {
                        c = "&#" + c.charCodeAt() + ";";
                    }
                    e += c;
                }
                return e;
            },
            // HTML Decode numerical and HTML entities back to original values
            htmlDecode     : function (s) {

                var c, m, d = s;

                if (this.isEmpty(d))
                    return "";

                // convert HTML entites back to numerical entites first
                d = this.HTML2Numerical(d);

                // look for numerical entities &#34;
                var arr = d.match(/&#[0-9]{1,5};/g);

                // if no matches found in string then skip
                if (arr != null) {
                    for (var x = 0; x < arr.length; x++) {
                        m = arr[x];
                        c = m.substring(2, m.length - 1); //get numeric part which is refernce to unicode character
                        // if its a valid number we can decode
                        if (c >= -32768 && c <= 65535) {
                            // decode every single match within string
                            d = d.replace(m, String.fromCharCode(c));
                        } else {
                            d = d.replace(m, ""); //invalid so replace with nada
                        }
                    }
                }

                return d;
            },
            // encode an input string into either numerical or HTML entities
            htmlEncode     : function (s, dbl) {

                if (this.isEmpty(s))
                    return "";

                // do we allow double encoding? E.g will &amp; be turned into &amp;amp;
                dbl = dbl || false; //default to prevent double encoding

                // if allowing double encoding we do ampersands first
                if (dbl) {
                    if (this.EncodeType == "numerical") {
                        s = s.replace(/&/g, "&#38;");
                    } else {
                        s = s.replace(/&/g, "&amp;");
                    }
                }

                // convert the xss chars to numerical entities ' " < >
                s = this.XSSEncode(s, false);

                if (this.EncodeType == "numerical" || !dbl) {
                    // Now call function that will convert any HTML entities to numerical codes
                    s = this.HTML2Numerical(s);
                }

                // Now encode all chars above 127 e.g unicode
                s = this.numEncode(s);

                // now we know anything that needs to be encoded has been converted to numerical entities we
                // can encode any ampersands & that are not part of encoded entities
                // to handle the fact that I need to do a negative check and handle multiple ampersands &&&
                // I am going to use a placeholder

                // if we don't want double encoded entities we ignore the & in existing entities
                if (!dbl) {
                    s = s.replace(/&#/g, "##AMPHASH##");

                    if (this.EncodeType == "numerical") {
                        s = s.replace(/&/g, "&#38;");
                    } else {
                        s = s.replace(/&/g, "&amp;");
                    }

                    s = s.replace(/##AMPHASH##/g, "&#");
                }

                // replace any malformed entities
                s = s.replace(/&#\d*([^\d;]|$)/g, "$1");

                if (!dbl) {
                    // safety check to correct any double encoded &amp;
                    s = this.correctEncoding(s);
                }

                // now do we need to convert our numerical encoded string into entities
                if (this.EncodeType == "entity") {
                    s = this.NumericalToHTML(s);
                }

                return s;
            },
            //Stripslashes
            stripslashes   : function (str) {
                return (str + '')
                    .replace(/\\(.?)/g, function (s, n1) {
                        switch (n1) {
                            case '\\':
                                return '\\';
                            case '0':
                                return '\u0000';
                            case '':
                                return '';
                            default:
                                return n1;
                        }
                    });
            },
            // Encodes the basic 4 characters used to malform HTML in XSS hacks
            XSSEncode      : function (s, en) {
                if (!this.isEmpty(s)) {
                    en = en || true;
                    // do we convert to numerical or html entity?
                    if (en) {
                        s = s.replace(/\'/g, "&#39;"); //no HTML equivalent as &apos is not cross browser supported
                        s = s.replace(/\"/g, "&quot;");
                        s = s.replace(/</g, "&lt;");
                        s = s.replace(/>/g, "&gt;");
                    } else {
                        s = s.replace(/\'/g, "&#39;"); //no HTML equivalent as &apos is not cross browser supported
                        s = s.replace(/\"/g, "&#34;");
                        s = s.replace(/</g, "&#60;");
                        s = s.replace(/>/g, "&#62;");
                    }
                    return s;
                } else {
                    return "";
                }
            },
            // returns true if a string contains html or numerical encoded entities
            hasEncoded     : function (s) {
                if (/&#[0-9]{1,5};/g.test(s)) {
                    return true;
                } else if (/&[A-Z]{2,6};/gi.test(s)) {
                    return true;
                } else {
                    return false;
                }
            },
            // will remove any unicode characters
            stripUnicode   : function (s) {
                return s.replace(/[^\x20-\x7E]/g, "");

            },
            // corrects any double encoded &amp; entities e.g &amp;amp;
            correctEncoding: function (s) {
                return s.replace(/(&amp;)(amp;)+/, "$1");
            },
            // Function to loop through an array swaping each item with the value from another array e.g swap HTML entities with Numericals
            swapArrayVals  : function (s, arr1, arr2) {
                if (this.isEmpty(s))
                    return "";
                var re;
                if (arr1 && arr2) {
                    //ShowDebug("in swapArrayVals arr1.length = " + arr1.length + " arr2.length = " + arr2.length)
                    // array lengths must match
                    if (arr1.length == arr2.length) {
                        for (var x = 0, i = arr1.length; x < i; x++) {
                            re = new RegExp(arr1[x], 'g');
                            s  = s.replace(re, arr2[x]); //swap arr1 item with matching item from arr2
                        }
                    }
                }
                return s;
            },
            inArray        : function (item, arr) {
                for (var i = 0, x = arr.length; i < x; i++) {
                    if (arr[i] === item) {
                        return i;
                    }
                }
                return -1;
            }

        };

        this.UrlEncode = {
            // public method for url encoding
            encode      : function (string) {
                return escape(this._utf8_encode(string));
            },
            // public method for url decoding
            decode      : function (string) {
                return this._utf8_decode(unescape(string));
            },
            // private method for UTF-8 encoding
            _utf8_encode: function (string) {
                string      = string.replace(/\r\n/g, "\n");
                var utftext = "";

                for (var n = 0; n < string.length; n++) {

                    var c = string.charCodeAt(n);

                    if (c < 128) {
                        utftext += String.fromCharCode(c);
                    }
                    else if ((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                    else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }

                }

                return utftext;
            },
            // private method for UTF-8 decoding
            _utf8_decode: function (utftext) {
                var string = "";
                var i      = 0;
                var c      = 0,
                    c1     = 0,
                    c2     = 0;

                while (i < utftext.length) {

                    c = utftext.charCodeAt(i);

                    if (c < 128) {
                        string += String.fromCharCode(c);
                        i++;
                    }
                    else if ((c > 191) && (c < 224)) {
                        c2 = utftext.charCodeAt(i + 1);
                        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                        i += 2;
                    }
                    else {
                        c2     = utftext.charCodeAt(i + 1);
                        var c3 = utftext.charCodeAt(i + 2);
                        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                        i += 3;
                    }

                }
                return string;
            }
        };

        this.stripHtmlTags = function (str) {
            return str.replace(/<\/?[^>]+>/gi, '');
        };

        this.validHtmlTags = function (v) {
            return (v.match(/(<+[^>]*?>)/g));
        };

        this.chkHtmlTags = function (str) {
            var check = false;
            if (str.match(/<\/?[^>]+>/gi)) {
                check = true;
            }
            return check;
        };

        this.getSelText = function () {
            var txt = '';
            if (window.getSelection) {
                txt = window.getSelection();
            }
            else if (document.getSelection) {
                txt = document.getSelection();
            }
            else if (document.selection) {
                txt = document.selection.createRange().text;
            }
            return txt;
        };

        this.getDomainFromUrl = function (strUrl) {

            if (strUrl == '')
                return '';
            try {
                var domain = strUrl.match(/:\/\/(.[^/]+)/)[1];
                domain     = domain.replace(/www./i, '');
                return domain;
            }
            catch (err) {
                return '';
            }

        };

        this.validateUsername = function (uname) {
            var error        = "";
            var illegalChars = /\W/; // allow letters, numbers, and underscores

            if (uname == "") {
                error = "Please enter valid username.";
            } else if ((uname.length < 4) || (uname.length > 64)) {
                error = "Please enter valid username!";
            } else if (illegalChars.test(uname)) {
                error = "Please enter valid username.";
            }
            return error;
        };

        this.validatePassword = function (pws) {
            var error        = "";
            var illegalChars = /[\W_]/; // allow only letters and numbers

            if (pws == "") {
                error = "Please enter password.";
            } else if ((pws.length < 6) || (pws.length > 64)) {
                error = "Invalid password!";
            } else if (illegalChars.test(pws)) {
                error = "Invalid password.";
            }// else if (!((pws.search(/(a-z)+/)) && (pws.search(/(0-9)+/)))) {
            // error = "The password must contain at least one numeral.";
            //}
            return error;
        };

        this.validateEmail = function (email) {
            var error        = "";
            var emailFilter  = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;
            var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;

            if (email == "") {
                error = "Please enter your email address.";
            } else if (!emailFilter.test(email)) {              //test email for illegal characters
                error = "Invalid email address.";
            } else if (email.match(illegalChars)) {
                error = "Invalid email address.";
            }
            return error;
        };

        this.isEmail = function (email) {
            var emailFilter  = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;
            var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;
            if (email == "") {
                return false;
            } else if (!emailFilter.test(email)) {              //test email for illegal characters
                return false;
            } else if (email.match(illegalChars)) {
                return false;
            }
            return true;
        };

// number format
        this.addCommas = function (nStr) {
            nStr += '';
            var x   = nStr.split('.');
            var x1  = x[0];
            var x2  = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        };
// end number format


        var ajaxLoadingPopupStatus = 0;

//loading popup with jQuery magic!
        this.loadAjaxLoadingPopup = function (imgId, divBgId) {
            //loads popup only if it is disabled
            if (ajaxLoadingPopupStatus == 0) {
                centerAjaxLoadingPopup(imgId, divBgId);
                $(divBgId).css({
                    "opacity": "0.5"
                });
                $(divBgId).fadeIn("fast");
                $(imgId).fadeIn("fast");
                ajaxLoadingPopupStatus = 1;

            }
        };

//disabling popup with jQuery magic!
        this.disableAjaxLoadingPopup = function (imgId, divBgId) {
            //disables popup only if it is enabled
            if (ajaxLoadingPopupStatus == 1) {
                $(divBgId).fadeOut();
                $(divBgId).hide();

                ajaxLoadingPopupStatus = 0;
            }
            $(imgId).hide();
        };

//centering popup
        var centerAjaxLoadingPopup = function (imgId, divBgId) {
            //request data for centering
            var windowWidth  = document.documentElement.clientWidth;
            var windowHeight = document.documentElement.clientHeight;
            var bodywidth    = $('body').innerWidth();
            var bodyheight   = $('body').innerHeight();
            var popupHeight  = $(imgId).height();
            var popupWidth   = $(imgId).width();

            var wpos         = (bodywidth > windowWidth) ? bodywidth : windowWidth;
            var hpos         = (bodyheight > windowHeight) ? bodyheight : windowHeight;
            var scrollWindow = $(window).scrollTop();
            var top          = windowHeight / 2 - ((popupHeight / 3) * 2) + scrollWindow;
            var left         = windowWidth / 2 - popupWidth / 2;

            //centering
            $(imgId).css({
                "position": "absolute",
                "top"     : top,
                "left"    : left
            });
            //only need force for IE6
            $(divBgId).css({
                "height": hpos,
                "width" : wpos
            });

            $(window).scroll(function () {
                if ($(imgId).css('display') != 'none') {
                    $(imgId).stop();
                    var scroll    = $(window).scrollTop();
                    var scrollPos = windowHeight / 2 - ((popupHeight / 3) * 2) + scroll;
                    $(imgId).animate({
                        top: scrollPos
                    }, 'slow');
                }
            });
        };


        this.htmlspecialchars_decode = function (string, quote_style) {
            // http://kevin.vanzonneveld.net
            // +   original by: Mirek Slugen
            // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
            // +   bugfixed by: Mateusz "loonquawl" Zalega
            // +      input by: ReverseSyntax
            // +      input by: Slawomir Kaniecki
            // +      input by: Scott Cariss
            // +      input by: Francois
            // +   bugfixed by: Onno Marsman
            // +    revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
            // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
            // +      input by: Ratheous
            // +      input by: Mailfaker (http://www.weedem.fr/)
            // +      reimplemented by: Brett Zamir (http://brett-zamir.me)
            // +    bugfixed by: Brett Zamir (http://brett-zamir.me)
            // *     example 1: htmlspecialchars_decode("<p>this -&gt; &quot;</p>", 'ENT_NOQUOTES');
            // *     returns 1: '<p>this -> &quot;</p>'
            // *     example 2: htmlspecialchars_decode("&amp;quot;");
            // *     returns 2: '&quot;'
            var optTemp  = 0,
                i        = 0,
                noquotes = false;
            if (typeof quote_style === 'undefined') {
                quote_style = 2;
            }
            string   = string.toString().replace(/&lt;/g, '<').replace(/&gt;/g, '>');
            var OPTS = {
                'ENT_NOQUOTES'         : 0,
                'ENT_HTML_QUOTE_SINGLE': 1,
                'ENT_HTML_QUOTE_DOUBLE': 2,
                'ENT_COMPAT'           : 2,
                'ENT_QUOTES'           : 3,
                'ENT_IGNORE'           : 4
            };
            if (quote_style === 0) {
                noquotes = true;
            }
            if (typeof quote_style !== 'number') { // Allow for a single string or an array of string flags
                quote_style = [].concat(quote_style);
                for (i = 0; i < quote_style.length; i++) {
                    // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
                    if (OPTS[quote_style[i]] === 0) {
                        noquotes = true;
                    } else if (OPTS[quote_style[i]]) {
                        optTemp = optTemp | OPTS[quote_style[i]];
                    }
                }
                quote_style = optTemp;
            }
            if (quote_style & OPTS.ENT_HTML_QUOTE_SINGLE) {
                string = string.replace(/&#0*39;/g, "'"); // PHP doesn't currently escape if more than one 0, but it should
                // string = string.replace(/&apos;|&#x0*27;/g, "'"); // This would also be useful here, but not a part of PHP
            }
            if (!noquotes) {
                string = string.replace(/&quot;/g, '"');
            }
            // Put this in last place to avoid escape being double-decoded
            string = string.replace(/&amp;/g, '&');

            return string;
        };


        this.setCookie = function (c_name, value, expiredays, reset) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + expiredays);
            if (reset == 1) {
                document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toUTCString()) + ";path=/";
            }
            else {
                var curCook = this.getCookie('cpcSelfServ');
                if (curCook.search(value) < 0 || curCook == '' || curCook == null) {
                    document.cookie = c_name + "=" + escape(curCook + value) + ((expiredays == null) ? "" : ";expires=" + exdate.toUTCString()) + ";path=/";
                }
            }
        };

        this.getCookie = function (c_name) {
            if (document.cookie.length > 0) {
                var c_start = document.cookie.indexOf(c_name + "=");
                if (c_start != -1) {
                    c_start   = c_start + c_name.length + 1;
                    var c_end = document.cookie.indexOf(";", c_start);
                    if (c_end == -1)
                        c_end = document.cookie.length;
                    return unescape(document.cookie.substring(c_start, c_end));
                }
            }
            return "";
        };
        this.move2Step = function (stepId, time) {
            time = (typeof(time) == 'undefined' || time == '') ? 1000 : time;
            $('html,body').animate({
                scrollTop: $(stepId).position().top
            }, time);
        };
        /**
         * Function used to decode utf8
         */
        this.utf8_decode = function (str_data) {
            var tmp_arr = [],
                i       = 0,
                ac      = 0,
                c1      = 0,
                c2      = 0,
                c3      = 0;

            str_data += '';

            while (i < str_data.length) {
                c1 = str_data.charCodeAt(i);
                if (c1 < 128) {
                    tmp_arr[ac++] = String.fromCharCode(c1);
                    i++;
                } else if (c1 > 191 && c1 < 224) {
                    c2            = str_data.charCodeAt(i + 1);
                    tmp_arr[ac++] = String.fromCharCode(((c1 & 31) << 6) | (c2 & 63));
                    i += 2;
                } else {
                    c2            = str_data.charCodeAt(i + 1);
                    c3            = str_data.charCodeAt(i + 2);
                    tmp_arr[ac++] = String.fromCharCode(((c1 & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                    i += 3;
                }
            }

            return tmp_arr.join('');
        };

        /*
         ** Function alert notify sound
         */
        this.notify = function (number, title, updateMsg, notifySound) {
            var audio = $('<audio id="notifySound">' +
                '<source src="/public/lib/noty/sound/notify.mp3" type="audio/mpeg">' +
                '<source src="/public/lib/noty/sound/notify.ogg" type="audio/ogg">' +
                '<source src="/public/lib/noty/sound/notify.wav" type="audio/wav">' +
                '</audio>');
            if (notifySound) {
                if ($('#notifySound').length > 0)
                    $('#notifySound').remove();
                audio.appendTo('body');
                audio[0].play();
            }

            if (updateMsg) {
                number         = parseInt(number);
                title          = number != 0 ? '(' + number + ') ' + title : title;
                document.title = title;
            }

        }

        /*
         ** Function Get Document
         */
        this.getDocTitle = function () {
            var titleDoc = document.title;
            var patt     = /\([1-9]+\)/gi;
            titleDoc     = titleDoc.replace(patt, '');
            return titleDoc;
        };

        this.countdown = function ($el, t, cb) {
            var self  = this;
            var timer = setInterval(function ($el, d, cb) {
                var now  = new Date();
                var diff = d - now;

                if (diff <= 0) {
                    cb();
                    if (typeof timer !== 'undefined') clearInterval(timer);
                    return;
                }

                var days  = Math.floor(diff / (1000 * 60 * 60 * 24));
                var hours = Math.floor(diff / (1000 * 60 * 60));
                var mins  = Math.floor(diff / (1000 * 60));
                var secs  = Math.floor(diff / 1000);

                var dd = self.leadingZero(days);
                var hh = self.leadingZero(hours - days * 24);
                var mm = self.leadingZero(mins - hours * 60);
                var ss = self.leadingZero(secs - mins * 60);

                $el.text(dd + ":" + hh + ":" + mm + ":" + ss);
            }, 1000, $el, t, cb);
        };

        this.leadingZero = function (n) {
            if (n == 0 || n < 0) return "00";
            return n < 10 ? "0" + n : n;
        };

        /**
         * Show Desktop Notifications.
         * Input: Message content;
         * Output: Desktop Notifications or nothing;
         */
        this.desktopNotifications = function (content) {
            if (notify.isSupported && notify.permissionLevel() == notify.PERMISSION_GRANTED) {
                notify.createNotification(app.t('app.desktop_notify_title'), {body: content, icon: 'favicon.ico'});
            }
        };

        this.secondToTime = function(time){

            var objTime = {};
            objTime.hours = 0;
            objTime.minutes = 0;
            objTime.seconds = 0;

            while(time >= 3600)
            {
                objTime.hours++;
                time -= 3600;
            }

            while(time >= 60)
            {
                objTime.minutes++;
                time -= 60;
            }

            objTime.seconds = time;
            return objTime;
        }

        this.secondToText = function(second){
            var timeObj = this.secondToTime(second);
            var unitHour = timeObj.hours > 1 ? 'hours' : 'hour';
            var unitMin = timeObj.minutes > 1 ? 'minutes' : 'minute';
            var unitSecond = timeObj.seconds > 1 ? 'seconds' : 'second';
            return timeObj.hours + ' '+unitHour+' '+timeObj.minutes+ ' '+unitMin+' '+timeObj.seconds+' '+unitSecond;
        }
    };
})($.app);
