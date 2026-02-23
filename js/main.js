// ================= HEADER SCROLL =================

window.addEventListener("scroll", () => {
	const header = document.getElementById("header");

	if (window.scrollY > 80) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
});

// ================= Reveal Animation =================

function initReveal() {
	const elements = document.querySelectorAll('.reveal');

	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				observer.unobserve(entry.target); // один раз анимируем
			}
		});
	}, {
		threshold: 0.15
	});

	elements.forEach(el => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', initReveal);

// ================= BURGER =================

const burger = document.getElementById("burger");
const nav = document.getElementById("nav");
const body = document.body;

function openMenu() {
	burger.classList.add("active");
	nav.classList.add("active");
	body.classList.add("menu-open");
}

function closeMenu() {
	burger.classList.remove("active");
	nav.classList.remove("active");
	body.classList.remove("menu-open");
}

burger.addEventListener("click", () => {
	if (nav.classList.contains("active")) {
		closeMenu();
	} else {
		openMenu();
	}
});

// Закрытие по ESC
document.addEventListener("keydown", (e) => {
	if (e.key === "Escape") {
		closeMenu();
	}
});

// Закрытие по клику на ссылку
document.querySelectorAll(".nav__link").forEach(link => {
	link.addEventListener("click", closeMenu);
});

// Закрытие по клику кнопку
document.querySelectorAll(".btn-nav").forEach(link => {
	link.addEventListener("click", closeMenu);
});


// ================= SMOOTH SCROLL =================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		const target = document.querySelector(this.getAttribute("href"));
		if (target) {
			target.scrollIntoView({ behavior: "smooth" });
		}
	});
});


// ================= STATS ANIMATION =================

const statsSection = document.querySelector(".stats--animate");

if (statsSection) {
	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add("visible");
				observer.unobserve(entry.target);
			}
		});
	}, {
		threshold: 0.2
	});

	observer.observe(statsSection);
}

// ================= Equipment Slider =================

function initEquipmentSlider() {
	const slider = document.querySelector('.equipment-slider');
	if (!slider) return;

	const track = slider.querySelector('.equipment-track');
	const slides = slider.querySelectorAll('.equipment-slide');
	const prevBtn = slider.querySelector('.equipment-arrow.prev');
	const nextBtn = slider.querySelector('.equipment-arrow.next');
	const titleEl = slider.querySelector('.equipment-title');
	const viewport = slider.querySelector('.equipment-viewport');

	if (!slides.length) return;

	const titles = [
		"Станок токарно-фрезерный JSL 20AB",
		"Токарно-фрезерный станок IronMac 508MY",
		"Станок фрезерный (3+2) CMX 50",
		"Станок фрезерный (3+2) CMX 70",
		"Токарно-фрезерный станок CTX 310",
		"Станок токарно-фрезерный CTX 310",
		"Станок фрезерный (3+2) DMU 50",
		"Станок токарно-фрезерный GT 45",
		"Станок токарно-фрезерный MAZAK QTN 100",
		"Станок токарно-фрезерный MAZAK QTN 200",
		"Станок токарно-фрезерный SPECTR 200",
		"Станок фрезерный SKY MASTER VF 108"
	];

	let currentIndex = 0;
	let isMobile = window.matchMedia('(max-width: 768px)').matches;

	function getSlideWidth() {
		return viewport.offsetWidth;
	}

	function updateTitle(index) {
		titleEl.style.opacity = 0;

		setTimeout(() => {
			titleEl.textContent = titles[index];
			titleEl.style.opacity = 1;
		}, 200);
	}

	function moveTo(index) {
		const width = getSlideWidth();
		track.style.transform = `translateX(-${width * index}px)`;
		updateTitle(index);
		currentIndex = index;
	}

	// ================= INIT =================

	titleEl.textContent = titles[0];

	if (!isMobile) {
		moveTo(0);
	}

	// ================= DESKTOP =================

	if (!isMobile && prevBtn && nextBtn) {

		nextBtn.addEventListener('click', () => {
			currentIndex = (currentIndex + 1) % slides.length;
			moveTo(currentIndex);
		});

		prevBtn.addEventListener('click', () => {
			currentIndex =
				(currentIndex - 1 + slides.length) % slides.length;
			moveTo(currentIndex);
		});
	}

	// ================= MOBILE =================

	if (isMobile) {

		viewport.addEventListener('scroll', () => {

			const slideWidth = viewport.offsetWidth;
			const index = Math.round(viewport.scrollLeft / slideWidth);

			if (index !== currentIndex && titles[index]) {
				currentIndex = index;
				updateTitle(index);
			}
		});
	}

	// ================= RESIZE =================

	window.addEventListener('resize', () => {

		const nowMobile = window.matchMedia('(max-width: 768px)').matches;

		// если режим поменялся — перезапускаем логику
		if (nowMobile !== isMobile) {
			location.reload();
			return;
		}

		if (!nowMobile) {
			moveTo(currentIndex);
		}
	});
}

document.addEventListener('DOMContentLoaded', initEquipmentSlider);


/* ================= Projects Slider ================= */

const slider = document.querySelector('.projects-slider');

if (slider && window.innerWidth > 992) {

	const track = document.querySelector('.projects-track');
	const pages = document.querySelectorAll('.projects-page');
	const prevBtn = document.querySelector('.projects-arrow--prev');
	const nextBtn = document.querySelector('.projects-arrow--next');
	const dotsContainer = document.querySelector('.projects-dots');

	let currentPage = 0;
	const totalPages = pages.length;

	function updateSlider() {
		track.style.transform = `translateX(-${currentPage * 100}%)`;

		prevBtn.disabled = currentPage === 0;
		nextBtn.disabled = currentPage === totalPages - 1;

		document.querySelectorAll('.projects-dot').forEach((dot, index) => {
			dot.classList.toggle('active', index === currentPage);
		});
	}

	if (dotsContainer) {
		for (let i = 0; i < totalPages; i++) {
			const dot = document.createElement('div');
			dot.classList.add('projects-dot');
			dot.addEventListener('click', () => {
				currentPage = i;
				updateSlider();
			});
			dotsContainer.appendChild(dot);
		}
	}

	prevBtn.addEventListener('click', () => {
		if (currentPage > 0) {
			currentPage--;
			updateSlider();
		}
	});

	nextBtn.addEventListener('click', () => {
		if (currentPage < totalPages - 1) {
			currentPage++;
			updateSlider();
		}
	});

	updateSlider();
}

/* ================= Mobile Projects Expand ================= */

document.addEventListener('DOMContentLoaded', () => {

	const moreBtn = document.querySelector('.projects-more-btn');
	const grid = document.querySelector('.projects-grid');

	if (!moreBtn || !grid) return;

	moreBtn.addEventListener('click', () => {

		grid.classList.toggle('is-open');

		moreBtn.textContent =
			grid.classList.contains('is-open')
			? 'Скрыть'
			: 'Все работы';
	});
});