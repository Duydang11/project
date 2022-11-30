const navbarMenu = document.getElementById('navbar');
const burgerMenu = document.getElementById('burger');
const overlayMenu = document.getElementById('overlay');

// Toggle Menu Function
burgerMenu.addEventListener('click', toggleMenu);
overlayMenu.addEventListener('click', toggleMenu);

function toggleMenu() {
	navbarMenu.classList.toggle('active');
	overlayMenu.classList.toggle('active');
}

// Collapse SubMenu Function
navbarMenu.addEventListener('click', (e) => {
	if (e.target.hasAttribute('data-toggle') && window.innerWidth <= 992) {
		e.preventDefault();
		const menuItemHasChildren = e.target.parentElement;

		// If menu-item-child is Expanded, then Collapse It
		if (menuItemHasChildren.classList.contains('active')) {
			collapseSubMenu();
		} else {
			// Collapse the Existing Expanded menu-item-child
			if (navbarMenu.querySelector('.menu-item-child.active')) {
				collapseSubMenu();
			}
			// Expanded the New menu-item-child
			menuItemHasChildren.classList.add('active');
			const subMenu = menuItemHasChildren.querySelector('.sub-menu');
			subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
		}
	}
});

function collapseSubMenu() {
	navbarMenu.querySelector('.menu-item-child.active .sub-menu').removeAttribute('style');
	navbarMenu.querySelector('.menu-item-child.active').classList.remove('active');
}

// Fixed Resize Screen Function
window.addEventListener('resize', () => {
	if (this.innerWidth > 992) {
		// If navbarMenu is Open, then Close It
		if (navbarMenu.classList.contains('active')) {
			toggleMenu();
		}

		// If menu-item-child is Expanded, then Collapse It
		if (navbarMenu.querySelector('.menu-item-child.active')) {
			collapseSubMenu();
		}
	}
});
function openSearch() {
	document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
	document.getElementById("myOverlay").style.display = "none";
}

$(function () {
	// owl carousel script starts
	if ($("#main-banner-carousel").length) {
		$("#main-banner-carousel").owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplaySpeed: 2000,
			autoplayHoverPause: true,
			autoWidth: false,
			dots: true,
			margin: 0,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				},
				320: {
					items: 1
				}
			}
		});
	}


	var owl = $('#testimonial-carousel');
	owl.owlCarousel({
		loop: true,
		nav: true,
		margin: 10,
		responsive: {
			0: {
				items: 1
			},
			300: {
				items: 1
			},
			960: {
				items: 1
			},
			1200: {
				items: 1
			}
		}
	});
	owl.on('mousewheel', '.owl-stage', function (e) {
		if (e.deltaY > 0) {
			owl.trigger('next.owl');
		} else {
			owl.trigger('prev.owl');
		}
		e.preventDefault();
	});


});
// sticky jss
var stickyEl = new Sticksy('.widget-right', {topSpacing: 60});

