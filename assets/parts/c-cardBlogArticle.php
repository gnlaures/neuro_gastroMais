<div class="c-cardBlogArticle <?php echo $cCardBlogArticle["modifiers"] ?>">

    <div class="c-cardBlogArticle__figure">
        <div class="c-cardBlogArticle__details">
            <div class="c-cardBlogArticle__date">
                <div class="c-tag"><?php echo $cCardBlogArticle["date"] ?></div>
            </div>
            <ul class="c-cardBlogArticle__tags">
                <li><a href="noticias-categoria" class="c-tag">Dicas</a></li>
                <li><a href="noticias-categoria" class="c-tag">Doenças Comuns</a></li>
            </ul>
        </div>
        <figure class="c-cardBlogArticle__cover">
            <a href="<?php echo $cCardBlogArticle["modifiers"] ?>">
                <img src="assets/media/img/blog_post.jpg" alt="Descrição da imagem">
            </a>
        </figure>
    </div>

    <a href="<?php echo $cCardBlogArticle["href"] ?>" class="c-cardBlogArticle__infos">
        <h3><?php echo $cCardBlogArticle["title"] ?></h3>
        <p><?php echo $cCardBlogArticle["resume"] ?></p>
        <div class="c-readMore">
            <span>Continuar Lendo</span>
            <i><?php include('assets/media/icons/icon_arrow.svg');?></i>
        </div>
    </a>

</div>