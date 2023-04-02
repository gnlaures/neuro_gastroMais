<header class="l-headerHome">
    <div class="l-headerHome__bg">
        <picture>
            <source media="(max-width:1180px)" srcset="assets/media/img/header_bg_mobile_3.png">
            <img src="assets/media/img/header_bg.png">
        </picture>
    </div>
    <div class="u-container">
        <div class="l-headerHome__content">
            <h1>Lorem ipsum sit dollor consectur adiscipling</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.</p>
            <?php $cCta = array('modifiers' => '--default'); include('assets/parts/c-cta.php'); ?>
            <span>Ou através do telefone <strong><a href="tel:48991316762">48 99131-6762</a></strong></span>
            <div class="c-scrollLink">
                <a href="#doctor">
                    <i class="c-scrollLink__icon">
                        <?php include('assets/media/icons/icon_arrow.svg');?>
                    </i>
                    <span class="c-scrollLink__text">conheça<br>a <strong>clínica</strong></span>
                </a>
            </div>
        </div>
    </div>
</header>