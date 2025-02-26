<!DOCTYPE html>
<html>

<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
    <title>Rostiljada</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <header class="nav__wrap">
        <div class="layout--main">
            <div class="nav">
                <a href="index.html">
                    <div class="nav__logo">
                        <span>studentska</span> roštiljada
                    </div>
                </a>
                <div class="nav__links">
                    <a href="#datum" class="nav__link">Datum i mjesto</a>
                    <a href="#natjecanja" class="nav__link">Natjecanja</a>
                    <a href="#nastupi" class="nav__link">Nastupi</a>
                    <a href="#savjeti" class="nav__link">Savjeti</a>
                    <a href="#orostiljadi" class="nav__link">O roštiljadi</a>
                    <a href="#galerija" class="nav__link">Galerija</a>
                    <a href="promjena_jezika.php?lang=hr" class="nav__link nav__link--lang">HR</a>
                    <a href="promjena_jezika.php?lang=en" class="nav__link nav__link--lang">EN</a>
                </div>
            </div>

            <div class="nav nav--mobile">

                <a href="#">
                    <div class="nav__logo">
                        <span>studentska</span> roštiljada
                    </div>
                </a>

                <div class="hamburger-icon js-icon">
                    <div></div>
                </div>

                <div class="hamburger js-menu">
                    <div class="layout--main">
                        <div class="hamburger__wrap">
                            <a href="#datum" class="nav__link">Datum i mjesto</a>
                            <a href="#natjecanja" class="nav__link">Natjecanja</a>
                            <a href="#nastupi" class="nav__link">Nastupi</a>
                            <a href="#savjeti" class="nav__link">Savjeti</a>
                            <a href="#orostiljadi" class="nav__link">O roštiljadi</a>
                            <a href="#galerija" class="nav__link">Galerija</a>
                            <a href="promjena_jezika.php?lang=hr" class="nav__link nav__link--lang">HR</a>
                            <a href="promjena_jezika.php?lang=en" class="nav__link nav__link--lang">EN</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="hero">
        <div class="hero__img">
            <img src="./assets/1.jpg" alt="main-img">
            <canvas id="particlesField">This Browser is not supported</canvas>
        <script src="assets/index.js"></script>
        </div>
        <div class="layout--main">
            <div class="main-info">
                <div class="main-info__body">
                    <div>
                        <h1>Studentska roštiljada <span>2020</span></h1>
                    </div>
                    <div class="main-info__info">
                        <span>16.5.2020</span>
                        <span>Kampus Osijek</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#datum">
                <img src="./assets/arrow.svg" alt="">
            </a>
        </div>
    </div>



    <section class="section" id="datum">
        <div class="map-wrap">
        </div>
        <div class="layout--main">
            <div class="section-heading">
                <h2>Datum i mjesto</h2>
            </div>
            <div class="section__content">
                <div class="grid--3-col">
                    <div class="card">
                        <div class="card__img">
                            <img src="./assets/map.svg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__title">
                                Mjesto
                            </div>
                            <div class="card__text">
                                Kampus u Osijeku
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <img src="./assets/calendar.svg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__title">
                                Datum
                            </div>
                            <div class="card__text">
                                16.05.2020.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <img src="./assets/clock.svg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__title">
                                Trajanje
                            </div>
                            <div class="card__text">
                                12:00h - 02:00h
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="natjecanja">
        <div class="layout--main">
            <div class="section-heading">
                <h2>natjecanja</h2>
            </div>
            <div class="section__content">
                <div class="grid grid--3-col">
                    <div class="card--img">
                        <div class="card__bg">
                            <img src="./assets/ppl.jpg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__text">
                                Povlačenje užeta
                            </div>
                            <div class="card__description">
                                13:00 - 14:00
                            </div>
                        </div>
                    </div>
                    <div class="card--img">
                        <div class="card__bg">
                            <img src="./assets/guy.jpg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__text">
                                Skakanje u vrećama
                            </div>
                            <div class="card__description">
                                14:30 - 16:00
                            </div>
                        </div>
                    </div>
                    <div class="card--img">
                        <div class="card__bg">
                            <img src="./assets/bbq.jpg" alt="">
                        </div>
                        <div class="card__body">
                            <div class="card__text">
                                Najbolji roštilj
                            </div>
                            <div class="card__description">
                                16:30 - 19:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="nastupi">
        <div class="background">
            <img src="./assets/concert.jpg" alt="">
        </div>
        <div class="layout--main">
            <div class="section-heading">
                <h2>nastupi</h2>
            </div>
            <div class="section__content">
                <div class="concerts">
                    <div class="concert">
                        <div class="concert__name">
                            Borna Ungar & Mali Daždevnjaci
                        </div>
                        <div class="concert__time">
                            21:00 - 22:00
                        </div>
                    </div>
                    <div class="concert">
                        <div class="concert__name">
                            Duško Lokin
                        </div>
                        <div class="concert__time">
                            22:30 - 24:00
                        </div>
                    </div>
                    <div class="concert">
                        <div class="concert__name">
                            DJ Napor
                        </div>
                        <div class="concert__time">
                            00:30 - 02:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="savjeti">
        <div class="layout--main">
            <div class="section-heading">
                <h2>savjeti</h2>
            </div>
            <div class="section__content">
                <div class="grid grid--center">
                    <div class="cell cell--6--large">
                        <div class="advice">
                            <h2 class="uppercase color-primary regular">Savjeti za pripremu najboljeg roštilja</h2>
                            <div class="advice__section">
                                <div>
                                    Nabavi dobar roštilj, po mogućnosti na ugljen. Plinski su roštilji dobri, ali hrana neće dobiti onaj pravi okus i miris. Također je dobro upotrebljavati poklopac, jer će održavati temperaturu i okus hrane.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Nemoj početi roštiljati na najjačoj vatri. Pusti da se vatra slegne i ugljen dobije sivu boju.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Mariniraj svakih 10 minuta kako meso ne bi ostalo suho.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Dodaj povrće i krumpir. Izreži ih na tanke kriške i kuhajte bez ulja i začina. Isto tako, ne zaboravi kruh i peciva.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Nemoj stalno bockati meso vilicom, tako će iscuriti sokovi i meso će se osušiti. Služi se špatulom ili hvataljkom.
                                </div>
                            </div>
                        </div>
                        <div class="advice">
                            <h2 class="uppercase color-primary regular">Mjere opreza</h2>
                            <div class="advice__section">
                                <div>
                                    Uvijek roštiljaj vani i na većem otvorenom prostoru. Pazi na niske grane drveća, nemoj nositi majice dugih rukava i makni zapaljive materijale.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Postavi roštilj na ravnu površinu kako se ne bi prevrnuo.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Nikad ne ostavljaj roštilj bez nadzora.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Budi spreman u slučaju požara – pripremi sodu bikarbonu, kantu pijeska ili aparat za gašenje požara.
                                </div>
                            </div>
                            <div class="advice__section">
                                <div>
                                    Ako imaš plinski roštilj, uvijek provjeri plin kako ne bi došlo do curenja.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="orostiljadi">

        <div class="background">
            <img src="./assets/bbq.jpg" alt="">
        </div>

        <div class="layout--main">
            <div class="section-heading">
                <h2>O roštiljadi</h2>
            </div>
            <div class="section__content about">
                <div class="grid">
                    <div class="cell cell--6--large">
                       Lijepi i sunčani dani su stigli, a s njima i jedna od najomiljenijih aktivnosti na otvorenom – <span class="bold color-primary">roštiljanje</span>. Ukusna hrana, dobra glazba i dobro društvo najvažniji su sastojci savršenoga roštilja i garancija za zabavu. Na ovoj stranici možeš pronaći najvažnije informacije o Studentskoj roštiljadi u organizaciji <span class="bold color-primary">Studentskoga zbora</span> osječkog sveučilišta, koju obvezno prate besplatni koncerti poznatih bendova. Možeš pregledati galeriju fotografija prijašnjih roštiljada, a naći će se tu i korisni savjeti za pripremu najboljeg roštilja, mjere opreza i popis idealnih mjesta za roštiljanje na otvorenom u Osijeku. <span class="bold color-primary">Dođi i zabavi se!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section layout--main" id="galerija">
        <div class="section-heading">
            <h2>Galerija</h2>
        </div>
        <div class="gallery">
            <div class="gallery__img js-img">
                <img src="./assets/gallery/1.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/2.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/3.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/4.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/5.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/6.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/7.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/8.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/9.jpg" alt="">
            </div>
            <div class="gallery__img js-img">
                <img src="./assets/gallery/10.jpg" alt="">
            </div>
        </div>
        <div class="modal js-modal">
            <div class="js-modal-wrap modal__wrap layout--main">
            </div>
        </div>

    </section>

    <script>
        $('.js-img').click(function() {
            $('.js-modal-wrap').html('');
            $(this).clone().appendTo('.js-modal-wrap');
            $('.js-modal').fadeIn(220);
        })

        $('.js-modal').click(function(){
            $('.js-modal').fadeOut(220);
        });

        $('.js-icon').click(function(){
            $(this).toggleClass('active');
            $('.js-menu').toggle(220);
        });

        $('.nav__link').click(function(){
            $('.js-menu').fadeOut(220);
        });

        $('.nav__link').click(function(){
            $('.nav__link, .js-icon').removeClass('active');
            $(this).addClass('active');
        });

    </script>


</body>

</html>
