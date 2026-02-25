(function () {

	const supported = ['en','de','es','fr','it','pl','ro','ru','sr'];
	const defaultLang = 'en';
	const storageKey = 'reshagro_lang';

	/* =========================
	   Utilities
	========================= */

	function normalizePath(path) {
		return path.replace(/\/+$/, '') || '/';
	}

	function getBrowserLang() {
		const lang = navigator.language || navigator.userLanguage;
		if (!lang) return null;
		return lang.toLowerCase().split('-')[0];
	}

	function getCurrentLangFromPath() {
		const path = normalizePath(window.location.pathname.toLowerCase());

		if (path === '/') return 'en';

		const segments = path.split('/');
		const maybeLang = segments[1];

		if (supported.includes(maybeLang)) {
			return maybeLang;
		}

		return 'en';
	}

	function buildUrl(lang) {
		return lang === 'en' ? '/' : '/' + lang + '/';
	}

	function redirectTo(lang) {

		if (!supported.includes(lang)) {
			lang = defaultLang;
		}

		const target = normalizePath(buildUrl(lang));
		const current = normalizePath(window.location.pathname);

		if (current !== target) {
			window.location.replace(target);
		}
	}

	/* =========================
	   Auto Language Detection
	========================= */

	function autoDetect() {

		const currentPath = normalizePath(window.location.pathname);
		const saved = localStorage.getItem(storageKey);
		const browserLang = getBrowserLang();
		
		// Проверяем сохранённый язык
		if (saved && supported.includes(saved)) {
			redirectTo(saved);
			return;
		}

		// Определяем по браузеру
		if (browserLang && supported.includes(browserLang)) {
			redirectTo(browserLang);
		} else {
			redirectTo(defaultLang);
		}
	}

	/* =========================
	   Language Switcher UI
	========================= */

	function initLangSwitcher() {

		const switcher = document.querySelector('[data-lang-switcher]');
		if (!switcher) return;

		const toggle = switcher.querySelector('.lang-switcher__toggle');
		const dropdown = switcher.querySelector('.lang-switcher__dropdown');
		const codeEl = switcher.querySelector('.lang-code');
		const flagEl = switcher.querySelector('.lang-flag');
		const items = switcher.querySelectorAll('[data-lang]');

		const currentLang = getCurrentLangFromPath();

		// Обновляем кнопку текущего языка
		codeEl.textContent = currentLang.toUpperCase();

		flagEl.src = currentLang === 'en'
			? '/img/flags/gb.png'
			: '/img/flags/' + currentLang + '.png';

		flagEl.alt = currentLang.toUpperCase();

		/* ===== Dropdown Toggle ===== */

		toggle.addEventListener('click', function (e) {
			e.stopPropagation();
			switcher.classList.toggle('is-open');

			const expanded = switcher.classList.contains('is-open');
			toggle.setAttribute('aria-expanded', expanded);
		});

		// Закрытие при клике вне
		document.addEventListener('click', function () {
			switcher.classList.remove('is-open');
			toggle.setAttribute('aria-expanded', 'false');
		});

		// Не закрывать при клике внутри dropdown
		dropdown.addEventListener('click', function (e) {
			e.stopPropagation();
		});

		// Закрытие по Escape
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') {
				switcher.classList.remove('is-open');
				toggle.setAttribute('aria-expanded', 'false');
			}
		});

		/* ===== Language Selection ===== */

		items.forEach(function (item) {

			const lang = item.getAttribute('data-lang');

			// Можно добавить активный класс текущему
			if (lang === currentLang) {
				item.classList.add('is-active');
			}

			item.addEventListener('click', function () {

				if (!supported.includes(lang)) return;

				localStorage.setItem(storageKey, lang);
				redirectTo(lang);
			});
		});
	}

	/* ========================= */

	document.addEventListener('DOMContentLoaded', function () {
		autoDetect();
		initLangSwitcher();
	});

})();