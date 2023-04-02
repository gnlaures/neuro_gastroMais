<?php $lHeaderInner = array(
    'modifiers' => '',
    'title' => 'Corpo Clínico',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.',
    'link' => '#doctor',
    'background' => '../../assets/media/img/headerInner_bg.jpg'
);
include('assets/parts/l-headerInner.php');?>


<div class="l-innerPageContentHero">
    <?php include("assets/parts/s-doctor.php"); ?>
    <section class="s-photoGallery">
        <div class="u-container">
            <h2>Certificados</h2>
            <ul class="c-responsiveGrid"
                data-init-cols="7"
                data-init-padd="10"
                data-init-jc="u-jcc"
                data-break-vw="1024, 780, 420"
                data-break-cols="5, 4, 3"
                data-break-padds="5, 5, 5"
                data-break-jc="u-jcc, u-jcc, u-jcc">
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
                <li>
                    <a href="assets/media/img/sobre_grid_1.jpg" class="c-photo" data-fancybox="certificados">
                        <img src="assets/media/img/sobre_grid_1.jpg" alt="Descrição da Imagem">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="s-generalStaff">
        <div class="u-container">
            <div class="s-generalStaff__head">
                <h2>Equipe Completa</h2>
            </div>
            <div class="s-generalStaff__content">
                <div class="js-staffSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                        <div class="swiper-slide">
                            <?php $cCardStaff = array('modifiers' => '', 'photo' => 'assets/media/img/staff-nurse-demo-1.png', 'name' => 'Joana Doe', 'position' => 'Cargo');
                            include('assets/parts/c-cardStaff.php'); ?>
                        </div>
                    </div>
                </div>
                <?php $cSlideArrows = array('modifiers' => '--full');
                include('assets/parts/c-slideArrows.php'); ?>
            </div>
        </div>
    </section>
</div>