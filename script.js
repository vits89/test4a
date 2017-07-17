$(document).ready(
	function() {
		$('#form').on(
			'submit',
			function(event) {
				event.preventDefault();

				var
					fullNameVal = $(this).find('input[name="full_name"]').val(),
					emailVal = $(this).find('input[name="email"]').val(),
					phoneNumberVal = $(this).find('input[name="phone_number"]').val(),

					submit = $(this).find('input[name="submit"]');

				submit.prop('disabled', true);

				$.post(
					'ajaxRequestHandler.php',
					{
						fullName: fullNameVal,
						email: emailVal,
						phoneNumber: phoneNumberVal
					},
					function(data) {
						var w = window.open('', 'popupWindow', 'width=600, height=400');

						var $w = $(w.document.body);

						$w.html(data);

						location.reload(true);

						return true;
					}
				);

				return true;
			}
		);
	}
);
