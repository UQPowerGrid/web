$.fn.showHide = function (options) {

    //default vars for the plugin
    var defaults = {
        speed: 1000,
        easing: '',
        changeText: 0,
        showText: 'Show',
        hideText: 'Hide',
        slideDiv: '.slide-div'
    };
    var options = $.extend(defaults, options);

    return this.each(function () {
        $(this).click(function () {
            $(options.slideDiv).hide();
            // this var stores which button you've clicked
            var toggleClick = $(this),
                toggleDiv = $(this).data('slide-id');
            // here we toggle show/hide the correct div at the right speed and using which easing effect
            $(toggleDiv).slideToggle(options.speed, options.easing, function () {
                // this only fires once the animation is completed
                // if(options.changeText==0){
                //$(toggleDiv).is(":visible") ? toggleClick.text(options.hideText) : toggleClick.text(options.showText);
                //}

            });


        });

    });

};

$('a').showHide({'slideDiv' : '.slide-div'});