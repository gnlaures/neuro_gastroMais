<?php $lHeaderInner = array(
    'modifiers' => '',
    'title' => 'Notícias',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.',
    'link' => '#noticias',
    'background' => '../../assets/media/img/headerInner_bg.jpg'
);
include('assets/parts/l-headerInner.php');?>

<div class="l-innerPageContentHero">
    <section class="s-gridPosts" id="noticias">
        <div class="u-container">
            <h2>Últimas notícias</h2>
            <ul class="c-responsiveGrid"
                data-init-cols="2"
                data-init-padd="15"
                data-init-jc="u-jcsb"
                data-break-vw="740"
                data-break-cols="1"
                data-break-padds="10"
                data-break-jc="u-jcc">
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
        </div>
    </section>
    <section class="s-gridPosts --videos" id="videos">
        <div class="u-container">
            <h2>Últimos Vídeos</h2>
            <ul class="c-responsiveGrid --fitContent"
                data-init-cols="3"
                data-init-padd="15"
                data-init-jc="u-jcsb"
                data-break-vw="940, 540"
                data-break-cols="2, 1"
                data-break-padds="10, 10"
                data-break-jc="u-jcc, jcc">
                <li>
                    <?php $cCardVideo = array(
                            'href' => 'noticia-artigo',
                            'modifiers' => '',
                            'cover' => 'assets/media/img/blog_post.jpg',
                            'title' => 'Lorem Ipsum Sit Dollor Amet Consectur Adisc');
                    include('assets/parts/c-cardVideo.php'); ?>
                </li>
                <li>
                    <?php $cCardVideo = array(
                        'href' => 'noticia-artigo',
                        'modifiers' => '',
                        'cover' => 'assets/media/img/blog_post.jpg',
                        'title' => 'Lorem Ipsum Sitnsectur Adisc');
                    include('assets/parts/c-cardVideo.php'); ?>
                </li>
                <li>
                    <?php $cCardVideo = array(
                        'href' => 'noticia-artigo',
                        'modifiers' => '',
                        'cover' => 'assets/media/img/blog_post.jpg',
                        'title' => 'Lorem Ipsum Stur Adisc');
                    include('assets/parts/c-cardVideo.php'); ?>
                </li>
                <li>
                    <?php $cCardVideo = array(
                        'href' => 'noticia-artigo',
                        'modifiers' => '',
                        'cover' => 'assets/media/img/blog_post.jpg',
                        'title' => 'Lorem Ipsum Stur Adisc');
                    include('assets/parts/c-cardVideo.php'); ?>
                </li>
            </ul>
        </div>
    </section>
    <section class="s-listPosts">
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

