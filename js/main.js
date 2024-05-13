
(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Fixed Navbar
    $('.fixed-top').css('top', $('.top-bar').height());
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('.fixed-top').addClass('bg-dark').css('top', 0);
        } else {
            $('.fixed-top').removeClass('bg-dark').css('top', $('.top-bar').height());
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1500,
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    // Product Cart
    $(document).ready(function () {
        // Add to cart
        $(".add-to-cart").click(function (e) {
        e.preventDefault();
            var price = parseFloat($(this).data("price"));
            var itemName = $(this).closest(".product-item").find("h3").text();
            var formattedPrice = price.toFixed(3);
            $("#cart-items").append(
                '<li class="list-group-item">' +
                itemName +
                " - Rp" +
                formattedPrice +
                '<button class="btn btn-sm btn-danger mx-4 remove-item">Remove</button></li>'
            );
            var total = parseFloat($("#cart-total").text());
            $("#cart-total").text((total + price).toFixed(3));
        });

        // Remove item
        $("#cart-items").on("click", ".remove-item", function () {
            var removedItemPrice = parseFloat(
                $(this)
                .closest("li")
                .text()
                .match(/Rp(\d+(\.\d{3})*)/)[1]
            );
            var total = parseFloat($("#cart-total").text());
            $(this).closest("li").remove();
            $("#cart-total").text((total - removedItemPrice).toFixed(3));
        });

        // Checkout button
        $(".checkout").click(function () {
            var total = $("#cart-total").text();
            Swal.fire({
                title: "Total Price's:",
                text: "Rp " + total,
                icon: "success",
                confirmButtonText: "OK",
            });
            });
        });
    
})(jQuery);

