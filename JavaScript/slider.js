$(function () {
   

    var SlideContainer = function (sliderEl) {


        this.currentSlide = 1;
        this.slider = $('.slider', sliderEl);
        this.slides = $('.banner', sliderEl);
        this.slideNumb = this.slides.length;

        this.slides.css({
            backgroundColor: '#' + this.randomColor(),
        });

        this.width = $(window).width();


        this.sliderWidth = this.slideNumb * this.width;
        this.slides.css('width', this.width);
        this.slider.css('width', this.slideNumb * this.width);


        this.content = $('.banner-content', sliderEl);

        $('.arrow-left', sliderEl).on('click', this.moveLeft.bind(this));
        $('.arrow-right', sliderEl).on('click', this.moveRight.bind(this));



    };

    SlideContainer.prototype.randomColor = function () {
        return Math.floor(Math.random() * 16777215).toString(16);
    };

    SlideContainer.prototype.calcSliderWidth = function () {

        this.width = $(window).width();
        this.sliderWidth = this.slideNumb * this.width;
        this.slides.css('width', this.width);
        this.slider.css('width', this.slideNumb * this.width);
        // this.slider.css('width': this.slideNumb  this.width, marginLeft: this.currentSlide  this.width);
        console.log(this.currentSlide)

    };

    SlideContainer.prototype.moveLeft = function () {
        this.content.fadeOut(300, this.animateLeft.bind(this));
        this.slides.css({backgroundColor: '#' + this.randomColor()})

    };

    SlideContainer.prototype.moveRight = function () {
        this.content.fadeOut(300, this.animateRight.bind(this));
        this.slides.css({backgroundColor: '#' + this.randomColor()})


    };

    SlideContainer.prototype.animateRight = function () {
        if ($(this.slider).is(':not(:animated)')) {
            this.slider.animate({'margin-left': '-=' + this.width}, 500, this.resetRight.bind(this));
        }
        this.content.fadeIn();
    };


    SlideContainer.prototype.resetRight = function () {
        if (++this.currentSlide === this.slideNumb) {

            this.currentSlide = 1;
            this.slider.css('margin-left', 0);


        }
        //$('.banner-content').fadeIn();
    };

    SlideContainer.prototype.animateLeft = function () {

        if (--this.currentSlide === 0) {

            this.currentSlide = this.slideNumb - 1;
            this.slider.css('margin-left', -this.sliderWidth + this.width);

        }
        if (this.slider.is(':not(:animated)')) {
            this.slider.animate({'margin-left': '+=' + this.width}, 500, function () {

                $('.banner-content').fadeIn();
            });

        }



    };

    var slideContainer1 = new SlideContainer($('.slider-container').eq(0));
    $(window).on('resize', function () {

        slideContainer1.calcSliderWidth();
    });

});