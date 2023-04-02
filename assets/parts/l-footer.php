<footer class="l-footer">
    <div class="l-footer__effect">
        <img src="assets/media/img/curve__footer.svg">
    </div>
    <div class="l-footer__hero">
        <div class="u-container">
            <div class="l-footer__row">
                <?php include('assets/parts/c-newsletter.php'); ?>
            </div>
            <div class="l-footer__row">
                <div class="l-footer__col --company">
                    <?php $cCardProctomais = array('modifiers' => '--light');
                    include('assets/parts/c-cardProctomais.php'); ?>
                </div>
                <div class="l-footer__col --sitemap">
                    <?php $cSitemap = array('modifiers' => '--cols');
                    include('assets/parts/c-sitemap.php'); ?>
                </div>
            </div>
        </div>
        <div class="u-container">
            <div class="l-footer__row">
                <div class="l-footer__col --copy">
                    <div class="c-copyright">
                        <p>Diretor Técnico: João Cláudio Wasniewski - CRM 16146 - RQE 8022</p>
                        <p>©2023 - Todos os direitos reservados à Proctomais. </p>
                    </div>
                </div>
                <div class="l-footer__col --neuro">
                    <div class="c-neurodigital">
                        <a href="http://www.neuro.digital/" target="_blank" title="Neurodigital">
                            <i><?php include('assets/media/icons/icon_heart.svg');?></i>
                            <span>by <strong>Neurodigital</strong></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>