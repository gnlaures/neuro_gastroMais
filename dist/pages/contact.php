<?php $lHeaderInner = array(
    'modifiers' => '',
    'title' => 'Contato',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.',
    'link' => '#contato',
    'background' => '../../assets/media/img/headerInner_bg.jpg'
);
include('assets/parts/l-headerInner.php');?>

<div class="l-innerPageContentHero">
    <section class="s-twoColsContent s-contact" id="contato">
        <div class="u-container">
            <div class="s-twoColsContent__col u-fw60">
                <?php  include('assets/parts/c-contactForm.php'); ?>
            </div>
            <div class="s-twoColsContent__col u-fw40">
                <?php $cCardProctomais = array('modifiers' => '--dark');
                include('assets/parts/c-cardProctomais.php'); ?>
            </div>
        </div>
    </section>
</div>