<nav class="l-nav">
    <div class="l-nav__contact">
        <div class="u-container">
            <ul>
                <li>
                    <a href="contato">
                        <i><?php include('assets/media/icons/icon_map.svg');?></i>
                        <span>Localização</span>
                    </a>
                </li>
                <li>
                    <a href="agendamento">
                        <i><?php include('assets/media/icons/icon_social_wpp.svg');?></i>
                        <span>Agendar Consulta</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="l-nav__hero">
        <div class="u-container">
            <div class="l-nav__start">
                <div class="l-nav__hamburguer">
                    <div class="c-hamburguer --primary --l js-toggleNavMobile">
                        <span class="c-hamburguer__bar --bar1"></span>
                        <span class="c-hamburguer__bar --bar2"></span>
                        <span class="c-hamburguer__bar --bar3"></span>
                    </div>
                </div>
                <div class="l-nav__brand">
                    <?php $cBrand = array('modifiers' => '--dark');
                    include('assets/parts/c-brand.php'); ?>
                </div>
            </div>
            <div class="l-nav__menu">
                <div class="c-smartMenu --gray --click u-jcc">
                    <ul>
                        <li>
                            <a href="procedimentos">Procedimentos</a>
                            <ul>
                                <li><a href="procedimento">Consulta Coloproctológica</a></li>
                                <li><a href="procedimento">Procedimentos Cirúrgicos</a></li>
                                <li><a href="procedimento">Colonoscopia</a></li>
                                <li><a href="procedimento">Colonoscopia Intervencionista</a></li>
                                <li><a href="procedimento">Manometria Anorretal</a></li>
                                <li><a href="procedimento">Cirurgia Intestinal Videolaparoscópica</a></li>
                                <li><a href="procedimento">Cirurgia Para Câncer Do Intestino</a></li>
                                <li><a href="procedimento">Tratamento De Hemorróidas</a></li>
                                <li><a href="procedimento">Tratamento Da Fissura Anal</a></li>
                                <li><a href="procedimento">Cápsula Colônica</a></li>
                                <li><a href="procedimento">Tratamento Da Fistula Anal</a></li>
                                <li><a href="procedimento">Tratamento Do Abscesso Anal</a></li>
                                <li><a href="procedimento">Tratamento Do Cisto Pilonidal</a></li>
                                <li><a href="procedimento">Tratamento Do Condiloma Anal</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="sobre">Proctomais</a>
                            <ul>
                                <li><a href="sobre">A Clínica</a></li>
                                <li><a href="corpo-clinico">Corpo Clínico</a></li>
                                <li><a href="contato">Contato e Localização</a></li>
                                <li><a href="agendamento">Agendamento de consulta</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="sobre">Conteúdos</a>
                            <ul>
                                <li><a href="noticias">Notícias</a></li>
                                <li><a href="noticias-categoria">Mitos e Verdades</a></li>
                                <li><a href="noticias-categoria">Vídeos</a></li>
                                <li><a href="noticias-categoria">Doenças Comuns</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="l-nav__cta">
                <?php $cCta = array('modifiers' => '--br');
                include('assets/parts/c-cta.php'); ?>
            </div>
        </div>
    </div>
</nav>

<div class="l-navMobile --right">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__content__hero">
            <div class="l-navMobile__widget --sitemap">
                <?php include('assets/parts/c-sitemap.php');?>
            </div>
            <div class="l-navMobile__widget --social">
                <?php include('assets/parts/c-socialList.php');?>
            </div>
        </div>
    </div>
</div>



