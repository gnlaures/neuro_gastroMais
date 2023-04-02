<!DOCTYPE html>
<html lang="<?php echo $siteConfig['language']; ?>">
<head>
    <!-- Declaração do título da página -->
    <title><?php echo $siteConfig['title']; ?></title>

    <!-- Metatags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=<?php echo $siteConfig['min_viewport_width']; ?>, initial-scale=1, minimum-scale=<?php echo $siteConfig['scale_min']; ?>, maximum-scale=<?php echo $siteConfig['scale_max']; ?>, user-scalable=<?php echo $siteConfig['scalable']; ?>">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="resource-type" content="document" />
    <meta name="description" content="<?php echo $siteConfig['description']; ?>" />
    <meta name="keywords" content="<?php echo $siteConfig['keywords']; ?>" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="doc-class" content="Completed" />
    <meta name="doc-rights" content="Public" />

    <meta name="author" content="<?php echo $siteConfig['author']; ?>"/>
    <meta name="creator" content="<?php echo $siteConfig['creator']; ?>">
    <meta name="language" content="<?php echo $siteConfig['language']; ?>" />

    <meta name="rating" content="General">
    <meta name="robots" content="All">
    <meta name="revisit-After" content="7 days">

    <!-- Metatags OPG Facebook -->
    <meta property="og:url" content="<?php echo $siteConfig['url']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $siteConfig['title']; ?>" />
    <meta property="og:description" content="<?php echo $siteConfig['description']; ?>" />
    <meta property="og:image:height" content="420">
    <meta property="og:image:width" content="800">
    <meta property="og:image" content="og-image.jpg" />

    <!-- Favicon by realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="<?php echo $siteConfig['mask_icon_color']; ?>">
    <meta name="msapplication-TileColor" content="<?php echo $siteConfig['tile_color']; ?>">
    <meta name="theme-color" content="<?php echo $siteConfig['theme_color']; ?>">

    <!-- css files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="dist/assets/theme.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="dist/assets/assets_css-min.css" type="text/css" rel="stylesheet" />
</head>

<body class="<?php echo $siteConfig['body_class']; ?>">

