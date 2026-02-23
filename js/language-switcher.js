(function () {

	const switcher = document.querySelector('[data-lang-switcher]');
	if (!switcher) return;

	const toggle = switcher.querySelector('.lang-switcher__toggle');
	const dropdown = switcher.querySelector('.lang-switcher__dropdown');
	const items = switcher.querySelectorAll('li');

	/* ===== Определяем текущий язык по URL ===== */
	function getCurrentLang() {
		const path = window.location.pathname.split('/')[1];
		const available = ['en','de','fr','it','es','pl','ro','sr','ru'];
		return available.includes(path) ? path : 'ru';
	}

	function updateCurrentLangUI() {
		const current = getCurrentLang();
		const activeItem = switcher.querySelector(`li[data-lang="${current}"]`);
		if (!activeItem) return;

		const code = activeItem.dataset.lang.toUpperCase();
		const flag = activeItem.dataset.flag;

		toggle.querySelector('.lang-code').textContent = code;
		toggle.querySelector('.lang-flag').textContent = flag;
	}

	updateCurrentLangUI();

	/* ===== Toggle dropdown ===== */
	toggle.addEventListener('click', function (e) {
		e.stopPropagation();
		switcher.classList.toggle('open');
		toggle.setAttribute(
			'aria-expanded',
			switcher.classList.contains('open')
		);
	});

	/* ===== Закрытие при клике вне ===== */
	document.addEventListener('click', function () {
		switcher.classList.remove('open');
		toggle.setAttribute('aria-expanded', 'false');
	});

	/* ===== Переход на язык ===== */
	items.forEach(function (item) {
		item.addEventListener('click', function () {

			const lang = this.dataset.lang;
			const currentPath = window.location.pathname;

			const segments = currentPath.split('/').filter(Boolean);

			const available = ['en','de','fr','it','es','pl','ro','sr','ru'];

			if (segments.length && available.includes(segments[0])) {
				segments[0] = lang;
			} else {
				segments.unshift(lang);
			}

			const newPath = '/' + segments.join('/');

			window.location.href = newPath + window.location.search;
		});
	});

})();