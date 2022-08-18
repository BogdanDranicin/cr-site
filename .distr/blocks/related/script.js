const swiper = new Swiper('.related-swiper', {
	// Default parameters
	loop:false,
	slidesPerView: 2,
	spaceBetween: 31,
	slidesPerGroup: 2,
	// Responsive breakpoints
	breakpoints: {
	  // when window width is >= 320px
	  320: {
		slidesPerView: 2,
		spaceBetween: 31
	  }
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	  },
})