const swiperIndex = new Swiper(".SwiperIndex", {
	effect: "flip",
	grabCursor: true,
	direction: "horizontal",
	loop: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});

const swiperIndexRes = new Swiper(".SwiperIndexRes", {
	effect: "coverflow",
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: "auto",
	coverflowEffect: {
		rotate: 50,
		stretch: 0,
		depth: 100,
		modifier: 1,
		slideShadows: true,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});

const swiperDetails = new Swiper(".SwiperDetails", {
	effect: "flip",
	grabCursor: true,
	direction: "horizontal",
	loop: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});
