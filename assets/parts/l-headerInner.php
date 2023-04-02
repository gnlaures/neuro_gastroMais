<header class="l-headerInner <?php echo $lHeaderInner["modifiers"] ?>">
    <div class="l-headerInner__content">
        <div class="u-container">
            <h1><?php echo $lHeaderInner["title"] ?></h1>
            <p><?php echo $lHeaderInner["description"] ?></p>
            <div class="c-scrollLink">
                <a href="<?php echo $lHeaderInner["link"] ?>">
                    <i class="c-scrollLink__icon">
                        <?php include('assets/media/icons/icon_arrow.svg');?>
                    </i>
                </a>
            </div>
        </div>
    </div>
    <div class="l-headerInner__brandEffect">
        <img src="assets/media/img/curve_headerInner_brand.svg" alt="">
    </div>
    <div class="l-headerInner__curve">
        <img src="assets/media/img/curve_headerInner.svg" alt="">
    </div>
</header>

<div class="l-headerInner__breadcrumb">
    <div class="u-container">
        <?php $cBreadCrumb = array('modifiers' => '');
        include('assets/parts/c-breadcrumb.php'); ?>
    </div>
</div>