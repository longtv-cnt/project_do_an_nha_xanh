(function ($) {
    try{
        $(document).on('keypress', ".bookingPhoneNumber", function (event) {
            var phonenumber = $(this).val();
            if (jQuery.isNumeric(event.key) && phonenumber.length < 13) {
                if (phonenumber.length == 3) {
                    $(this).val(phonenumber + event.key + '.');
                }
                else if (phonenumber.length == 7) {
                    $(this).val(phonenumber + event.key + '.');
                }
                else {
                    $(this).val(phonenumber + event.key);
                }
            }

            if (event.keyCode == 46 || event.keyCode == 8) {
                return true;
            } else {
                return false;
            }
        });

        $(document).on('keyup', ".bookingPhoneNumber", function (event) {
            if (event.keyCode == 13) {
                var phonenumber = $(this).val().replace(/\./g, '');
                phoneChecking(phonenumber)
            }
        });
    }catch(err){}
    if (window.matchMedia("(max-width: 767px)").matches) {
        $(".open-menu2").click(function () {
            $(".menu-bot-mobie").addClass("hauto");
            $(".open-menu2").addClass("close-menu2");
            $(".open-menu2").removeClass("open-menu2")
        });
        $(".close-menu2").click(function () {
            $(".menu-bot-mobie").removeClass("hauto");
            $(".close-menu2").addClass("open-menu2")
            $(".close-menu2").removeClass("close-menu2");
        });


        sticky_fix(".onav-sticky", ".fix-top", "sticked");
        //sticky_fix(".sear-sticky", ".item-fil2", "sticked2");
        function sticky_fix (id,item,cls) {
            $(window).scroll(function (e) {
                var scroller_anchor = $(id).offset().top;
                if ($(this).scrollTop() >= scroller_anchor && $(item).css('position') != 'fixed') {
                    $(item).addClass(cls);
                    $(id).css('height', $(item).height());
                } else if ($(this).scrollTop() < scroller_anchor && $(item).css('position') != 'relative') {
                    $(id).css('height', '0');
                    $(item).removeClass(cls);
                }
            });
        }
        sticky_fix(".sear-sticky", ".item-fil2", "sticked2");
        $(window).scroll(function (e) {
            var scroller_anchor = $(".sear-sticky").offset().top -8;
            if ($(this).scrollTop() >= scroller_anchor && $('.item-fil2').css('position') != 'fixed') {
                $('.item-fil2').addClass("sticked2");
                $('.sear-sticky').css('height', $('.item-fil2').height());
                //$(".box-login").addClass("hidden");
                //$(".header_user").addClass("hidden");
            } else if ($(this).scrollTop() < scroller_anchor && $('.item-fil2').css('position') != 'relative') {
                $('.sear-sticky').css('height', '0');
                $('.item-fil2').removeClass("sticked2");
                //$(".box-login").removeClass("hidden");
                //$(".header_user").removeClass("hidden");
            }
        });
    }

    try{
        if ($(".modal_Alert").length) {
            $(window).load(function () { $('.modal_Alert').modal('show'); });
        };
    }catch(err){}

    try {
        if ($(".modal_sale").length) {
            $(window).load(function () { $('.modal_sale').modal('show'); });
        };
    } catch (err) { }

    //open(".tit")
    open(".open-quan")
    open(".autoCall")
    open(".Left_sub")
    //open(".btnMenu")
    open(".btn_click")
    open(".btn_botton")
    function open(id) {
        if ($(id).length) {
            $(id).click(function () {
                $header = $(this);
                $content = $header.next();
                $content.slideToggle(500);
            });
        }
    };

    $(".btnMenu").click(function () {
        $('.btnMenu').toggleClass("menu-opened");
        $(".menu_mobile").slideToggle(500);
    });

    $(".btnSear").click(function () {
        $('.btnSear').toggleClass("btnSear-open");
        $('.box_search').toggleClass("box_search-mobile");

        $('.btnMenu').removeClass("menu-opened");
        $('#menu-main').removeClass("menu-main-mobile");
        $('.body_main').removeClass("body_ovlay");
    });

    $(document).ready(function ($) {
        try {
            $(".filter-tab").click(function () {
                var value = $(this).attr('data-filter');
                if (value == "all") {
                    $('.filter').show('1000');
                }
                else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');
                }
                if ($(".filter-tab").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");
            });
        } catch (err) { }

        //try {
        //    $("#contacts-form").validate();
        //} catch (err) { }
        //try {
        //    $("#search-form").validate();
        //} catch (err) { }

        //try {
        //    $("#phone-form").validate();
        //} catch (err) { }

        //try {
        //    $("#sub-form").validate();
        //} catch (err) { }

        ////
        ////try {
        ////    $("#search-form2").validate();
        ////} catch (err) { }

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

        try {
            var owl = $('#owl-demo');
            owl.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                nav: true
            });
        } catch (err) {
        }

        try {
            var owl = $('.owl_hot');
            owl.owlCarousel({
                margin:5,
                loop: true,
                autoplay: true,
                nav: true,
                autoplaySpeed: 2000,
                autoplayTimeout: 2000,
                dots: false,
                lazyLoad: true,
                autoHeight: !0,
                responsive: {
                    0: { items:3 },
                    640: { items: 4 },
                }
            });
        } catch (err) { }

        try {
            var owl = $('.owl_vip');
            owl.owlCarousel({
                margin: 10,
                //loop: true,
                autoplay: true,
                nav: true,
                autoplaySpeed: 2500,
                autoplayTimeout: 3000,
                dots: true,
                lazyLoad: true,
                autoHeight: !0,
                responsive: {
                    0: { items: 2 },
                    640: { items: 4 },
                }
            });
        } catch (err) { }


        try {
            var owl = $('.owl_one');
            owl.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                lazyLoad: true,
                autoHeight: !0,
                nav: false,
                dots:false,
            });
        } catch (err) { }

        try {
            var owl = $('.owl_two');
            owl.owlCarousel({
                margin: 30,
                nav: false,
                dots: false,
                responsive: {
                    0: { items: 1 },
                    640: { items: 2 },
                }
            });
        } catch (err) { }

        try {
            var owl = $('.owl_three');
            owl.owlCarousel({
                margin: 30,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 1 },
                    640: { items: 2 },
                    992: { items: 3 },
                }
            });
        } catch (err) { }

        try {
            var owl = $('#gallery');
            owl.owlCarousel({
                items:4,
                margin: 10,
                nav: true,
                dots: false,
            });
            if (window.matchMedia("(min-width: 992px)").matches) {
                $("#img1").elevateZoom({ gallery: 'gallery', galleryActiveClass: "active", scrollZoom: true, });
                $('.ahover').hover(function (e) {
                    e.preventDefault(); var newImg = $(this).attr('data-image'); var prodHolder = $('.d_img1 #img1'); prodHolder.attr('src', newImg);
                    //var aHolder = $('.d_img1 a'); aHolder.attr('href', newImg);

                });
            } else { }
        } catch (err) { }

        try {
            var owl = $('.owl_four');
            owl.owlCarousel({
                margin:15,
                nav: true,
                dots:false,
                responsive: {
                    0: { items:1 },
                    640: { items: 2 },
                    992: { items: 4, margin:20,}
                }
            });
        } catch (err) { }

        try {
            var owl = $('.owl_six');
            owl.owlCarousel({
                margin: 15,
                items: 1,
                loop: true,
                autoplay: true,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 2 },
                    640: { items: 3 },
                    768: { items: 4 },
                    992: { items: 5, margin: 30, },
                    1200: { items: 6,margin:30, }
                }
            });
        } catch (err) { }

        try {
            var owl = $('.owl_seven');
            owl.owlCarousel({
                margin:0,
                dots: false,
                nav: true,
                loop: true,
                autoplay: true,
                autoplaySpeed: 1500,
                autoplayTimeout: 2000,
                lazyLoad: true,
                autoHeight: !0,
                responsive: {
                    0: { items: 2 },
                    640: { items: 3 },
                    768: { items: 5 },
                    992: { items: 7 }
                }
            });
        } catch (err) {
        }

        try {
            var owl = $('.owl-new');
            owl.owlCarousel({
                margin: 20,
                loop: true,
                dots: false,
                autoplay: true,
                nav: true,
                responsive: {
                    0: { items: 1 },
                    640: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 }
                }
            });
        } catch (err) {
        }

        try {
            var owl = $('.owl-kh');
            owl.owlCarousel({
                items: 1,
                margin: 20,
                loop: true,
                autoplay: true,
                nav: true,
            });
        } catch (err) {
        }
        //ProHot
        try {
            var owl = $('#ProHot');
            owl.owlCarousel({
                items:1,
                margin:30,
                nav: true,
                dots: false,
            });
        } catch (err) {}

        if ($(".disa").length) {
            $(".disa").fancybox({
                clickSlide: false,
                clickOutside: false,
                touch: false,
            });
        };

        if ($(".carousel-desc").length) {
            $(".carousel-desc").html($(".carousel-help .carousel-indicators li").html());
            $('.carousel-help').on('slid.bs.carousel', function () {
                $('.carousel-desc').html($(".carousel-help .carousel-indicators .active").html());
            });
        };

        Tabs(".tabs-lien-he","current");
        Tabs(".tabs-lien-he-dt","current2");
        Tabs(".tabs-chi-tiet", "current3");

        setCookie("closePopupBottom0", "", 5);
        setCookie("initPopupBottom0", "0", 5);
        setCookie("closePopupBottom1", "", 5);
        setCookie("initPopupBottom1", "0", 5);
        setCookie("closePopupBottom2", "", 5);
        setCookie("initPopupBottom2", "0", 5);
        setCookie("closePopupBottom3", "", 5);
        setCookie("initPopupBottom3", "0", 5);
        setCookie("closePopupBottom4", "", 5);
        setCookie("initPopupBottom4", "0", 5);

    });

    function Tabs(id,cl) {
        if ($(id).length) {
            $(id + ' li').click(function () {
                var tab_id = $(this).attr('data-tab');
                $(id + ' li').removeClass(cl);
                $('.tab-content').removeClass(cl);
                $(this).addClass(cl);
                $("#" + tab_id).addClass(cl);
            })
        }
    };

    //----- OPEN
    $('[data-popup-open]').on('click', function (e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(500);
        e.preventDefault();
    });
    //----- CLOSE
    $('[data-popup-close]').on('click', function (e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(500);
        e.preventDefault();
    });

    //bỏ ngày D21M09Y2019
    //setInterval(function () {
    //    multiPopupBottom(0);
    //    multiPopupBottom(1);
    //    multiPopupBottom(2);
    //    multiPopupBottom(3);
    //    multiPopupBottom(4);
    //}, 3000);

    function multiPopupBottom(id) {
        var popupBottom = getCookie("popupBottom" + id);
        var closePopupBottom = getCookie("closePopupBottom" + id);
        var initPopupBottom = getCookie("initPopupBottom" + id);

        if (popupBottom != "") {
            if (popupBottom == getDate()) {
                if (initPopupBottom == "0") {
                    setCookie("closePopupBottom" + id, getDate(), 0.0006);
                    closePopupBottom = getCookie("closePopupBottom" + id);
                }
                setCookie("initPopupBottom" + id, "1", 5);
                initPopupBottom = getCookie("initPopupBottom" + id);
            }
        };

        if ((closePopupBottom != "") && (closePopupBottom != undefined)) {
            $('.popupBottom.popupBottom' + id).animate({ bottom: '60px' }, 1500);
        } else {
            $('.popupBottom.popupBottom' + id).animate({ bottom: '-100%' }, 1500);
        };

        $.ajax({
            url: "/controls/popupBottom.ashx", success: function (result) {
                var arrayResult = result.split(";");
                var i = 0;
                for (i = 0; i < (arrayResult.length - 1) ; i++) {
                    //if (arrayResultPopup[0] != getCookie("popupBottom" + id)) {
                    //    setCookie("popupBottom" + id, arrayResultPopup[0], 5);
                    //    setCookie("initPopupBottom" + id, "0", 5);
                    //}

                    var arrayResultPopup = arrayResult[id].split(",");
                    var sArrayResultPopup = checkTimeRepeater(arrayResultPopup[0], arrayResultPopup[1], arrayResultPopup[2]);
                    if (sArrayResultPopup != getCookie("popupBottom" + id)) {
                        setCookie("popupBottom" + id, sArrayResultPopup, 5);
                        setCookie("initPopupBottom" + id, "0", 5);
                    }
                }
            }
        })
    }

    function getDate(){
        var sDate = new Date();
        var date = sDate.getDate();
        date = date < 10 ? '0' + date : date;

        var mon = sDate.getMonth() + 1;
        mon = mon < 10 ? '0' + mon : mon;

        var year = sDate.getFullYear();
        var hhmmAMPM = formatAMPM(sDate);

        var dateNow = date + '/' + mon + '/' + year + ' ' + hhmmAMPM;
        return dateNow;
    }
    function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
    }

    function checkTimeRepeater(dateAnalog, check, timeCheck) {
        var sDateAnalog = '';
        if (check == 0) {
            sDateAnalog = dateAnalog;
        } else {
            var today, someday;
            today = new Date();
            today.setSeconds(0);


            someday = new Date();
            someday.setFullYear(dateAnalog.slice(6, 10), dateAnalog.slice(3, 5) - 1, dateAnalog.slice(0, 2));

            if (dateAnalog.slice(17, 19) == 'AM') {
                someday.setHours(dateAnalog.slice(11, 13))
            } else {
                someday.setHours(dateAnalog.slice(11, 13) + 12)
            }
            someday.setMinutes(dateAnalog.slice(14, 16))
            someday.setSeconds(0)

            if (today.getTime() < someday.getTime()) {
                sDateAnalog = dateAnalog;
            } else if ((today.getTime() % someday.getTime()) == 0) {
                sDateAnalog = dateAnalog;
            } else {
                if ((today.getTime() - someday.getTime()) % (1000 * 60 * timeCheck) == 0) {
                    sDateAnalog = getDate()
                };
            };

        }

        return sDateAnalog;
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000 ));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        //return "";
    }

    function CallHandler() {

    };

})(jQuery);


/* lazyload.js (c) Lorenzo Giuliani
 * MIT License (http://www.opensource.org/licenses/mit-license.html)
 *
 * expects a list of:
 * `<img src="blank.gif" data-src="my_image.png" width="600" height="400" class="lazy">`
 */
!function (window) {
    var $q = function (q, res) {
            if (document.querySelectorAll) {
                res = document.querySelectorAll(q);
            } else {
                var d = document
                    , a = d.styleSheets[0] || d.createStyleSheet();
                a.addRule(q, 'f:b');
                for (var l = d.all, b = 0, c = [], f = l.length; b < f; b++)
                    l[b].currentStyle.f && c.push(l[b]);

                a.removeRule(0);
                res = c;
            }
            return res;
        }
        , addEventListener = function (evt, fn) {
            window.addEventListener
                ? this.addEventListener(evt, fn, false)
                : (window.attachEvent)
                    ? this.attachEvent('on' + evt, fn)
                    : this['on' + evt] = fn;
        }
        , _has = function (obj, key) {
            return Object.prototype.hasOwnProperty.call(obj, key);
        }
    ;

    function loadImage(el, fn) {
        var img = new Image()
            , src = el.getAttribute('data-src');
        img.onload = function () {
            if (!!el.parent)
                el.parent.replaceChild(img, el)
            else
                el.src = src;

            fn ? fn() : null;
        }
        img.src = src;
    }

    function elementInViewport(el) {
        var rect = el.getBoundingClientRect()

        return (
            rect.top >= 0
            && rect.left >= 0
            && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
        )
    }

    var images = new Array()
        , query = $q('img.lazy')
        , processScroll = function () {
            for (var i = 0; i < images.length; i++) {
                if (elementInViewport(images[i])) {
                    loadImage(images[i], function () {
                        images.splice(i, i);
                    });
                }
            };
        }
    ;
    // Array.prototype.slice.call is not callable under our lovely IE8
    for (var i = 0; i < query.length; i++) {
        images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll', processScroll);

}(this);
