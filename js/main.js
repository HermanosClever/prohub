$(document).ready(function() {
	var $formulario, $task, date_text, timestamp_text;

	// Responsive snitch
	$('body._dev').width_snitch({style:{}});

	// External links
	$('.legal a, a.ext').attr('target', '_blank');

	$task = $('.task');

	$task.find('.js_timestamp').each(function(index, el) {
		date_text = $(this).find('.time').attr('datetime');

		timestamp_text = moment( date_text , 'YYYY-MM-DD' ).lang('es').fromNow();
		$(this).append( '<div class="timestamp">' + timestamp_text + '</div>' );


		$(this).find('.time').text( moment( date_text , 'YYYY-MM-DD' ).lang('es').format('dddd D [de] MMMM') );


	});

	// Forms
	/*
	$formulario = $('.formulario');

	$formulario.parsley({
    namespace: 'data-parsley-'
	});


	$formulario.find('.field').on('blur', function(event) {
		event.preventDefault();
		if ( $formulario.parsley('isValid') ){
			$(this).parents('.formulario').find('.submit').removeClass('inactive');
		} else {
			$(this).parents('.formulario').find('.submit').addClass('inactive');
		}
	});
	*/

	// Popups
	/*
	$('.popup_html').magnificPopup({
		type:'inline',
		midClick: true,
		closeOnBgClick: true,
		closeBtnInside: true
	});
	*/

});
