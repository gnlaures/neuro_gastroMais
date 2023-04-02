<a href="<?php echo $cCardVideo["href"] ?>" class="c-cardVideo <?php echo $cCardVideo["modifiers"] ?>">
    <div class="c-cardVideo__cover">
        <figure>
            <img src="<?php echo $cCardVideo["cover"] ?>" alt="<?php echo $cCardVideo["title"] ?>">
        </figure>
        <i><?php include('assets/media/icons/icon_play.svg');?></i>
    </div>
    <div class="c-cardVideo__infos">
        <h3><?php echo $cCardVideo["title"] ?></h3>
    </div>
</a>