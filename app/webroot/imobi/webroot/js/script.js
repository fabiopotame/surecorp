$(document).ready(function() {
	if($('.min-height-window').length > 0) {
		$('body').css({
			height: $(window).outerHeight()
		})
	}
	$('form').submit(function(e) {
		var button = $(this).find('button');
		var width = button.outerWidth();
		button.css('width', width).attr('type', 'button').html('<img src="'+webroot+'img/ajax-loader.gif">');
	});
	$('input[type="password"]').password(
	{
		message: 'Revelar a senha'
	}).on('show.bs.password', function(e) {
		$('#methods').prop('checked', true);
	}).on('hide.bs.password', function(e) {
		$('#methods').prop('checked', false);
	});
	$('#methods').click(function() {
		$('#password').password('toggle');
	});
	$('.add-on.input-group-addon').tooltip();

	// MASKS
	$('.date').mask('00/00/0000');
	$('.time').mask('00:00:00');
	$('.date_time').mask('00/00/0000 00:00:00');
	$('.cep').mask('00000-000');
	$('.phone').mask('0000-0000');
	$('.phone_with_ddd').mask('(00) 0000-0000#');
	$('.phone_us').mask('(000) 000-0000');
	$('.mixed').mask('AAA 000-S0S');
	$('.cpf').mask('000.000.000-00');
	$('.cnpj').mask('00.000.000/0000-00');
	$('.money').mask('000.000.000.000.000,00', {reverse: true});
	$('.money2').mask("#.##0,00", {reverse: true});
	$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
		translation: {
			'Z': {
				pattern: /[0-9]/, optional: true
			}
		}
	});
	$('.ip_address').mask('099.099.099.099');
	$('.percent').mask('##0,00%', {reverse: true});
	$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
	$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
	$('.fallback').mask("00r00r0000", {
		translation: {
			'r': {
				pattern: /[\/]/,
				fallback: '/'
			},
			placeholder: "__/__/____"
		}
	});
	$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

	setTimeout(function() {
		$('div.message').fadeOut(function() {
			$(this).addClass('hidden');
		});
	}, 5000);
	$('[data-toggle="tooltip"]').tooltip();
});


