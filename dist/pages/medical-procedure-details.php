<?php $lHeaderInner = array(
    'modifiers' => '',
    'title' => 'Nome do Procedmento',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.',
    'link' => '#procedimento',
    'background' => '../../assets/media/img/headerInner_bg.jpg'
);
include('assets/parts/l-headerInner.php');?>

<div class="l-innerPageContentHero">
    <section class="s-twoColsContent s-medicalProcedure" id="procedimento">
        <div class="u-container">
            <div class="s-twoColsContent__col u-fw55">
                <img src="assets/media/img/sobre_content_1.jpg" alt="Descrição da Imagem">
            </div>
            <div class="s-twoColsContent__col u-fw45">
                <h2>Procedimento</h2>
                <p>A Proctomais, Centro de Coloproctologia iniciou seu projeto no ano de 2011. Por mais de um ano a clínica esteve sob fase de elaboração, compra de equipamentos e construção para tornar-se o estabelecimento de alto padrão de qualidade de hoje.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis enim, explicabo illum laudantium maxime molestiae nulla praesentium quae sunt. A earum eius itaque magni molestias, nam rerum. Beatae consequatur dolore iusto modi obcaecati.</p>
                <a href="#agendamento" class="cBtn --secondary --l">
                    <div class="cBtn__hero">
                        <div class="cBtn__caption">Agendar consulta</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <?php
        include("assets/parts/s-schedule.php");
    ?>
</div>

