
$(document).ready(function() {
    // $(".money-format").priceFormat();

    $("#send_form2").on("click", function(e){

    });


    $(".btn-default").on("click", function(e){

        console.log('teeest');
        e.preventDefault();
        $modalCalc.modal("show");

        /*
                tmp_name = $(this).closest("form").find("input[id=i-100-name]").val();
                tmp_phone = $(this).closest("form").find("input[id=i-100-phone]").val();
                if ((tmp_phone.length > 0) && (tmp_name.length > 0) && (tmp_name.length < 40)) {
                    var url = new URL(window.location.href);
                    var order_id = false;
                        $.ajax({
                            type: 'POST',
                            url: '/assets/tamplate/php/sendIpotekalp4.php',
                            data: { phone: tmp_phone, name: tmp_name, order_id: order_id},
                            success: function(data) {}
                            });
                }
        */
    });





    $("#lp4send").on("click", function(e){
        if(window.location.href.search("lp4") > 0){
            tmp_name = $(this).closest("form").find("input[name=name]").val();
            tmp_phone = $(this).closest("form").find("input[name=phone]").val();
            if ((tmp_phone.length > 0) && (tmp_name.length > 0) && (tmp_name.length < 40)) {
                var url = new URL(window.location.href);
                var sid = url.searchParams.get("sid");
                if(sid){
                    //linknot
                    var order_id = new Date().getTime();
                    $.ajax({
                        type: 'GET',
                        url: 'https://liknot.ru/postback/',
                        data: {sid : sid, order_id: order_id, status : "approved"},
                        //success: success,
                    });
                }
                else{
                    var order_id = false;
                }
                $.ajax({
                    type: 'POST',
                    url: '/assets/tamplate/php/sendIpotekalp4.php',
                    data: { phone: tmp_phone, name: tmp_name, order_id: order_id},
                    success: function(data) {
                        //if(data === "true" && successCallback) {
                        //    successCallback();
                        //}
                        //else {
                        //    if (failedCallback) {
                        //        failedCallback();
                        //    }
                        //}
                    }
                });
            }
        }
        else
        {



            /*

                    e.preventDefault();
                    $modalCalc.modal("show");

            */


            tmp_name = $(this).closest("form").find("input[id=i-100-name]").val();
            tmp_phone = $(this).closest("form").find("input[id=i-100-phone]").val();
            if ((tmp_phone.length > 0) && (tmp_name.length > 0) && (tmp_name.length < 40)) {
                var url = new URL(window.location.href);
                var order_id = false;
                $.ajax({
                    type: 'POST',
                    url: '/assets/tamplate/php/sendIpotekalp4.php',
                    data: { phone: tmp_phone, name: tmp_name, order_id: order_id},
                    success: function(data) {
                    }
                });
            }

        }
    });
});


// $(document).ready(function() {
//     DebugHandler();
//     DialogHandler();
//     // FormsHandler();
//     // Hacks();
//     CustomHandler();
//     AutoGenerate();
//     GMapHandler();
//     Calculator();
//     Calculator2();
// });


var $modal = $("#modal-callback");

var $modalCalc = $("#modal-calc");

var $html = $("html");

var $body = $("body");

window.DEBUG_MODE = 0;

var DialogHandler = function() {
    function e(e, t) {
        if (t) $modal.find(e).html(t).show(); else $modal.find(e).hide();
    }
    function t(e, t) {
        t = t ? t : "";
        $modal.find(e).val(t);
    }
    $(".open-callback").click(function(a) {
        /*
        tmp_name = $(this).closest("form").find("input[id=i-100-name]").val();
        tmp_phone = $(this).closest("form").find("input[id=i-100-phone]").val();
        if ((tmp_phone.length > 0) && (tmp_name.length > 0) && (tmp_name.length < 40)) {
            var url = new URL(window.location.href);
            var order_id = false;
            $.ajax({
                type: 'POST',
                url: '/assets/tamplate/php/sendIpotekalp4.php',
                data: { phone: tmp_phone, name: tmp_name, order_id: order_id},
                success: function(data) {
                }
            });
        }
*/





        a.preventDefault();
        t("#modal-additional", $(this).data("additional"));
        t("#modal-postname", $(this).data("postname"));
        t("#modal-goal", $(this).data("goal"));
        e("#modal-title", $(this).data("title"));
        e("#modal-btn", $(this).data("btn"));
        e("#modal-subtitle", $(this).data("subtitle"));
        e("#modal-subtext", $(this).data("subtext"));
        $modal.find(".order-form").data("result", $(this).data("result") ? $(this).data("result") : "");
        $modal.find("[id*=mode-]").hide().find("input").attr("readonly", "readonly");
        var n = $(this).data("fields");
        n = n ? n : "name,phone";
        n = n.split(",");
        $.each(n, function(e, t) {
            var a = $modal.find("#mode-" + t);
            a.find("input").removeAttr("readonly");
            a.show();
            if (t == "time") {
                $modal.find(".order-form").data("result", $modal.find(".order-form").find(".btn-group-nav .active").data("result"));
            }
        });
        $modal.modal("show");
    });
    $modal.find("#mode-time .btn-group-nav a").click(function(e) {
        e.preventDefault();
        var t = $(this);
        if (t.hasClass("active")) return;
        t.addClass("active");
        t.siblings().removeClass("active");
        t.parents(".order-form").data("result", t.data("result"));
        t.parents(".order-form").find(".modal-subtext").html(t.data("result"));
        $("input#i-100-whentime").slideToggle();
        $("input#i-100-whencall").val(t.text());
    }).eq(0).click();
    $("label[for]").on("click", function(e) {
        var t = window[this.htmlFor];
        t.checked = !t.checked;
        e.preventDefault();
    });
    $(".open-calculator").click(function(e) {
        console.log('$(".open-calculator").click');
        e.preventDefault();
        $modalCalc.modal("show");
    });
};

var afterSendExecuted;

var FormsHandler = function() {
    $(".btn-group input").bind("click keyup", function() {
        $(this).removeClass("error").parent().removeClass("error");
    });



    $('.order-form #send_form2').click(function(e) {
        console.log('polu4ilos');
        // отменяем стандартное поведение браузера
        e.preventDefault();
        // переменная, которая будет содержать данные серилизации
        var $data;
        // в зависимости от того какую нажали кнопку, выполняем
        // серилизацию тем или иным способом
        if ($(this).attr('data-method') == 'serialize') {
            $data = $(this).parent('form').serialize();
        } else {
            $data = $(this).parent('form').serializeArray();
        }

        // для отправки данных будем использовать технологию ajax
        //   url - адрес скрипта, с помощью которого будем обрабатывать форму на сервере
        //   type - метод отправки запроса (POST)
        //   data - данные, которые необходимо передать серверу
        //   success - функция, которая будет вызвана, когда ответ прийдёт с сервера
        $.ajax({
            url: '/assets/tamplate/php/order.php',
            type: 'post',
            data: $data,
            success: function(result) {
                if (result == "success"){
                    result = "<div class='modal-header'><div class='modal-title'>Мы получили Вашу заявку и вскоре перезвоним!</div><button type='button' data-dismiss='modal' class='close'></button></div>";
                    $('.modal-content').html(result);
                } else {
                    result = "<div class='modal-header'><div class='modal-title'>Что-то пошло не так, попробуйте ещё раз или позвоните нам!</div><button type='button' data-dismiss='modal' class='close'></button></div>";
                    $('.modal-content').html(result);
                }

            }
        })
    });



    /*    $(".order-form").ajaxForm({

            url: "/assets/tamplate/php/order.php",
            beforeSubmit: e,
            success: t
        });
    */

    function t(e, t, a, n) {
        if (afterSendExecuted) return;
        afterSendExecuted = true;
        n.find("input[type=text]").val("");
        n.find(".js-calc-summ-input").val(Util.number_format("1100000", " ", "", " ")).change();
        var i = $("#modal-result");
        if ($modal.is(".in")) $modal.modal("hide").one("hidden.bs.modal", function() {
            i.modal("show");
        }); else i.modal("show");
        if ($modalCalc.is(".in")) $modalCalc.modal("hide").one("hidden.bs.modal", function() {
            i.modal("show");
        });
        $modal.data("result", "");
        $("input[type=submit], button[type=submit]").removeAttr("disabled");
    }
};

window.isMobile = window.isMobile || false;


var CustomHandler = function() {
    if (!isMobile.any) {
        /*$("a[href*=tel]").removeAttr("href");*/
    }
    // sbjs.init();
    $(".scrollTo").click(function(e) {
        e.preventDefault();
        $.scrollTo($(this).attr("href"), 1500, {
            interrupt: true,
            over: -.25
        });
    });
    var e = {
        text: -1600
    };
    var t = {
        text: 0
    };
    var a = {
        text: 1600
    };
    var n = false;
    $.fn.animateSlideItem = function(e, t, a) {
        this.delay(e).animate({
            left: t
        }, a);
    };
    $.fn.cssSlideItem = function(e) {
        return this.css({
            left: e
        });
    };
    $.fn.animateSlideItem2 = function(e, t, a) {
        this.delay(e).animate({
            right: t
        }, a);
    };
    $.fn.cssSlideItem2 = function(e) {
        return this.css({
            right: e
        });
    };
    var i = $(".wr8 .gallery .items");
    var r = i.find(".item").length;
    i.carouFredSel({
        width: 1600,
        auto: false,
        prev: {
            button: ".wr8 .navigation .left"
        },
        next: {
            button: ".wr8 .navigation .right"
        },
        scroll: {
            items: 1,
            duration: 0,
            timeoutDuration: 3e3,
            conditions: function() {
                return !n;
            },
            onBefore: function(t) {
                n = true;
                $(this).delay(400);
                t.items.old.find(".avatar").removeAttr("style");
                t.items.old.find(".client").removeAttr("style");
                t.items.old.find(".avatar").animateSlideItem(100, e.text);
                t.items.old.find(".client").animateSlideItem2(100, e.text);
            },
            onAfter: function(e) {
                e.items.old.find(".avatar").cssSlideItem(t.text);
                e.items.old.find(".client").cssSlideItem2(t.text);
                e.items.visible.find(".avatar").removeAttr("style");
                e.items.visible.find(".client").removeAttr("style");
                e.items.visible.find(".avatar").cssSlideItem2(a.text).animateSlideItem2(100, t.text, function() {
                    n = false;
                });
                e.items.visible.find(".client").cssSlideItem(a.text).animateSlideItem(100, t.text);
            }
        },
        pagination: {
            container: ".wr8 .navigation .pagination",
            anchorBuilder: function(e) {
                return "<span>" + e + " из " + r + "</span>";
            }
        }
    });
    var l = $(".bank-gallery .gallery .items");
    var s = $(".bank-gallery a.left");
    var o = $(".bank-gallery a.right");
    var d = $(".bank-gallery .pagination");
    l.carouFredSel({
        width: 840,
        items: 7,
        auto: false,
        scroll: 3,
        prev: s,
        next: o,
        pagination: {
            container: d,
            anchorBuilder: function(e) {
                return "<span></span>";
            }
        }
    });
    var m = $(".wr12");
    var u = $(".wr12 .contract");
    var c = $(".wr12 .left");
    if (u.length) {
        u.affix({
            offset: {
                top: c.offset().top - 130,
                bottom: $(document).height() - m.offset().top - m.height()
            }
        });
    }
    $("body").scrollspy({
        target: "#navbar",
        offset: 350
    });
    $("#navbar").on("activate.bs.scrollspy", function() {
        var e = $(".nav li.active > a").attr("href");
        $(".wr12 .item").removeClass("active");
        $(e).addClass("active");
    });
    var f = $(".wr20");
    var p = $(".wr20 .fix-menu");
    if (p.length) {
        p.affix({
            offset: {
                top: f.offset().top - 44,
                bottom: $(document).height() - f.offset().top - f.height() + 33
            }
        });
    }
    var v = $(".wr26 .gallery .items");
    v.carouFredSel({
        width: 822,
        height: 149,
        auto: false,
        scroll: 5,
        items: 5,
        prev: ".wr26 .navigation .left",
        next: ".wr26 .navigation .right",
        pagination: {
            container: ".wr26 .navigation .pagination",
            anchorBuilder: function(e) {
                return "<span></span>";
            }
        }
    });
    $(".image-popup-no-margins").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: "mfp-no-margins mfp-with-zoom",
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });
    $(document).ready(function() {
        $(".popup-gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    });
};

var Calculator = function() {
    var e = $(".wr_all").attr("id");
    var t = null;
    switch (e) {
        case "p-mortgage":
            t = "mortgage";
            break;

        case "p-secured":
            t = "secured";
            break;

        case "p-consumer":
            t = "consumer";
            break;

        case "p-business":
            t = "business";
            break;
    }
    function a(e) {
        var t = {};
        var a = {
            min: 1e6,
            max: 1e8,
            form: 11e6,
            step: 1e3
        };
        var n = null;
        var i = null;
        var r = null;
        switch (e) {
            case "mortgage":
                t.min = 0;
                t.max = 70;
                t.from = 0;
                t.step = 5;
                t.grid_num = 14;
                a.min = 1e6;
                a.max = 1e8;
                a.form = 11e5;
                a.step = 5e4;
                n = "Первоначальный взнос, %";
                i = "Вам перезвонит эксперт в области ипотеки в течение 30 минут.";
                r = "0";
                break;

            case "secured":
                t.min = 1;
                t.max = 20; /*30*/
                t.from = 6; /*15*/
                t.step = 1; /*5*/
                t.grid_num = 1;
                a.min = 5e5;
                a.max = 1e8;
                a.form = 11e5;
                a.step = 5e4;
                n = "Срок кредита, лет";
                i = "Вам перезвонит эксперт по залоговому кредитованию в течение 30 минут.";
                r = "6"; /*15*/
                break;

            case "consumer":
                t.min = 1;
                t.max = 7;
                t.from = 4;
                t.step = 1;
                t.grid_num = 6;
                a.min = 1e5;
                a.max = 5e6;
                a.form = 11e5;
                a.step = 1e3;
                n = "Срок кредита, лет";
                i = "Вам перезвонит эксперт по потребительскому кредиту в течение 30 минут.";
                r = "4";
                break;

            case "business":
                t.min = 1;
                t.max = 10;
                t.from = 5;
                t.step = 1;
                t.grid_num = 9;
                a.min = 1e6;
                a.max = 1e8;
                a.form = 11e5;
                a.step = 1e5;
                n = "Срок кредита, лет";
                i = "Вам перезвонит эксперт по кредитованию юридических лиц в течение 30 минут.";
                r = "5";
                break;
        }
        return {
            type: t,
            summ: a,
            title: n,
            subtext: i,
            types: r
        };
    }
    $(".js-calculator").each(function() {
        var e = $(this);
        var n = e.find(".select-calc");
        var i = e.find(".js-select-type");
        var r = e.find(".js-select-house");
        var l = e.find(".js-ion-title");
        var s = e.find(".subtext");
        var o = e.find(".order-form");
        var d = e.find(".js-calc-ion-type");
        var m = e.find(".js-calc-ion-summ");
        var u = e.find(".js-calc-summ-input");
        var c = e.find(".js-calc-type-input");
        var f = {
            min: 0,
            max: 70,
            from: 0,
            step: 5,
            grid_num: 14,
            type: "single",
            grid: true,
            onChange: function(e) {
                c.val(e.from);
            }
        };
        var p = {
            type: "single",
            min: 1e6,
            max: 1e8,
            from: 11e5,
            step: 1e3,
            grid_num: 100,
            onChange: function(e) {
                u.val(Util.number_format(e.from, " ", "", " "));
            }
        };
        d.ionRangeSlider(f);
        m.ionRangeSlider(p);
        if (t) {
            i.hide();
            $("input[name=credit]").val(e.find("[data-type=" + t + "]").text());
            $(".js-ion").show();
            var v = a(t);
            d.data("ionRangeSlider").update(v.type);
            m.data("ionRangeSlider").update(v.summ);
            l.text(v.title);
            s.text(v.subtext);
            o.attr("data-result", v.subtext);
            e.find(".js-calc-nameType-input").val(v.title);
            e.find(".js-calc-type-input").val(v.types);
        }
        if (t != "mortgage") {
            r.hide();
            e.find('input[name="house"]').addClass("not-validate").attr("value", "");
        }
        n.click(function() {
            $(this).children(".select-calc-items").slideToggle(300);
        });
        e.find(n).children(".select-calc-items").mouseleave(function() {
            $(this).slideUp(300);
        });
        e.find(".select-calc-item").click(function() {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            var e = $(this).text();
            $(this).parent().prev().text(e);
            $(this).parent().next().val(e);
        });
        e.find(".js-calc-summ-input").on("change blur", function() {
            var e = $(this).val().replace(/\s+/g, "");
            var n = a(t);
            if (e <= n.summ.min) {
                $(this).val(Util.number_format(n.summ.min, " ", "", " "));
                m.data("ionRangeSlider").update({
                    from: n.summ.min
                });
            } else if (e >= n.summ.max) {
                $(this).val(Util.number_format(n.summ.max, " ", "", " "));
                m.data("ionRangeSlider").update({
                    from: n.summ.max
                });
            } else if (e > n.summ.min && e < n.summ.max) {
                m.data("ionRangeSlider").update({
                    from: e
                });
            }
            console.log(e, n);
        });
        i.find(".select-calc-item").click(function() {
            t = $(this).data("type");
            if ($(this).text() == "Ипотека") {
                r.show();
                e.find('input[name="house"]').removeClass("not-validate");
                e.find('input[name="house"]').addClass("not-validate").attr("value", "Квартира (вторичный рынок)");
            } else {
                r.hide();
                e.find('input[name="house"]').addClass("not-validate");
                e.find('input[name="house"]').addClass("not-validate").attr("value", "");
            }
            e.find(".js-ion").show();
            var n = a(t);
            d.data("ionRangeSlider").update(n.type);
            m.data("ionRangeSlider").update(n.summ);
            l.text(n.title);
            s.text(n.subtext);
            o.data("result", n.subtext);
            u.val(Util.number_format("1100000", " ", "", " ")).change();
            e.find(".js-calc-nameType-input").val(n.title);
            e.find(".js-calc-type-input").val(n.types);
        });
    });
};

var Calculator2 = function() {
    if (!$(".wr33").length) return;
    var e = $(".wr_all").attr("id");
    var t;
    var a;
    var n;
    var i;
    var r;
    var l;
    var s;
    var o;
    var d;
    var m;
    var u;
    var c;
    var f = $("#i-calc-select");
    var p = $("#js-payment");
    var v = $("#js-payment-bank");
    var h = $("#ion_calc_summ_input");
    function g() {
        d = parseInt(d);
        m = parseInt(m);
        var e = t.replace("%", "").replace(" ", "").replace(",", ".");
        var n = e / 12 / 100;
        var i = m * 12;
        var r = n * Math.pow(1 + n, i) / (Math.pow(1 + n, i) - 1);
        u = r * d;
        var l = a.replace("%", "").replace(" ", "").replace("*", "").replace(",", ".");
        var s = l / 12 / 100;
        var o = m * 12;
        var f = s * Math.pow(1 + s, o) / (Math.pow(1 + s, o) - 1);
        c = f * d;
        u = Math.ceil(u);
        c = Math.ceil(c);
        p.text(Util.number_format(u, " ", "", " ") + " руб.");
        v.text(Util.number_format(c, " ", "", " ") + " руб.");
    }
    function b() {
        $("#js-rate").text(t);
        $("#js-rate-bank").text(a);
        $("#js-insurance").text(n);
        $("#js-insurance-bank").text(i);
    }
    function w() {
        d = parseInt(d);
        m = parseInt(m);
        r = parseInt(u);
        l = parseInt(c);
        var e = parseFloat(n.replace("%", "").replace(",", "."));
        var t = parseFloat(i.replace("%", "").replace(",", "."));
        var a = t - e;
        a = a / 100;
        o = (l - r) * m * 12 + a * d * m - s * d;
        $(".wr33").find(".calculator-summ").text(Util.number_format(Math.round(o), " ", "", " ") + " руб.**");
    }
    var y = {
        type: "single",
        grid: true,
        onChange: function(e) {
            m = e.from;
            g();
            w();
        }
    };
    var x = {
        type: "single",
        onChange: function(e) {
            d = e.from;
            h.val(Util.number_format(e.from, " ", "", " "));
            g();
            w();
        }
    };
    switch (e) {
        case "p-mortgage":
            x.min = 1e6;
            x.max = 1e8;
            x.from = 1e6;
            x.step = 5e4;
            y.min = 5;
            y.max = 30;
            y.from = 15;
            y.step = 5;
            y.grid_num = 5;
            t = "9,2 %";
            a = "11,75 %*";
            n = "0,5%";
            i = "0,8%";
            s = .03;
            break;

        case "p-secured":
            x.min = 5e5;
            x.max = 5e7;
            x.from = 1e6;
            x.step = 5e4;
            y.min = 5;
            y.max = 30;
            y.from = 15;
            y.step = 5;
            y.grid_num = 5;
            t = "10,5 %";
            a = "14,5 %*";
            n = "0,5%";
            i = "0,8%";
            s = .1;
            break;

        case "p-consumer":
            x.min = 1e5;
            x.max = 5e6;
            x.from = 1e5;
            x.step = 1e4;
            y.min = 1;
            y.max = 5;
            y.from = 1;
            y.step = 1;
            y.grid_num = 4;
            t = "12,5 %";
            a = "19 %*";
            n = "0%";
            i = "9%";
            s = .1;
            break;
    }
    d = x.from;
    m = y.from;
    $("#ion_year").ionRangeSlider(y);
    var _ = $("#ion_calc_summ");
    _.ionRangeSlider(x);
    _ = _.data("ionRangeSlider");
    var C;
    h.on("change blur", function() {
        C = $(this).val().replace(/\s+/g, "");
        C = parseInt(C);
        if (C <= x.min) {
            $(this).val(Util.number_format(x.min, " ", "", " "));
            _.update({
                from: x.min
            });
            d = x.min;
        } else if (C >= x.max) {
            $(this).val(Util.number_format(x.max, " ", "", " "));
            _.update({
                from: x.max
            });
            d = x.max;
        } else if (C > x.min && x.max > C) {
            _.update({
                from: C
            });
            d = C;
        }
        g();
        w();
    });
    f.on("click", function() {
        $(this).find(".select-calc-items").slideToggle(300);
        $(this).mouseleave(function() {
            $(this).find(".select-calc-items").slideUp(300);
        });
        $(this).find(".select-calc-item").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
            f.find("span").text($(this).text());
            t = $(this).data("rate");
            a = $(this).data("rate-bank");
            n = $(this).data("insurance");
            i = $(this).data("insurance-bank");
            r = $(this).data("payment");
            l = $(this).data("payment-bank");
            b();
            g();
            w();
        });
    });
    g();
    b();
    w();
};

window.Gmap = null;

var GMapHandler = function() {
    var e = $(".wr29");
    var t = "55.770800, 37.665705";
    var a = "55.770697, 37.667647";
    var n = "img/marker.png";
    var i = 15;
    if (!e.length) {
        console.log("[Gmap] Элемента не существует");
        return;
    }
    if (!window.map_coords) {
        console.log("[Gmap] Не заданы координаты в параметре map_coord. Используем стандартное значение");
        window.map_coords = "55.69777704873052,37.77824859751695;55.7535378290641,37.624929644118836;10";
    }
    var r = window.map_coords.split(";");
    if (r[0]) t = r[0];
    if (r[1]) a = r[1];
    if (r[2]) i = r[2];
    t = t.split(",");
    a = a.split(",");
    i = parseInt(i);
    var l = $(window).height();
    var s = false;
    var o = e.offset().top;
    setInterval(function() {
        if (!s) o = e.offset().top;
    }, 2e3);
    setInterval(function() {
        var e = $(document).scrollTop();
        if (!s && e > o - l * 3) {
            $.getScript("http://maps.googleapis.com/maps/api/js?v=3.9&sensor=false&callback=gMapInitialize");
            s = true;
        }
    }, 20);
    window.gMapInitialize = function() {
        window.Gmap = new google.maps.Map(document.getElementById("gmap"), {
            zoom: i,
            center: new google.maps.LatLng(parseFloat(t[0]), parseFloat(t[1])),
            mapTypeControlOptions: {
                mapTypeIds: [ google.maps.MapTypeId.ROADMAP, "tehgrayz" ]
            },
            scrollwheel: false
        });
        var e = new google.maps.StyledMapType([ {
            featureType: "all",
            stylers: [ {
                hue: "#0000ff"
            }, {
                saturation: -95
            } ]
        }, {
            featureType: "poi",
            elementType: "label",
            stylers: [ {
                visibility: "off"
            } ]
        } ], {
            name: "Grayscale"
        });
        window.Gmap.mapTypes.set("tehgrayz", e);
        window.Gmap.setMapTypeId("tehgrayz");
        new google.maps.Marker({
            position: new google.maps.LatLng(parseFloat(a[0]), parseFloat(a[1])),
            map: window.Gmap,
            icon: {
                url: n,
                origin: new google.maps.Point(0, 0)
            }
        });
    };
};

var AutoGenerate = function() {};

var DebugHandler = function() {
    try {
        if (window.location.search) {
            var e = {};
            $.each(window.location.search.substr(1).split("&"), function(t, a) {
                var n = a.split("=");
                e[n[0]] = parseInt(n[1]);
            });
            if (e && e.debug) {
                var t = "Включен DEBUG режим: \n";
                if (e.show_lines || e.show_block) {
                    $html.addClass("debug");
                    if (e.show_lines) {
                        $html.addClass("debug1");
                        t += "[CSS] Отображается сетка \n";
                    }
                    if (e.show_block) {
                        $html.addClass("debug2");
                        t += "[CSS] Отображается блок 980px \n";
                    }
                }
                if (e.disable_lazy) {
                    $(".lazy").removeClass("lazy");
                }
                if (e.disable_forms) {
                    window.DEBUG_MODE |= 1;
                    t += "[JS] Отправка форм выключена \n";
                }
                if (e.alert_forms) {
                    window.DEBUG_MODE |= 2;
                    t += "[JS] Вывод отправляемых полей \n";
                }
                if (e.disable_validation) {
                    window.DEBUG_MODE |= 4;
                    t += "[JS] Выключена валидация полей \n";
                }
                t += "Возможные опции: \n";
                t += "show_lines \n";
                t += "show_block \n";
                t += "disable_lazy \n";
                t += "disable_forms \n";
                t += "alert_forms \n";
                t += "disable_validation \n";
                t += "disable_alert \n";
                if (e.disable_alert !== 1) alert(t);
            }
        }
    } catch (a) {
        console.log(a);
    }
};

window.Util = {
    number_format: function(e, t, a, n) {
        e = (e + "").replace(/[^0-9+\-Ee.]/g, "");
        var i = !isFinite(+e) ? 0 : +e, r = !isFinite(+t) ? 0 : Math.abs(t), l = typeof n === "undefined" ? "," : n, s = typeof a === "undefined" ? "." : a, o = "", d = function(e, t) {
            var a = Math.pow(10, t);
            return "" + (Math.round(e * a) / a).toFixed(t);
        };
        o = (r ? d(i, r) : "" + Math.round(i)).split(".");
        if (o[0].length > 3) {
            o[0] = o[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, l);
        }
        if ((o[1] || "").length < r) {
            o[1] = o[1] || "";
            o[1] += new Array(r - o[1].length + 1).join("0");
        }
        return o.join(s);
    },
    validateEmail: function(e) {
        var t = /\S+@\S+\.\S+/;
        return t.test(e);
    },
    plural: function(e, t) {
        return t[e % 10 == 1 && e % 100 != 11 ? 0 : e % 10 >= 2 && e % 10 <= 4 && (e % 100 < 10 || e % 100 >= 20) ? 1 : 2];
    }
};

