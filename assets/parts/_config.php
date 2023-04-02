<?php
    $siteConfig = [
        'title' => 'Proctomais',
        'title_spacer' => ' | ',
        'keywords' => 'coloproctologia, criciuma, ararangua, doenças, tratamentos, intestino',
        'description' => 'Clínica de coloproctologia em Criciúma, Araranguá e região. Tratamento de doenças como a hemorróida, diarréia aguda, câncer do intestino e da próstata, constipação e outras.',
        'base_folder' => 'proctomais',
        'body_class' => '',
        'active_page' => 'dist/pages/error.php',
        'author' => '@gnlaureano',
        'creator' => '@gnlaureano',
        'language' => 'pt-br',
        'publisher' => '@gnlaureano',
        'url' => 'https://www.proctomais.com.br',
        'theme_color' => '#6F1D1F;',
        'mask_icon_color' => '#6F1D1F;',
        'tile_color' => '#6F1D1F;',
        'min_viewport_width' => 'device-width',
        'scale_min' => '1.0',
        'scale_max' => '1.5',
        'scalable' => 'yes',
    ];

    $page = [
        'local' => explode('/', $_SERVER['REQUEST_URI']),
        'public_html' => explode($siteConfig['base_folder'], $_SERVER['REQUEST_URI'])
    ];

    switch ($page['local'][1]) {
        case '' :
        case 'home' :
            $siteConfig['active_page'] = 'dist/pages/home.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Página Inicial';
            $siteConfig['body_class'] = 'p-home';
            break;

        // inner
        case 'sobre' :
            $siteConfig['active_page'] = 'dist/pages/about.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'contato' :
            $siteConfig['active_page'] = 'dist/pages/contact.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-contact';
            break;
        case 'faq' :
            $siteConfig['active_page'] = 'dist/pages/faq.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'FAQ';
            $siteConfig['body_class'] = 'p-inner p-faq';
            break;
        case 'procedimentos' :
            $siteConfig['active_page'] = 'dist/pages/medical-procedures.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-procedures';
            break;
        case 'procedimento' :
            $siteConfig['active_page'] = 'dist/pages/medical-procedure-details.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-procedures';
            break;
        case 'corpo-clinico' :
            $siteConfig['active_page'] = 'dist/pages/staff.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-staff';
            break;
        case 'noticias' :
            $siteConfig['active_page'] = 'dist/pages/news.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-news';
            break;
        case 'noticias-categoria' :
            $siteConfig['active_page'] = 'dist/pages/news-categories.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-news-categories';
            break;
        case 'noticia-artigo' :
            $siteConfig['active_page'] = 'dist/pages/news-open.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-news-article';
            break;
        case 'agendamento' :
            $siteConfig['active_page'] = 'dist/pages/schedule.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-schedule';
            break;
        case 'termos-de-uso' :
            $siteConfig['active_page'] = 'dist/pages/terms-use.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-terms-use';
            break;
        case 'termos-de-cookies' :
            $siteConfig['active_page'] = 'dist/pages/terms-cookies.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-terms-cookies';
            break;
        case 'termos-de-privacidade' :
            $siteConfig['active_page'] = 'dist/pages/terms-privacy.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-terms-privacy';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Erro';
            $siteConfig['body_class'] = 'p-inner p-error';
            break;
    }
?>