<header class="header">

    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-5 col-100-h">
                    <a href="/" class="logo-wrapper">
                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/logo.png?1576740881097" alt="logo Ant Kitchen" />
                    </a>
                </div>
                <div class="col-100-h col-sm-6 col-xs-7 hidden-lg hidden-md">
                    <div class="hotline">
                        <a href="tel:0982362509">0982 362 509</a>
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="search-auto clearfix">
                        <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                            <input type="search" name="query" value="" placeholder="Bạn tìm gì..." class="input-group-field st-default-search-input search-text auto-search-ant" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn icon-fallback-text">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </form>

                        <div id='search_suggestion'>
                            <div id='search_top'>
                                <div id="product_results"></div>
                                <div id="article_results"></div>
                            </div>
                            <div id='search_bottom'>
                                <a class='show_more' href='#'>Hiển thị tất cả kết quả cho "<span></span>"</a>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function($) {
                                var settings = {
                                    searchArticle: "0",
                                    articleLimit: 5,
                                    productLimit: 5,
                                    showDescription: "0"
                                };
                                var suggestionWrap = document.getElementById('search_suggestion');
                                var searchTop = document.getElementById('search_top');
                                var productResults = document.getElementById('product_results');
                                var articleResults = document.getElementById('article_results');
                                var searchBottom = document.getElementById('search_bottom');
                                var isArray = function(a) {
                                    return Object.prototype.toString.call(a) === "[object Array]";
                                }
                                var createEle = function(desc) {
                                    if (!isArray(desc)) {
                                        return createEle.call(this, Array.prototype.slice.call(arguments));
                                    }
                                    var tag = desc[0];
                                    var attributes = desc[1];
                                    var el = document.createElement(tag);
                                    var start = 1;
                                    if (typeof attributes === "object" && attributes !== null && !isArray(attributes)) {
                                        for (var attr in attributes) {
                                            el[attr] = attributes[attr];
                                        }
                                        start = 2;
                                    }
                                    for (var i = start; i < desc.length; i++) {
                                        if (isArray(desc[i])) {
                                            el.appendChild(createEle(desc[i]));
                                        } else {
                                            el.appendChild(document.createTextNode(desc[i]));
                                        }
                                    }
                                    return el;
                                }
                                var loadResult = function(data, type) {
                                    if (type === 'product') {
                                        productResults.innerHTML = '';
                                    }
                                    if (type === 'article') {
                                        articleResults.innerHTML = '';
                                    }
                                    var articleLimit = parseInt(settings.articleLimit);
                                    var productLimit = parseInt(settings.productLimit);
                                    var showDescription = settings.showDescription;
                                    if (data.indexOf('<iframe') > -1) {
                                        data = data.substr(0, (data.indexOf('<iframe') - 1))
                                    }
                                    var dataJson = JSON.parse(data);
                                    if (dataJson.results !== undefined) {
                                        var resultList = [];
                                        searchTop.style.display = 'block';
                                        if (type === 'product') {
                                            productResults.innerHTML = ''
                                            productLimit = Math.min(dataJson.results.length, productLimit);
                                            for (var i = 0; i < productLimit; i++) {
                                                resultList[i] = dataJson.results[i];
                                            }
                                        } else {
                                            articleResults.innerHTML = '';
                                            articleLimit = Math.min(dataJson.results.length, articleLimit);
                                            for (var i = 0; i < articleLimit; i++) {
                                                resultList[i] = dataJson.results[i];
                                            }
                                        }
                                        var searchTitle = 'Sản phẩm gợi ý'
                                        if (type === 'article') {
                                            searchTitle = 'Bài viết';
                                        }
                                        var searchHeading = createEle(['h3', searchTitle]);
                                        var searchList = document.createElement('ul');
                                        for (var index = 0; index < resultList.length; index++) {
                                            var item = resultList[index];
                                            var priceDiv = '';
                                            var descriptionDiv = '';
                                            if (type == 'product') {
                                                if (item.price_contact) {
                                                    priceDiv = ['div', {
                                                            className: 'item_price'
                                                        },
                                                        ['ins', item.price_contact]
                                                    ];
                                                } else {
                                                    if (item.price_from) {
                                                        priceDiv = ['div', {
                                                                className: 'item_price'
                                                            },
                                                            ['span', 'Từ '],
                                                            ['ins', item.price_from]
                                                        ];
                                                    } else {
                                                        priceDiv = ['div', {
                                                                className: 'item_price'
                                                            },
                                                            ['ins', parseFloat(item.price) ? item.price : 'Liên hệ']
                                                        ];
                                                    }
                                                }
                                                if (item.compare_at_price !== undefined) {
                                                    priceDiv.push(['del', item.compare_at_price]);
                                                }
                                            }
                                            if (showDescription == '1') {
                                                descriptionDiv = ['div', {
                                                    className: 'item_description'
                                                }, item.description]
                                            }
                                            var searchItem = createEle(
                                                ['li',
                                                    ['a', {
                                                            href: item.url,
                                                            title: item.title
                                                        },
                                                        ['div', {
                                                                className: 'item_image'
                                                            },
                                                            ['img', {
                                                                src: item.thumbnail,
                                                                alt: item.title
                                                            }]
                                                        ],
                                                        ['div', {
                                                                className: 'item_detail'
                                                            },
                                                            ['div', {
                                                                    className: 'item_title'
                                                                },
                                                                ['h4', item.title]
                                                            ],
                                                            priceDiv, descriptionDiv
                                                        ]
                                                    ]
                                                ]
                                            )
                                            searchList.appendChild(searchItem);
                                        }
                                        if (type === 'product') {
                                            productResults.innerHTML = '';
                                            productResults.appendChild(searchHeading);
                                            productResults.appendChild(searchList);
                                        } else {
                                            articleResults.innerHTML = '';
                                            articleResults.appendChild(searchHeading);
                                            articleResults.appendChild(searchList);
                                        }
                                    } else {
                                        if (type !== 'product' && false) {
                                            searchTop.style.display = 'none'
                                        }
                                    }
                                }
                                var loadAjax = function(q) {
                                    if (settings.searchArticle === '1') {
                                        loadArticle(q);
                                    }
                                    loadProduct(q);
                                }
                                var loadProduct = function(q) {
                                    var xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            loadResult(this.responseText, 'product')
                                        }
                                    }
                                    xhttp.open('GET', '/search?type=product&q=' + q + '&view=json', true);
                                    xhttp.send();
                                }
                                var loadArticle = function(q) {
                                    var xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            loadResult(this.responseText, 'article')
                                        }
                                    }
                                    xhttp.open('GET', '/search?type=article&q=' + q + '&view=json', true);
                                    xhttp.send();
                                }
                                var searchForm = document.querySelectorAll('form[action="/search"]');
                                var getPos = function(el) {
                                    for (var lx = 0, ly = 0; el != null; lx += el.offsetLeft, ly += el.offsetTop, el = el.offsetParent);
                                    return {
                                        x: lx,
                                        y: ly
                                    };
                                }
                                var initSuggestion = function(el) {

                                    var parentTop = el.offsetParent.offsetTop;
                                    var position = getPos(el);
                                    var searchInputHeight = el.offsetHeight;
                                    var searchInputWidth = el.offsetWidth;
                                    var searchInputX = position.x;
                                    var searchInputY = position.y;
                                    var suggestionPositionX = searchInputX;
                                    var suggestionPositionY = searchInputY + searchInputHeight;
                                    suggestionWrap.style.left = '0px';
                                    suggestionWrap.style.top = 40 + 'px';
                                    suggestionWrap.style.width = searchInputWidth + 'px';
                                }
                                window.__q__ = '';
                                var loadAjax2 = function(q) {
                                    if (settings.searchArticle === '1') {}
                                    window.__q__ = q;
                                    return $.ajax({
                                        url: '/search?type=product&q=' + q + '&view=json',
                                        type: 'GET'
                                    }).promise();
                                };
                                if (searchForm.length > 0) {
                                    for (var i = 0; i < searchForm.length; i++) {
                                        var form = searchForm[i];
                                        var searchInput = form.querySelector('.auto-search-ant');
                                        var keyup = Rx.Observable.fromEvent(searchInput, 'keyup')
                                            .map(function(e) {
                                                var __q = e.target.value;
                                                initSuggestion(e.target);
                                                if (__q === '' || __q === null) {
                                                    suggestionWrap.style.display = 'none';
                                                } else {
                                                    suggestionWrap.style.display = 'block';
                                                    var showMore = searchBottom.getElementsByClassName('show_more')[0];
                                                    showMore.setAttribute('href', '/search?q=' + __q);
                                                    showMore.querySelector('span').innerHTML = __q;
                                                }
                                                return e.target.value;
                                            })
                                            .filter(function(text) {
                                                return text.length > 0;
                                            })
                                            .debounce(300)
                                            .distinctUntilChanged();
                                        var searcher = keyup.flatMapLatest(loadAjax2);
                                        searcher.subscribe(
                                            function(data) {
                                                loadResult(data, 'product');
                                                if (settings.searchArticle === '1') {
                                                    loadArticle(window.__q__);
                                                }
                                            },
                                            function(error) {

                                            });
                                    }
                                }
                                window.addEventListener('click', function() {
                                    suggestionWrap.style.display = 'none';
                                });
                            });
                        </script>

                    </div>
                    <div class="mobile-cart visible-sm visible-xs">
                        <a href="javascript:void(0)" title="Giỏ hàng">
                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/shopping-cart.svg?1576740881097" alt="Giỏ hàng" />
                            <div class="cart-right">
                                <span class="count_item_pr">0</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="hotline">

                        <a href="tel:0982362509">0982 362 509</a>

                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                    <div class="index-account">
                        <a href="/account">Tài khoản</a>
                        <span>Xin chào, Khách</span>
                        <ul>

                            <li><a href="/account/login">Đăng nhập</a></li>
                            <li><a href="/account/register">Đăng ký</a></li>

                        </ul>
                    </div>
                    <div class="index-cart">
                        <a href="javascript:void(0)"><i class="fa fa-shopping-bag"></i></a>
                        <span class="cnt crl-bg count_item_pr">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <div class="container">
            <nav class="hidden-sm hidden-xs">
                <div class="col-md-3 no-padding">
                    <div class="mainmenu ">
                        <div class="line"><i></i><i></i><i></i></div>
                        <span>Danh mục sản phẩm</span>
                        <div class="nav-cate">
                            <ul id="menu2017">
                                <li class="dropdown menu-item-count">
                                    <h3>
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-1.png?1576740881097" alt="Tivi, Loa, Âm thanh" />
                                        <a href="/tivi-loa-am-thanh">Tivi, Loa, Âm thanh</a>
                                    </h3>
                                    <div class="subcate gd-menu">
                                        <aside>
                                            <strong>
                                                <a href="/tivi" class="">Tivi</a>
                                            </strong>

                                            <a href="/tivi-tra-gop-0-1" class="">Tivi trả góp 0-1%</a>

                                            <a href="/doi-moi-2017" class="">Đời mới 2017</a>

                                            <a href="/sony" class="">Sony</a>

                                            <a href="/samsung" class="">Samsung</a>

                                            <a href="/lg" class="">LG</a>

                                            <a href="/tu-32-43-inch" class="">Từ 32-43 inch</a>

                                            <a href="/tu-44-55-inch" class="">Từ 44-55 inch</a>

                                            <a href="/duoi-5-trieu" class="">Dưới 5 triệu</a>

                                            <a href="/tivi-cao-cap" class="">Tivi cao cấp</a>

                                            <a href="/tivi" class="">Xem tất cả Tivi</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/loa-am-thanh" class="">Loa, Âm thanh</a>
                                            </strong>

                                            <a href="/loa-thanh-soundbar" class="">Loa thanh (Soundbar)</a>

                                            <a href="/dan-am-thanh" class="">Dàn âm thanh</a>

                                            <a href="/dau-dvd" class="">Đầu DVD</a>

                                            <a href="/cap-hdmi-cap-tivi" class="">Cáp HDMI, cáp Tivi</a>

                                            <a href="/loa-am-thanh" class="">Xem tất cả Loa, Âm thanh</a>
                                        </aside>

                                        <aside>
                                            <a href="/" class="">Thương hiệu</a>
                                        </aside>


                                    </div>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-2.png?1576740881097" alt="Tủ lạnh" /><a href="/tu-lanh">Tủ lạnh</a></h3>
                                </li>

                                <li class="dropdown menu-item-count">
                                    <h3>
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-3.png?1576740881097" alt="Máy giặt, Máy sấy quần áo" />
                                        <a href="/may-giat-may-say-quan-ao">Máy giặt, Máy sấy quần áo</a>
                                    </h3>
                                    <div class="subcate gd-menu">
                                        <aside>
                                            <strong>
                                                <a href="/may-giat" class="">Máy giặt</a>
                                            </strong>

                                            <a href="/doi-moi-2017-1" class="">Đời mới 2017</a>

                                            <a href="/toshiba" class="">Toshiba</a>

                                            <a href="/lg-1" class="">LG</a>

                                            <a href="/panasonic" class="">Panasonic</a>

                                            <a href="/samsung-1" class="">Samsung</a>

                                            <a href="/electrolux" class="">Electrolux</a>

                                            <a href="/may-giat-cao-cap" class="">Máy giặt cao cấp</a>

                                            <a href="/may-giat" class="">Xem tất cả Máy giặt</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/may-say-quan-ao" class="">Máy sấy quần áo</a>
                                            </strong>

                                            <a href="/gia-duoi-5-trieu" class="">Giá dưới 5 triệu</a>

                                            <a href="/gia-tu-5-10-trieu" class="">Giá từ 5 - 10 triệu</a>

                                            <a href="/electrolux-1" class="">Electrolux</a>

                                            <a href="/beko" class="">Beko</a>

                                            <a href="/kangaroo" class="">Kangaroo</a>

                                            <a href="/may-say-quan-ao" class="">Xem tất cả Máy sấy quần áo</a>
                                        </aside>

                                    </div>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-4.png?1576740881097" alt="Máy lạnh" /><a href="/may-lanh">Máy lạnh</a></h3>
                                </li>

                                <li class="dropdown menu-item-count">
                                    <h3>
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-5.png?1576740881097" alt="Điện gia dụng" />
                                        <a href="/dien-gia-dung">Điện gia dụng</a>
                                    </h3>
                                    <div class="subcate gd-menu">
                                        <aside>
                                            <strong>
                                                <a href="/gia-dung-nha-bep" class="">Gia dụng nhà bếp</a>
                                            </strong>

                                            <a href="/bep-gas" class="">Bếp gas</a>

                                            <a href="/bep-tu" class="">Bếp từ</a>

                                            <a href="/bep-hong-ngoai" class="">Bếp hồng ngoại</a>

                                            <a href="/lo-nuong" class="">Lò nướng</a>

                                            <a href="/lo-vi-song" class="">Lò vi sóng</a>

                                            <a href="/lau-dien" class="">Lẩu điện</a>

                                            <a href="/noi-ap-suat" class="">Nồi áp suất</a>

                                            <a href="/noi-com-dien" class="">Nồi cơm điện</a>

                                            <a href="/gia-dung-nha-bep" class="">Xem tất cả Gia dụng nhà bếp</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/thiet-bi-gia-dinh" class="">Thiết bị gia đình</a>
                                            </strong>

                                            <a href="/ban-ui" class="">Bàn ủi</a>

                                            <a href="/may-hut-mui" class="">Máy hút mùi</a>

                                            <a href="/may-hut-bui" class="">Máy hút bụi</a>

                                            <a href="/may-say-toc" class="">Máy sấy tóc</a>

                                            <a href="/may-tao-kieu-toc" class="">Máy tạo kiểu tóc</a>

                                            <a href="/quat" class="">Quạt</a>

                                            <a href="/thiet-bi-gia-dinh" class="">Xem tất cả Thiết bị gia đình</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/dien-nha-bep" class="">Điện nhà bếp</a>
                                            </strong>

                                            <a href="/binh-dun-sieu-toc" class="">Bình đun siêu tốc</a>

                                            <a href="/binh-thuy-dien" class="">Bình thủy điện</a>

                                            <a href="/may-danh-trung" class="">Máy đánh trứng</a>

                                            <a href="/may-ep-trai-cay" class="">Máy ép trái cây</a>

                                            <a href="/may-lam-sua-dau-nanh" class="">Máy làm sữa đậu nành</a>

                                            <a href="/may-xay-sinh-to" class="">Máy xay sinh tố</a>

                                            <a href="/dien-nha-bep" class="">Xem tất cả Điện nhà bếp</a>
                                        </aside>

                                    </div>
                                </li>

                                <li class="dropdown menu-item-count">
                                    <h3>
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-6.png?1576740881097" alt="Đồ dùng gia đình" />
                                        <a href="/do-dung-gia-dinh">Đồ dùng gia đình</a>
                                    </h3>
                                    <div class="subcate gd-menu">
                                        <aside>
                                            <strong>
                                                <a href="/dung-cu-ban-an" class="">Dụng cụ bàn ăn</a>
                                            </strong>

                                            <a href="/dua-muong" class="">Đũa muỗng</a>

                                            <a href="/ly-bo-ly" class="">Ly - Bộ ly</a>

                                            <a href="/binh-giu-nhiet" class="">Bình giữ nhiệt</a>

                                            <a href="/binh-dung-nuoc" class="">Bình đựng nước</a>

                                            <a href="/dung-cu-ban-an" class="">Xem tất cả Dụng cụ bàn ăn</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/do-dung-nha-bep" class="">Đồ dùng nhà bếp</a>
                                            </strong>

                                            <a href="/va-san-chien-xao" class="">Vá - Sạn chiên xào</a>

                                            <a href="/thau-ro" class="">Thau - Rổ</a>

                                            <a href="/hop-dung-thuc-pham" class="">Hộp đựng thực phẩm</a>

                                            <a href="/bo-noi" class="">Bộ nồi</a>

                                            <a href="/chao-chong-dinh" class="">Chảo chống dính</a>

                                            <a href="/bo-lau-nha" class="">Bộ lau nhà</a>

                                            <a href="/do-dung-nha-bep" class="">Xem tất cả Đồ dùng nhà bếp</a>
                                        </aside>

                                    </div>
                                </li>

                                <li class="dropdown menu-item-count">
                                    <h3>
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-7.png?1576740881097" alt="Điện thoại, Laptop, Tablet" />
                                        <a href="/dien-thoai-laptop-may-tinh-bang">Điện thoại, Laptop, Tablet</a>
                                    </h3>
                                    <div class="subcate gd-menu">
                                        <aside>
                                            <strong>
                                                <a href="/dien-thoai" class="">Điện thoại</a>
                                            </strong>

                                            <a href="/iphone" class="">iPhone</a>

                                            <a href="/samsung-2" class="">Samsung</a>

                                            <a href="/oppo" class="">Oppo</a>

                                            <a href="/sony-1" class="">Sony</a>

                                            <a href="/nokia" class="">Nokia</a>

                                            <a href="/dien-thoai-tu-1-den-3-trieu" class="">Điện thoại từ 1 đến 3 triệu</a>

                                            <a href="/dien-thoai" class="">Xem tất cả Điện thoại</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/laptop" class="">Laptop</a>
                                            </strong>

                                            <a href="/dell" class="">Dell</a>

                                            <a href="/asus" class="">Asus</a>

                                            <a href="/macbook" class="">Macbook</a>

                                            <a href="/hp" class="">HP</a>

                                            <a href="/laptop-duoi-10-trieu" class="">Laptop dưới 10 triệu</a>

                                            <a href="/laptop-tu-10-den-15-trieu" class="">Laptop từ 10 đến 15 triệu</a>

                                            <a href="/laptop" class="">Xem tất cả Laptop</a>
                                        </aside>

                                        <aside>
                                            <strong>
                                                <a href="/tablet" class="">Tablet</a>
                                            </strong>

                                            <a href="/ipad" class="">iPad</a>

                                            <a href="/samsung-2" class="">Samsung</a>

                                            <a href="/asus-1" class="">Asus</a>

                                            <a href="/lenovo" class="">Lenovo</a>

                                            <a href="/may-tinh-bang-duoi-3-trieu" class="">Máy tính bảng dưới 3 triệu</a>

                                            <a href="/may-tinh-bang-tu-3-den-8-trieu" class="">Máy tính bảng từ 3 đến 8 triệu</a>

                                            <a href="/tablet" class="">Xem tất cả Tablet</a>
                                        </aside>

                                    </div>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-8.png?1576740881097" alt="Thể thao & Dã ngoại" /><a href="/phu-kien">Thể thao & Dã ngoại</a></h3>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-9.png?1576740881097" alt="Phụ kiện số" /><a href="/may-loc-nuoc-may-nuoc-nong">Phụ kiện số</a></h3>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-10.png?1576740881097" alt="Nạp thẻ cào, thẻ game" /><a href="/sim-so-the-cao">Nạp thẻ cào, thẻ game</a></h3>
                                </li>

                                <li class="menu-item-count">
                                    <h3><img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/index-cate-icon-11.png?1576740881097" alt="Dụng cụ làm bánh" /><a href="/dung-cu-lam-banh">Dụng cụ làm bánh</a></h3>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 no-padding">
                    <ul id="nav" class="nav">

                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">Tính năng nổi bật <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>

                            <ul class="dropdown-menu">

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien">Sản phẩm liên quan trong tin tức</a>
                                </li>

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/">Tìm kiếm nâng cao</a>
                                </li>

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tivi-loa-am-thanh">Danh mục thông minh</a>
                                </li>

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/collections/all">Tìm kiếm bộ lọc</a>
                                </li>

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/android-tivi-sony-4k-43-inch-kd-43x7500e">Khuyến mãi cho từng sản phẩm</a>
                                </li>

                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/he-thong-cua-hang">Hệ thống cửa hàng</a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>

                        <li class="nav-item "><a class="nav-link" href="/gioi-thieu">Giới thiệu</a></li>

                        <li class="nav-item  has-mega">
                            <a href="/collections/all" class="nav-link">Sản phẩm <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>

                            <div class="mega-content">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">

                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/tivi-loa-am-thanh"><span>Tivi, Loa, Âm thanh</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/tivi"><span>Tivi</span></a> </li>

                                                    <li class="level2"> <a href="/loa-am-thanh"><span>Loa, Âm thanh</span></a> </li>

                                                    <li class="level2"> <a href="/"><span>Thương hiệu</span></a> </li>

                                                </ul>
                                            </li>

                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/tu-lanh"><span>Tủ lạnh</span></a> </h2>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/may-giat-may-say-quan-ao"><span>Máy giặt, Máy sấy quần áo</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/may-giat"><span>Máy giặt</span></a> </li>

                                                    <li class="level2"> <a href="/may-say-quan-ao"><span>Máy sấy quần áo</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/may-lanh"><span>Máy lạnh</span></a> </h2>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/dien-gia-dung"><span>Điện gia dụng</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/gia-dung-nha-bep"><span>Gia dụng nhà bếp</span></a> </li>

                                                    <li class="level2"> <a href="/thiet-bi-gia-dinh"><span>Thiết bị gia đình</span></a> </li>

                                                    <li class="level2"> <a href="/dien-nha-bep"><span>Điện nhà bếp</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/do-dung-gia-dinh"><span>Đồ dùng gia đình</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/dung-cu-ban-an"><span>Dụng cụ bàn ăn</span></a> </li>

                                                    <li class="level2"> <a href="/do-dung-nha-bep"><span>Đồ dùng nhà bếp</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/dien-thoai-laptop-may-tinh-bang"><span>Điện thoại, Laptop, Tablet</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/dien-thoai"><span>Điện thoại</span></a> </li>

                                                    <li class="level2"> <a href="/laptop"><span>Laptop</span></a> </li>

                                                    <li class="level2"> <a href="/tablet"><span>Tablet</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/phu-kien"><span>Thể thao & Dã ngoại</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/may-loc-nuoc-may-nuoc-nong"><span>Phụ kiện số</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/sim-so-the-cao"><span>Nạp thẻ cào, thẻ game</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/dung-cu-lam-banh"><span>Dụng cụ làm bánh</span></a> </h2>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item "><a class="nav-link" href="/tin-tuc">Tin tức</a></li>

                        <li class="nav-item "><a class="nav-link" href="/lien-he">Liên hệ</a></li>

                    </ul>
                </div>
            </nav>
            <script>
                if ($(window).width() > 1100) {
                    var menu_limit = "10";
                    if (isNaN(menu_limit)) {
                        menu_limit = 10;
                    } else {
                        menu_limit = 9;
                    }
                } else {
                    var menu_limit = "8";
                    if (isNaN(menu_limit)) {
                        menu_limit = 8;
                    } else {
                        menu_limit = 7;
                    }
                }
                var sidebar_length = $('.menu-item-count').length;
                if (sidebar_length > (menu_limit + 1)) {
                    $('.nav-cate:not(.site-nav-mobile) > ul').each(function() {
                        $('.menu-item-count', this).eq(menu_limit).nextAll().hide().addClass('toggleable');
                        $(this).append('<li class="more"><h3><a><label>Xem thêm ... </label></a></h3></li>');
                    });
                    $('.nav-cate > ul').on('click', '.more', function() {
                        if ($(this).hasClass('less')) {
                            $(this).html('<h3><a><label>Xem thêm ...</label></a></h3>').removeClass('less');
                        } else {
                            $(this).html('<h3><a><label>Thu gọn ... </label></a></h3>').addClass('less');;
                        }
                        $(this).siblings('li.toggleable').slideToggle({
                            complete: function() {
                                var divHeight = $('#menu2017').height();
                                $('.subcate.gd-menu').css('min-height', divHeight + 'px');
                            }
                        });
                    });
                }
            </script>
        </div>
    </div>

</header><?php /**PATH D:\xampp\htdocs\thachvu\resources\views/layouts/user/header.blade.php ENDPATH**/ ?>