!function(){for(var t,a=function(){},i=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],e=i.length,s=window.console=window.console||{};e--;)t=i[e],s[t]||(s[t]=a)}(),$(document).ready(function(){var t=992;$("#navbar-main-toggle").on("click",function(t){t.preventDefault(),$(this).toggleClass("is-active")});var a=$(".mcs"),i=$(".mcs-horizontal");a.mCustomScrollbar({autoExpandScrollbar:!0,mouseWheel:{preventDefault:!0}}),i.mCustomScrollbar({axis:"x",advanced:{autoExpandHorizontalScroll:!0},scrollButtons:{enable:!0}}),$(window).width()>=t||(a.mCustomScrollbar("destroy"),i.mCustomScrollbar("destroy")),$('[data-toggle="tooltip"]').tooltip(),$('[data-plugin="mfp-popup"]').each(function(){var t={};t.type=void 0!==$(this).data("type")?$(this).data("type"):"inline",t.midClick=void 0!==$(this).data("midclick")&&$(this).data("midclick"),t.mainClass=void 0!==$(this).data("mainclass")?$(this).data("mainclass"):"",t.preloader=void 0===$(this).data("preloader")||$(this).data("preloader"),t.focus=void 0!==$(this).data("focus")?$(this).data("focus"):"",t.closeOnContentClick=void 0!==$(this).data("closeoncontentclick")&&$(this).data("closeoncontentclick"),t.closeOnBgClick=void 0===$(this).data("closeonbgclick")||$(this).data("closeonbgclick"),t.closeBtnInside=void 0!==$(this).data("closebtninside")&&$(this).data("closebtninside"),t.showCloseBtn=void 0===$(this).data("showclosebtn")||$(this).data("showclosebtn"),t.enableEscapeKey=void 0===$(this).data("enableescapekey")||$(this).data("enableescapekey"),t.modal=void 0!==$(this).data("modal")&&$(this).data("modal"),t.alignTop=void 0!==$(this).data("aligntop")&&$(this).data("aligntop"),t.index=void 0!==$(this).data("index")?$(this).data("index"):null,t.fixedContentPos=void 0!==$(this).data("fixedcontentpos")?$(this).data("fixedcontentpos"):"auto",t.fixedBgPos=void 0!==$(this).data("fixedbgpos")?$(this).data("fixedbgpos"):"auto",t.overflowY=void 0!==$(this).data("overflowy")?$(this).data("overflowy"):"auto",t.autoFocusLast=void 0===$(this).data("autofocuslast")||$(this).data("autofocuslast"),"image"===$(this).data("type")&&(t.image={verticalFit:void 0===$(this).data("verticalfit")||$(this).data("verticalfit"),cursor:void 0!==$(this).data("cursor")?$(this).data("cursor"):"mfp-zoom-out-cur"}),$(this).data("gallery")===!0&&(t.delegate=void 0!==$(this).data("delegate")?$(this).data("delegate"):"a",t.gallery={enabled:!0,navigateByImgClick:void 0===$(this).data("navigatebyimgclick")||$(this).data("navigatebyimgclick")}),$(this).data("effect")&&(t.removalDelay=void 0!==$(this).data("removaldelay")?$(this).data("removaldelay"):500,t.mainClass=$(this).data("effect"),t.callbacks={beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim")}}),$(this).data("zoom")===!0&&(t.removalDelay=void 0!==$(this).data("removaldelay")?$(this).data("removaldelay"):500,t.mainClass=void 0!==$(this).data("mainclass")?$(this).data("mainclass"):"mfp-with-zoom mfp-img-mobile",t.zoom={enabled:!0,duration:300,easing:"ease-in-out",opener:function(t){return t.find("img")}}),$(this).magnificPopup(t)}),$(document).on("click",".mfp-dismiss",function(t){t.preventDefault(),$.magnificPopup.close()}),$('[data-plugin="swiper"]').each(function(t){var a={};a.navigation={nextEl:$(this).find(".swiper-button-next"),prevEl:$(this).find(".swiper-button-prev")},a.pagination={el:$(this).find(".swiper-pagination"),dynamicBullets:void 0!==$(this).data("dynamicbullets")&&$(this).data("dynamicbullets"),clickable:void 0===$(this).data("clickable")||$(this).data("clickable")},$(this).data("autoplay")&&(a.autoplay=$(this).data("autoplay")),$(this).data("delay")&&(a.autoplay={delay:$(this).data("delay")}),$(this).data("thumbs")&&(console.log($(this).data("thumbs")),a.thumbs={swiper:{el:$(this).data("thumbs"),slidesPerView:5}}),a.slidesPerView=void 0!==$(this).data("slidesperview")?$(this).data("slidesperview"):1,a.slidesPerGroup=void 0!==$(this).data("slidespergroup")?$(this).data("slidespergroup"):1,a.spaceBetween=void 0!==$(this).data("spacebetween")?$(this).data("spacebetween"):0,a.centeredSlides=void 0!==$(this).data("centeredslides")&&$(this).data("centeredslides"),a.loop=void 0!==$(this).data("loop")&&$(this).data("loop"),a.speed=void 0!==$(this).data("speed")?$(this).data("speed"):300,a.autoHeight=void 0!==$(this).data("autoheight")&&$(this).data("autoheight"),a.effect=void 0!==$(this).data("effect")?$(this).data("effect"):"slide",a.slidesPerView>1&&(a.breakpoints={1200:{slidesPerView:void 0!==$(this).data("breakpoints-lg")?$(this).data("breakpoints-lg"):a.slidesPerView},991:{slidesPerView:void 0!==$(this).data("breakpoints-md")?$(this).data("breakpoints-md"):a.slidesPerView-1>1?a.slidesPerView-1:1},767:{slidesPerView:void 0!==$(this).data("breakpoints-sm")?$(this).data("breakpoints-sm"):a.slidesPerView-2>1?a.slidesPerView-2:1},575:{slidesPerView:void 0!==$(this).data("breakpoints-xs")?$(this).data("breakpoints-xs"):1}});new Swiper($(this),a)});var e=new Swiper('[data-plugin="swiper-gallery-thumbs"]',{spaceBetween:16,slidesPerView:5,freeMode:!0,watchSlidesVisibility:!0,watchSlidesProgress:!0,breakpoints:{}}),s=(new Swiper('[data-plugin="swiper-gallery"]',{navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},thumbs:{swiper:e}}),new Swiper('[data-plugin="swiper-gallery-row-thumbs"]',{spaceBetween:16,slidesPerView:5,watchSlidesVisibility:!0,watchSlidesProgress:!0,direction:"vertical",observer:!0,observeParents:!0,breakpoints:{767:{direction:"horizontal"}}}));new Swiper('[data-plugin="swiper-gallery-row"]',{navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},thumbs:{swiper:s}})});