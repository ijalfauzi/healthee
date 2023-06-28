<?php 
/*
* Template Name: Get Quotation
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
                <h1>Get Quotation</h1>
            </div>
            <div class="page-content">
                <div class="row row--gutters">
                    <div class="row__medium-4">
                        <img src="<?php echo get_theme_file_uri('assets/images/cta.png') ?>" alt="Contact Us">
                        <p>
                            <span class="font-bold">PT Karya Prima Putera Perkasa</span><br>
                            Jl. Kebagusan Raya No. 192, Kebagusan, Pasar Minggu, Jakarta Selatan 12520
                        </p>
                        <p>
                            Telp: <a href="tel:+622178838951">+62-21-78838951</a><br>
                            WA: <a href="https://api.whatsapp.com/send/?phone=6281288770321">+62-812-8877-0321</a><br>
                            E-mail: <a href="mailto:marketing@kp3.co.id">marketing@kp3.co.id</a>
                        </p>
                    </div>
                    <div class="row__medium-8">
                        <p class="subcta">
                            Silakan isi formulir di bawah ini untuk menjelaskan kebutuhan Anda terkait produk HealThings!
                        </p>
                        <div class="form-cta">
                            <div class="kontainer">
                                <form action="" method="POST">
                                    <input type="text" name="trap" class="hidden">
                                    <fieldset>
                                    <legend><span class="number">1</span> Informasi Kontak</legend>
                                    <input maxlength="20" placeholder="Nama Anda *" type="text" name="log-kontak-name" required="" id="log-kontak-name"></br>
                                    <input placeholder="No Telepon/WhatsApp *" type="number" name="log-kontak-no-wa" required=""></br>
                                    <input placeholder="Email *" type="email" name="log-kontak-email" required=""></br>	
                                    <input placeholder="Perusahaan/Instansi *" type="text" name="log-kontak-perusahaan"></br>
                                    <input placeholder="Domisili Perusahaan *"type="text" name="log-kontak-domisili"></br>
                                    </fieldset>
                                    <fieldset>
                                        <legend><span class="number">2</span> Informasi Tambahan</legend>
                                        <textarea maxlength="400" placeholder="Jelaskan Pada Kami Kebutuhan Anda" name="log-kontak-kebutuhan" id="" cols="20" rows="5"></textarea>
                                        </fieldset>
                                    <input type="submit" value="Kirim" name="log-kontak-form" class="submit-form-app">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>