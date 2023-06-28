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
                    <li class="item"><a title="About" href="#about">About</a></li>
                    <li class="item"><a title="Contact Us" href="<?php echo site_url( 'contact-us' ); ?>">Contact Us</a></li>
                    <li class="toggle"><a href="#">&equiv;</i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        