$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 800) {
					document.getElementsByClassName('sideInfo')[0].style.display = 'block';
				} else {
					document.getElementsByClassName('sideInfo')[0].style.display = 'none';
				}
			});

			// Animate the scroll to top
			$('.tothetop').click(function(event) {
				event.preventDefault();

				$('html, body').animate({scrollTop: 920}, 500);
			})
		});
