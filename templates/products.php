<?php 
/*
* Template Name: Products
* Template Post Type: post, page, product
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php esc_attr(bloginfo( 'name' )); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	    <link rel="alternate" type="application/atom+xml" title="<?php esc_attr(bloginfo( 'name' )); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri('assets/images/favicon.webp') ?>" type="image/x-icon">
        <?php wp_head(); ?>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7Y2BKQ7B4L"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7Y2BKQ7B4L');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KDRM7N5');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header">
            <div class="wrapper wrapper--nav">
                <nav>
                    <ul class="menu">
                    <li class="logo"><a title="HealThings" href="<?php echo site_url(); ?>"><img alt="HealThings" src="<?php echo get_theme_file_uri('assets/images/healthings.webp') ?>"></a></li>
                    <li class="item"><a title="Products" href="<?php echo site_url( 'products' ); ?>">Products</a></li>
                    <li class="item"><a title="About" href="<?php echo site_url( '#about' ); ?>">About</a></li>
                    <li class="item"><a title="Contact Us" href="<?php echo site_url( 'contact-us' ); ?>">Contact Us</a></li>
                    <li class="toggle"><a href="#">&equiv;</i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        

    <div class="site-content page-section">
        <div class="wrapper">
            <div class="row">
                <h1>Product Specifications</h1>
            </div>
            <div class="page-content">
                <div class="row row--gutters">
                    <div class="row__medium-4">
                        <img src="<?php echo get_theme_file_uri('assets/images/oxygenerator.webp') ?>" alt="">
                    </div>
                    <div class="row__medium-8">
                        <h2>OXUS RAK-U06M2E by HealThings</h2>
                        <div class="row">
                            <div class="row__medium-6">
                                <ul class="text-right font-bold">
                                    <li>Oxygen Flow</li>
                                    <li>Oxygen Purity</li>
                                    <li>Oxygen Pressure</li>
                                    <li>Voltage (Frequency)</li>
                                    <li>Power Consumption</li>
                                    <li>Operating Environment</li>
                                    <li>Noise Level</li>
                                    <li>Weight</li>
                                    <li>Dimension (W x D x H)</li>
                                    <li>Electrical Protection Type</li>
                                </ul>
                            </div>
                            <div class="row__medium-6">
                                <ul class="text-left">
                                    <li>60±3 LPM</li>
                                    <li>93±3%</li>
                                    <li>Max. 6.5 bar</li>
                                    <li>230V (50Hz)</li>
                                    <li>4.25 KW</li>
                                    <li>0~40°C, 0~90%, 1090~800hPA</li>
                                    <li>Max. 70dB</li>
                                    <li>260kg</li>
                                    <li>960 x 600 x 1,550mm</li>
                                    <li>Class1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>