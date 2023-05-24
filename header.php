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
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header">
            <div class="wrapper wrapper--nav">
                <nav>
                    <ul class="menu">
                    <li class="logo"><a title="HealThings" href="/"><img alt="HealThings" src="<?php echo get_theme_file_uri('assets/images/healthings.webp') ?>"></a></li>
                    <li class="item"><a title="Products" href="/products.html">Products</a></li>
                    <li class="item"><a title="About" href="#about">About</a></li>
                    <li class="item"><a title="Contact Us" href="/contact-us.html">Contact Us</a></li>
                    <li class="toggle"><a href="#">&equiv;</i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        