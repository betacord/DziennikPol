/**
 * Created by Lukasz on 2016-10-31.
 */
$(document).ready(function () {




    var owl = $("#SliderIndex");



    owl.owlCarousel({


        loop: false,
        margin: 0,
        nav: false,
        dots: true,
        singleItem: true,
        dotsContainer: '#custom-dots',
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
            }
        }


    });
    $(".lighterbox").lighterbox({ overlayColor : "white" });

});