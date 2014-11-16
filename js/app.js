$(document).foundation();

$(function() {
	var smallestDimension = ($(window).width() < $(window).height())? $(window).width():$(window).height();
	var totalProgressKnobDimension = (smallestDimension / 2 > 200) ? smallestDimension / 2 : 200;
	var subProgressKnobDimension = (totalProgressKnobDimension / 2 > 50) ? totalProgressKnobDimension / 2 : 50;

	$(window).scroll(function() {
		console.log($(window).scrollTop() + ' ' + $('.parallax-background').css('opacity'));
	    // Get scroll position
	    var s = $(window).scrollTop();
	    if (s <= 0) {
	    	$('.parallax-background').css('opacity',1);
	    }else{
	    // scroll value and opacity
		    opacityVal = (100.0/ s);
		    // opacity value 0% to 100%
		    $('.parallax-background').css('opacity', opacityVal);
	    }
	});

	$("#toMain").click(function (){
        //$(this).animate(function(){
            $('html, body').animate({
                scrollTop: $("#main").offset().top +5
            }, 500);
        //});
    });

	var globalDraw = function(){
		// $(this.i).val(this.cv + '%');
    	// $(this.i).val('Elgin Park Clubs');

                // "tron" case
        if(this.$.data('skin') == 'tron') {

            var a = this.angle(this.cv)  // Angle
                , sa = this.startAngle          // Previous start angle
                , sat = this.startAngle         // Start angle
                , ea                            // Previous end angle
                , eat = sat + a                 // End angle
                , r = true;

            this.g.lineWidth = this.lineWidth;

            this.o.cursor
                && (sat = eat - 0.3)
                && (eat = eat + 0.3);

            if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value);
                this.o.cursor
                    && (sa = ea - 0.3)
                    && (ea = ea + 0.3);
                this.g.beginPath();
                this.g.strokeStyle = this.previousColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                this.g.stroke();
            }

            this.g.beginPath();
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
            this.g.stroke();

            this.g.lineWidth = 2;
            this.g.beginPath();
            this.g.strokeStyle = this.o.fgColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
            this.g.stroke();

            return false;
        }
	};

    $("#totalProgress-knob").knob({
    	width:Math.round(totalProgressKnobDimension),
    	height:Math.round(totalProgressKnobDimension),
        draw : globalDraw,
        'format' : function (value) {
	    	return value + '%';
	  	}
    });

    $(".small-knob").knob({
    	width:Math.round(subProgressKnobDimension),
    	height:Math.round(subProgressKnobDimension),
        draw : globalDraw,
        'format' : function (value) {
	    	return value + '%';
	  	}
    });

    $('#totalProgress-knob').parent().hover( function() {
    	$({ value: $('#totalProgress-knob').val().replace('%','') }).animate(
            { value: 100 }, 
	            {   duration: 500,
	                easing: 'swing',
	                progress: function() {
	                  $('#totalProgress-knob').val(Math.round(this.value)).trigger('change');
	            	}
         		});
    },function(){
    	$({ value: $('#totalProgress-knob').val().replace('%','') }).animate(
            { value: $('#totalProgress-knob').data('value') }, 
	            {   duration: 500,
	                easing: 'swing',
	                progress: function() {
	                  $('#totalProgress-knob').val(Math.round(this.value)).trigger('change');
	            }
         });
    });
});
