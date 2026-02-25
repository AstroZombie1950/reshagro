<?php
session_start();

$a = rand(1, 9);
$b = rand(1, 9);
$_SESSION['captcha_answer'] = $a + $b;

$_SESSION['form_time'] = time();
?>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tornitura e Fresatura CNC su Disegno | Produzione di Componenti Meccanici | Reshagro Engineering Center</title>
	<meta name="description" content="Servizi di tornitura e fresatura CNC per componenti in metallo e plastica. Produzione su disegno tecnico, prototipi e serie, consulenza ingegneristica. Operiamo in tutta Europa.">
	<meta name="keywords" content="tornitura CNC, fresatura CNC, lavorazioni meccaniche conto terzi, produzione componenti meccanici, lavorazioni di precisione, prototipazione, produzione in serie">
	<meta name="author" content="Reshagro Engineering Center">
	<meta name="robots" content="index, follow">
	<meta name="theme-color" content="#0e5fa8">
	<!-- Canonical -->
	<link rel="canonical" href="https://reshagro.com/it/">
	<!-- Hreflang -->
	<link rel="alternate" hreflang="ru" href="https://reshagro.com/ru/">
	<link rel="alternate" hreflang="de" href="https://reshagro.com/de/">
	<link rel="alternate" hreflang="fr" href="https://reshagro.com/fr/">
	<link rel="alternate" hreflang="it" href="https://reshagro.com/it/">
	<link rel="alternate" hreflang="es" href="https://reshagro.com/es/">
	<link rel="alternate" hreflang="pl" href="https://reshagro.com/pl/">
	<link rel="alternate" hreflang="ro" href="https://reshagro.com/ro/">
	<link rel="alternate" hreflang="sr" href="https://reshagro.com/sr/">
	<link rel="alternate" hreflang="x-default" href="https://reshagro.com/">
	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Tornitura e Fresatura CNC | Reshagro">
	<meta property="og:description" content="Lavorazioni CNC di alta precisione su disegno tecnico. Produzione di prototipi e serie.">
	<meta property="og:url" content="https://reshagro.com/it/">
	<meta property="og:image" content="https://reshagro.com/img/logo_ogimg.png">
	<meta property="og:locale" content="it_IT">
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Tornitura e Fresatura CNC | Reshagro">
	<meta name="twitter:description" content="Lavorazioni meccaniche CNC di precisione per componenti metallici e plastici.">
	<meta name="twitter:image" content="https://reshagro.com/img/logo_ogimg.png">
	<!-- Favicon -->
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<!-- header -->
	<header class="header" id="header">
		<div class="container">
			<div class="header__inner">
				<a href="/" class="logo">
					<img 
						src="/img/logo_border.png" 
						alt="Reshagro Engineering Center"
						loading="eager"
					>
				</a>
				<nav class="nav" id="nav">
					<a href="#about" class="nav__link">Chi Siamo</a>
					<a href="#equipment" class="nav__link">Attrezzature</a>
					<a href="#services" class="nav__link">Servizi</a>
					<a href="#projects" class="nav__link">I Nostri Progetti</a>
					<button class="btn btn-primary btn-nav" id="openModal">Richiedi un Preventivo</button>
				</nav>
				<div class="header__actions">
					<div class="lang-switcher" data-lang-switcher>
						<button class="lang-switcher__toggle" type="button" aria-expanded="false">
							<img class="lang-flag" src="/img/flags/ru.png" alt="IT" width="10" height="10">
							<span class="lang-code">IT</span>
							<svg class="lang-arrow" viewBox="0 0 24 24">
								<path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"/>
							</svg>
						</button>
						<ul class="lang-switcher__dropdown">
							<li data-lang="en"><img src="/img/flags/gb.png" alt="EN" width="10" height="10">EN</li>
							<li data-lang="de"><img src="/img/flags/de.png" alt="DE" width="10" height="10">DE</li>
							<li data-lang="fr"><img src="/img/flags/fr.png" alt="FR" width="10" height="10">FR</li>
							<li data-lang="it"><img src="/img/flags/it.png" alt="IT" width="10" height="10">IT</li>
							<li data-lang="es"><img src="/img/flags/es.png" alt="ES" width="10" height="10">ES</li>
							<li data-lang="pl"><img src="/img/flags/pl.png" alt="PL" width="10" height="10">PL</li>
							<li data-lang="ro"><img src="/img/flags/ro.png" alt="RO" width="10" height="10">RO</li>
							<li data-lang="sr"><img src="/img/flags/sr.png" alt="SR" width="10" height="10">SR</li>
							<li data-lang="ru"><img src="/img/flags/ru.png" alt="RU" width="10" height="10">RU</li>
						</ul>
					</div>
					<div class="burger" id="burger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<button class="btn btn-primary btn-head" id="openModal">Richiedi un Preventivo</button>
			</div>
		</div>
	</header>
	<!-- hero -->
	<section class="hero" id="about">
		<div class="hero__overlay"></div>
		<div class="container">
			<div class="hero__content hero__content--animate">
				<h1 class="hero__title">Lavorazioni di tornitura e fresatura metalli su commessa</h1>
				<div class="hero__underline"></div>
				<p class="hero__text">Reshagro offre ai propri clienti servizi di fresatura metalli su commessa.<br>Presso i nostri stabilimenti produttivi disponiamo di macchine utensili universali e centri di lavoro CNC per operazioni di fresatura. Eseguiamo fresatura orizzontale e verticale con precisione fino alla 6ª classe di tolleranza. Lavoriamo acciai al carbonio, metalli non ferrosi e acciai inossidabili. Lavorazioni meccaniche di alta precisione di componenti su disegno tecnico. Produzione in serie e su pezzo singolo per aziende e clienti privati.</p>
			</div>
		</div>
	</section>
	<!-- adv -->
	<section class="stats stats--animate">
		<div class="container">
			<div class="stats__grid">
				<div class="stats__card">
					<img src="/img/adv/one.png" alt="">
					<div class="stats__overlay"></div>
					<div class="stats__content">
						<p class="stats__label">Operativi dal</p>
						<h3>2018</h3>
					</div>
				</div>
				<div class="stats__card">
					<img src="/img/adv/two.png" alt="">
					<div class="stats__overlay"></div>
					<div class="stats__content">
						<p class="stats__label">Esperienza media dei tecnici</p>
						<h3>15 ANNI</h3>
					</div>
				</div>
				<div class="stats__card">
					<img src="/img/adv/three.png" alt="">
					<div class="stats__overlay"></div>
					<div class="stats__content">
						<p class="stats__label">Diventano clienti abituali</p>
						<h3>75% DEI CLIENTI</h3>
					</div>
				</div>
				<div class="stats__card">
					<img src="/img/adv/four.png" alt="">
					<div class="stats__overlay"></div>
					<div class="stats__content">
						<p class="stats__label">Disponiamo di oltre</p>
						<h3>45 MACCHINE</h3>
					</div>
				</div>
				<div class="stats__card">
					<img src="/img/adv/five.png" alt="">
					<div class="stats__overlay"></div>
					<div class="stats__content">
						<p class="stats__label">Completati oltre</p>
						<h3>1000 ORDINI</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- equip -->
	<section class="equipment reveal" id="equipment">
		<!-- Верхняя тёмная шапка -->
		<div class="equipment__header">
			<div class="container_eq">
				<h2 class="equipment__heading">ATTREZZATURE</h2>
			</div>
		</div>
		<!-- Голубая полоса со слайдером -->
		<div class="equipment__slider-wrap">
			<div class="container">
				<div class="equipment-slider">
					<div class="equipment-text">
						<h3 class="equipment-title"></h3>
					</div>
					<div class="equipment-visual">
						<button class="equipment-arrow prev" type="button">&#8592;</button>
						<div class="equipment-viewport">
							<div class="equipment-track">
								<div class="equipment-slide">
									<img src="/img/equip/jsl_20ab.png" alt="JSL 20AB">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/508my.png" alt="IronMac 508MY">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/cmx_50.png" alt="CMX 50">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/cmx_70.png" alt="CMX 70">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/ctx_310_sec.png" alt="CTX 310">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/ctx_310.png" alt="CTX 310">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/dmu_50.png" alt="DMU 50">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/gt_45.png" alt="GT 45">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/qtn_100.png" alt="MAZAK QTN 100">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/qtn_200.png" alt="MAZAK QTN 200">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/spectr_200.png" alt="SPECTR 200">
								</div>

								<div class="equipment-slide">
									<img src="/img/equip/vf_108.png" alt="SKY MASTER VF 108">
								</div>
							</div>
						</div>
						<button class="equipment-arrow next" type="button">&#8594;</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Нижний блок с текстом -->
		<div class="equipment__content">
			<div class="container equipment__content-inner">
				<div class="equipment__text">
					<h3>
						PRODUZIONE SECONDO I VOSTRI DISEGNI<br>
						O CAMPIONI
					</h3>
					<p>
						Potete fornirci un componente metallico e richiedere la realizzazione di un duplicato.
						Effettueremo tutte le misurazioni necessarie, svilupperemo il disegno tecnico e produrremo il componente richiesto.
					</p>
				</div>
				<div class="equipment__cta">
					<button class="btn btn-primary">Calcolo del<br>COSTO DELL’ORDINE</button>
				</div>
			</div>
		</div>
	</section>
	<!-- ================= services ================= -->
	<section class="services services--animate reveal" id="services">
		<div class="container">
			<h2 class="services__title">SERVIZI</h2>
			<div class="services__grid">
				<div class="service-card service-card--1">
					<div class="service-card__bg"></div>
					<h3>Lavorazioni di tornitura e fresatura di metalli e materie plastiche</h3>
					<p>Lavorazioni meccaniche di alta precisione su macchinari moderni.</p>
					<button class="btn btn-primary">da 10 € / pz.</button>
				</div>
				<div class="service-card service-card--2">
					<div class="service-card__bg"></div>
					<h3>Produzione di componenti su commessa secondo disegno</h3>
					<p>Realizzazione secondo vostre specifiche tecniche e campioni.</p>
					<button class="btn btn-primary">da 5 € / pz.</button>
				</div>
				<div class="service-card service-card--3">
					<div class="service-card__bg"></div>
					<h3>Produzione in serie e su pezzo singolo</h3>
					<p>Fabbricazione di lotti di qualsiasi volume.</p>
					<button class="btn btn-primary">da 15 € / pz.</button>
				</div>
				<div class="service-card service-card--4">
					<div class="service-card__bg"></div>
					<h3>Consulenza ingegneristica e tecnologica</h3>
					<p>Selezione delle soluzioni ottimali e supporto di progetto.</p>
					<button class="btn btn-primary">da 12 € / pz.</button>
				</div>
				<div class="service-card service-card--5">
					<div class="service-card__bg"></div>
					<h3>Assemblaggio e lavorazioni secondarie</h3>
					<p>Lavorazioni complete e preparazione dei componenti.</p>
					<button class="btn btn-primary">da 8 € / pz.</button>
				</div>
				<div class="service-card--6">
					<div class="service-card__bg"></div>
					<h3>Ordini personalizzati</h3>
					<p>Sviluppo e realizzazione di soluzioni su misura.</p>
					<button class="btn btn-primary">Contattaci</button>
				</div>
			</div>
		</div>
	</section>
	<!-- ================= project types ================= -->
	<section class="work-types ba-block reveal">
		<div class="container">
			<div class="work-types__grid">
				<div class="work-types__content">
					<h2 class="t30 fw7 mb2">Tipologie di lavorazioni di fresatura</h2>
					<p class="t16 mb3">Le lavorazioni di fresatura sono utilizzate per la lavorazione di diverse superfici e per l’esecuzione di un’ampia gamma di operazioni:</p>
					<ul class="work-types__list mb3">
						<li>Lavorazione di superfici piane;</li>
						<li>Realizzazione di scanalature e cave;</li>
						<li>Produzione di spallamenti;</li>
						<li>Formatura di superfici sagomate;</li>
						<li>Filettatura;</li>
						<li>Produzione di ingranaggi.</li>
					</ul>
					<p class="t16 mb2">Per l’esecuzione di queste operazioni si utilizzano diversi tipi di frese:</p>
					<ol class="work-types__list work-types__list--numbered">
						<li><strong>Cilindriche</strong> — per la lavorazione di superfici piane;</li>
						<li><strong>Frontali</strong> — per la fresatura di superfici e spallamenti;</li>
						<li><strong>A disco</strong> — per la realizzazione di cave e il taglio del metallo;</li>
						<li><strong>A candela</strong> — tipo universale per diverse operazioni;</li>
						<li><strong>Angolari</strong> — per la lavorazione di superfici inclinate;</li>
						<li><strong>Profilate</strong> — per la creazione di superfici complesse.</li>
					</ol>
					<p class="t16 mb2">La scelta del tipo di fresa dipende direttamente dalla natura delle lavorazioni e dalla precisione richiesta.</p>
				</div>
				<div class="work-types__video">
					<div class="video-wrapper">
						<video 
							src="/img/work_types_vid.mp4"
							controls
							preload="metadata"
						></video>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================= our projects ================= -->
	<section class="projects ba-block reveal" id="projects">
		<div class="container">
			<h2 class="t30 fw7 mb3">I Nostri Progetti</h2>
			<!-- ===== Desktop Slider ===== -->
			<div class="projects-slider">
				<button class="projects-arrow projects-arrow--prev" aria-label="Indietro">
					<svg viewBox="0 0 24 24" width="28" height="28">
						<path d="M15 6l-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2"/>
					</svg>
				</button>
				<div class="projects-viewport">
					<div class="projects-track">
						<!-- Page 1 -->
						<div class="projects-page">
							<div class="projects-item"><img src="/img/projects/1.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/2.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/3.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/4.webp" alt=""></div>
						</div>
						<!-- Page 2 -->
						<div class="projects-page">
							<div class="projects-item"><img src="/img/projects/5.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/6.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/7.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/8.webp" alt=""></div>
						</div>
						<!-- Page 3 -->
						<div class="projects-page">
							<div class="projects-item"><img src="/img/projects/9.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/10.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/11.webp" alt=""></div>
							<div class="projects-item"><img src="/img/projects/12.webp" alt=""></div>
						</div>

					</div>
				</div>
				<button class="projects-arrow projects-arrow--next" aria-label="Avanti">
					<svg viewBox="0 0 24 24" width="28" height="28">
						<path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2"/>
					</svg>
				</button>
			</div>
			<div class="projects-dots"></div>
			<!-- ===== Mobile Grid ===== -->
			<div class="projects-grid">
				<div class="projects-item"><img src="/img/projects/1.webp" alt=""></div>
				<div class="projects-item"><img src="/img/projects/2.webp" alt=""></div>
				<div class="projects-item"><img src="/img/projects/3.webp" alt=""></div>
				<div class="projects-item"><img src="/img/projects/4.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/5.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/6.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/7.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/8.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/9.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/10.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/11.webp" alt=""></div>
				<div class="projects-item projects-hidden"><img src="/img/projects/12.webp" alt=""></div>
			</div>
			<button class="projects-more-btn">
				Tutti i progetti
			</button>
		</div>
	</section>
	<!-- ================= cta ================= -->
	<section class="contact reveal">
		<div class="container">
			<h2 class="section-title contact__title">Invia il progetto per un preventivo</h2>
			<form id="projectForm" class="contact-form" enctype="multipart/form-data">
				<div class="contact-form__content">
					<div class="contact-form__row">
						<input type="text" name="name" placeholder="Nome" requiredpattern="^[A-Za-zА-Яа-яЁё\s]+$">
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div class="contact-form__upload">
						<label class="upload-box">
							<input type="file" name="files[]" multiple hidden accept=".zip,.jpg,.jpeg,.png,.docx,.xlsx,.pdf,.dxf,.dwg">
							<div class="upload-icon">
								<svg width="48" height="48" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M12 16V4M12 4L8 8M12 4L16 8"
										stroke="white" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M4 16V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V16"
										stroke="white" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="upload-text">
								<p class="upload-title">Aggiungi il disegno tecnico</p>
								<p class="upload-sub">Clicca per selezionare il file</p>
							</div>
						</label>
						<div class="file-list"></div>
						<div class="warning">
							<p class="warning-text">È possibile caricare fino a 10 file.</p>
						</div>
					</div>
					<textarea name="message" placeholder="Descrivi materiale, volume, quantità e dettagli"></textarea>
					<div class="contact-form__captcha">
						<label>Quanto fa <?php echo $a; ?> + <?php echo $b; ?>?</label>
						<input type="number" name="captcha" required>
					</div>
					<!-- Honeypot -->
					<input type="text" name="company" style="display:none"autocomplete="off">
					<button type="submit">Invia</button>
				</div>
				<div class="form-alert"></div>
			</form>
		</div>
	</section>
	<!-- ================= footer ================= -->
	<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-links">
					<div class="footer-col">
						<a class="footer-title">
							Contatti
						</a>
						<div class="footer-sub">
							<p class="footer-label">Sede legale e operativa</p>
							<p>11073 Beograd, Jurija Gagarina str, build 231, local 329, Serbia</p>
							<p class="footer-label">Email</p>
							<p>
								<a href="mailto:info@reshagro.com">contact@reshagro.com</a>
							</p>
						</div>
					</div>
					<div class="footer-col">
						<a href="#about" class="footer-title">
							Chi Siamo
						</a>
					</div>
					<div class="footer-col">
						<a href="#equipment" class="footer-title">
							Attrezzature
						</a>
					</div>
					<div class="footer-col">
						<a href="#services" class="footer-title">
							Servizi
						</a>
					</div>
					<div class="footer-col">
						<a href="#projects" class="footer-title">
							I Nostri Progetti
						</a>
					</div>
				</div>
				<div class="footer-logo">
					<img src="/img/logo.png" alt="Reshagro Engineering Center">
				</div>
			</div>
		</div>
	</footer>
	<!-- ================= modal ================= -->
	<div class="rg-modal" id="projectModal" aria-hidden="true">
		<div class="rg-modal__overlay"></div>
		<div class="rg-modal__window" role="dialog" aria-modal="true">
			<button class="rg-modal__close" data-modal-close></button>
			<h3 class="rg-modal__title">Richiedi un Preventivo</h3>
			<p class="modal_desc">Inviaci i dettagli del progetto e prepareremo un preventivo nel più breve tempo possibile</p>
			<form id="projectFormModal" class="contact-form contact-form--modal" enctype="multipart/form-data">
				<div class="contact-form__content-modal">
					<div class="contact-form__row-modal">
						<input type="text" name="name" placeholder="Nome" required pattern="^[A-Za-zА-Яа-яЁё\s]+$">
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<textarea class="text_modal" name="message" placeholder="Descrivi brevemente il progetto"></textarea>
					<div class="contact-form__upload">
						<label class="upload-box">
							<input type="file" name="files[]" multiple hidden accept=".zip,.jpg,.jpeg,.png,.docx,.xlsx,.pdf,.dxf,.dwg">
							<div class="upload-icon">
								<img src="/img/upload.svg" alt="Caricamento file" width="48" height="48">
							</div>
							<div class="upload-text">
								<p class="upload-title">Aggiungi il disegno tecnico</p>
								<p class="upload-sub">Clicca per selezionare il file</p>
							</div>
						</label>
						<div class="file-list"></div>
						<div class="warning">
							<p class="warning-text">È possibile caricare fino a 10 file.</p>
						</div>
					</div>
					<div class="contact-form__captcha-modal">
						<label>Quanto fa <?php echo $a; ?> + <?php echo $b; ?>?</label>
						<input type="number" name="captcha" required>
					</div>
					<input type="text" name="company" style="display:none" autocomplete="off">
					<button class="modal_submit_btn" type="submit">Invia</button>
				</div>
				<div class="form-alert-modal"></div>
			</form>
		</div>
	</div>
	<script>
	const ReshagroModal = (function() {

		let modal, body, scrollY;

		/* ===== Тексты модального окна ===== */

		const modalContent = {
			default: {
				title: 'Richiedi un Preventivo',
				desc: 'Inviaci i dettagli del progetto e prepareremo un preventivo nel più breve tempo possibile'
			},
			auto: {
				title: 'Hai domande?',
				desc: 'Lascia una richiesta e ti forniremo una consulenza gratuita'
			}
		};

		function setContent(type) {
			const titleEl = modal.querySelector('.rg-modal__title');
			const descEl = modal.querySelector('.modal_desc');

			titleEl.textContent = modalContent[type].title;
			descEl.textContent = modalContent[type].desc;
		}

		/* ===== Открытие ===== */

		function open(type = 'default') {

			setContent(type);

			scrollY = window.scrollY;
			body.style.top = `-${scrollY}px`;
			body.classList.add('modal-lock');
			modal.classList.add('is-open');
			modal.setAttribute('aria-hidden', 'false');
		}

		/* ===== Закрытие ===== */

		function close() {
			modal.classList.remove('is-open');
			modal.setAttribute('aria-hidden', 'true');
			body.classList.remove('modal-lock');
			body.style.top = '';
			window.scrollTo(0, scrollY);
		}

		/* ===== Кнопки открытия ===== */

		function bindTriggers() {
			document.querySelectorAll('#openModal, .btn-head, .btn-primary')
				.forEach(btn => {
					btn.addEventListener('click', () => open('default'));
				});
		}

		/* ===== Закрытие ===== */

		function bindClose() {

			modal.addEventListener('click', function(e) {
				if (e.target.hasAttribute('data-modal-close')) {
					close();
				}
			});

			document.addEventListener('keydown', function(e) {
				if (e.key === 'Escape') close();
			});
		}

		/* ===== Авто-открытие через 60 сек ===== */

		function autoOpen() {

			if (sessionStorage.getItem('rgFormSubmitted')) return;

			setTimeout(() => {

				if (!sessionStorage.getItem('rgFormSubmitted')) {
					open('auto');
				}

			}, 60000);//<------------таймаут открытия (мс)

		}

		/* ===== Отслеживание отправки формы ===== */

		function watchSuccess() {

			const alerts = document.querySelectorAll('.form-alert, .form-alert-modal');

			alerts.forEach(alert => {

				const observer = new MutationObserver(() => {

					if (alert.textContent.trim().length > 0) {
						sessionStorage.setItem('rgFormSubmitted', '1');
					}

				});

				observer.observe(alert, { childList: true });

			});
		}

		function init() {

			modal = document.getElementById('projectModal');
			body = document.body;

			if (!modal) return;

			bindTriggers();
			bindClose();
			autoOpen();
			watchSuccess();
		}

		return { init };

	})();

	document.addEventListener('DOMContentLoaded', ReshagroModal.init);
	</script>
	<script src="/js/language-switcher.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/modal.js"></script>
	<script src="/js/form.js"></script>
</body>
</html>