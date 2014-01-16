$(document).ready(function() {
	var $formulario, $task, date_text, timestamp_text, $time_buttons, $future_timeline;

	// Responsive snitch
	if ( $('body').hasClass('_dev') ) {
		$('body._dev').width_snitch({style:{}});
	}

	// External links
	$('.legal a, a.ext').attr('target', '_blank');

	$task = $('.task');

	$task.find('.js_timestamp').each(function(index, el) {
		date_text = $(this).find('.time').attr('datetime');

		timestamp_text = moment( date_text , 'DD-MM-YYYY' ).lang('es').fromNow();
		$(this).append( '<div class="timestamp">' + timestamp_text + '</div>' );


		$(this).find('.time').text( moment( date_text , 'DD-MM-YYYY' ).lang('es').format('dddd D [de] MMMM') );

	});

	// Timetravel
	$future_timeline = $('#future');
	$time_buttons = $('.timetravel.buttons');

	$time_buttons.find('.js_view_future').on('click', function(event) {
		event.preventDefault();

		$future_timeline.addClass('open').animate({'margin-top': 0}, 200);
		$time_buttons.find('.js_view_future').toggle();
		$future_timeline.find('.timeline').slideToggle(400, function(){
			$time_buttons.find('.js_view_present').fadeToggle(400);
		});


	});

	$time_buttons.find('.js_view_present').on('click', function(event) {
		event.preventDefault();
		$future_timeline.removeClass('open').animate({'margin-top': -80}, 100);
		$time_buttons.find('.js_view_present').toggle();
		$future_timeline.find('.timeline').slideToggle(100, function(){

			$time_buttons.find('.js_view_future').fadeToggle(200);

		});
	});

});

