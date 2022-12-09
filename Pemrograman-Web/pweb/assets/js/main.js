$(function () {
    $(document).scroll(function () { 
        var $nav = $(".navbar");
        if ($(this).scrollTop() > $nav.height()) {
            // alert('Terjadi Scrolling Lebih Tinggi Dari Tinggi Nav');
            $nav.addClass('scrolled');
            $nav.removeClass("navbar-dark");
            $nav.addClass("navbar-light");
        }else{
            // alert('Scrolling Turun');
            $nav.removeClass("scrolled");
            $nav.removeClass("navbar-dark");
            $nav.addClass("navbar-light");
        }
    });
});