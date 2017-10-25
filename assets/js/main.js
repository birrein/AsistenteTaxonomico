
//menu

$(window).scroll(function() {

    if ($(window).width() > 992) {
        if ($(window).scrollTop() > 174) {
            $('#mainheader').addClass('fixedHeader');
        } else {
            $('#mainheader').removeClass('fixedHeader');
        }
    } else {
        
    }
});


$(document).ready(function() {

// stepper
$("input[type=number]").stepper();

// tooltip
$("a[data-rel]").tooltip();

// text rotator
$(".rotate").textrotator({
          animation: "flipUp",
          speed: 3000
        });

// toggle
$("#shipping-billing").on("change", function() {
    if (this.checked) {
        jQuery(this).closest("form").find("#switch-billing").slideUp(200);
    } else {
        jQuery(this).closest("form").find("#switch-billing").slideDown(200);
    }
});




// Shopping cart dropdown		
$(".mini-cart").hover(function() {
        jQuery(this).addClass('hover');
        jQuery(".mini-cart .block-content").stop(true, true).delay(300).fadeIn(500);
    },
    function() {
        jQuery(".mini-cart .block-content").stop(true, true).delay(300).fadeOut(500);
    });




$("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });

    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));




    
// table
$('#responsive-example-table').stacktable({
    myClass: 'stacktable small-only'
});

 // item hover
    $(".item").hover(
        function() {
            $('.caption', this).fadeIn("slow");
        },
        function() {
            $('.caption', this).fadeOut("fast");
        }
    );

// owl carousel
$(".owlcarousel").owlCarousel({
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    pagination: false,
    rewindNav: false,
    items: 4,
    mouseDrag: true,
    itemsDesktop: [1200, 4],
    itemsDesktopSmall: [1024, 4],
    itemsTablet: [970, 2],
    itemsMobile: [767, 1]
});

// Custom Navigation Events
$(".next").click(function() {
    owl.trigger('owl.next');
});
$(".prev").click(function() {
    owl.trigger('owl.prev');
});


// camera slider

if ($('#camera_wrap_3').length > 0) {
    $('#camera_wrap_3').camera({
        height: '40%',
        pagination: false,
        thumbnails: false
    });
}

 
});


/*
	flexslider product
*/

$(window).load(function() {
    $('#thumbcarousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 60,
        itemMargin: 5,
        prevText: "",
        nextText: "",
        asNavFor: '#productcarousel'
    });

    $('#productcarousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        prevText: "",
        nextText: "",
        sync: "#thumbcarousel",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
});

