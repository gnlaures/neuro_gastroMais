<?php $lHeaderInner = array(
    'modifiers' => '--whiteCurve --article',
    'title' => 'Categoria ou Busca',
    'description' => '4 Publicações encontradas',
    'link' => '#categorie',
    'background' => '../../assets/media/img/headerInner_bg.jpg'
);
include('assets/parts/l-headerInner.php');?>

<div class="l-innerPageContentHero">
    <section class="s-listPosts" id="categorie">
        <div class="u-container">
            <div class="s-listPosts__content">
                <ul class="s-listPosts__content__articles">
                    <li>
                        <?php $cCardBlogArticle = array(
                        'modifiers' => '',
                        'title' => 'Distinctio quibusdam reiciendis laboriosam distinctio eum lorem upsum sit dollor',
                        'resume' => 'Et officia ut minus quod sed. Dolorem veritatis a vero. Nam volu
tatem esse eveniet omnis laboriosam est veniam Fugiat optio
adipisci voluptas sed omnis sed.',
                        'date' => '25/03/2023',
                        'href' => 'noticias-artigo'
                    );
                    include('assets/parts/c-cardBlogArticle.php'); ?>
                    </li>
                    <li>
                        <?php $cCardBlogArticle = array(
                        'modifiers' => '',
                        'title' => 'Distinctio quibusdam reiciendis laboriosam distinctio eum lorem upsum sit dollor',
                        'resume' => 'Et officia ut minus quod sed. Dolorem veritatis a vero. Nam volu
tatem esse eveniet omnis laboriosam est veniam Fugiat optio
adipisci voluptas sed omnis sed.',
                        'date' => '25/03/2023',
                        'href' => 'noticias-artigo'
                    );
                    include('assets/parts/c-cardBlogArticle.php'); ?>
                    </li>
                    <li>
                        <?php $cCardBlogArticle = array(
                        'modifiers' => '',
                        'title' => 'Distinctio quibusdam reiciendis laboriosam distinctio eum lorem upsum sit dollor',
                        'resume' => 'Et officia ut minus quod sed. Dolorem veritatis a vero. Nam volu
tatem esse eveniet omnis laboriosam est veniam Fugiat optio
adipisci voluptas sed omnis sed.',
                        'date' => '25/03/2023',
                        'href' => 'noticias-artigo'
                    );
                    include('assets/parts/c-cardBlogArticle.php'); ?>
                    </li>
                    <li>
                        <?php $cCardBlogArticle = array(
                        'modifiers' => '',
                        'title' => 'Distinctio quibusdam reiciendis laboriosam distinctio eum lorem upsum sit dollor',
                        'resume' => 'Et officia ut minus quod sed. Dolorem veritatis a vero. Nam volu
tatem esse eveniet omnis laboriosam est veniam Fugiat optio
adipisci voluptas sed omnis sed.',
                        'date' => '25/03/2023',
                        'href' => 'noticias-artigo'
                    );
                    include('assets/parts/c-cardBlogArticle.php'); ?>
                    </li>
                </ul>
                <div class="s-listPosts__content__pagination">
                    <?php include('assets/parts/c-pagination.php'); ?>
                </div>
            </div>
            <div class="s-listPosts__aside">
                <?php include('assets/parts/c-blogAside.php'); ?>
            </div>
        </div>
    </section>



    <?php
    include("assets/parts/s-schedule.php");
    ?>

</div>

