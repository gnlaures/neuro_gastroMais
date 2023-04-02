<a href="<?php echo $cClinicAddress["link"] ?>" class="c-cardClinicAddress <?php echo $cClinicAddress["modifiers"] ?>">
    <div class="c-cardClinicAddress__front">
        <div class="c-cardClinicAddress__icon">
            <?php include('assets/media/icons/icon_map.svg');?>
        </div>
        <div class="c-cardClinicAddress__name">Unidade <strong><?php echo $cClinicAddress["city"] ?></strong></div>
        <div class="c-cardClinicAddress__phone"><?php echo $cClinicAddress["phone"] ?></div>
    </div>
    <div class="c-cardClinicAddress__back">
        <span>Mais informações</span>
    </div>
</a>