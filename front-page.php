<?php get_header(); ?>

    <div class="large-hero page-section">
        <div class="wrapper">
            <div class="row">
                <div class="row__medium-12">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri('assets/images/large-hero.webp 1010w') ?>" media="(min-width: 1010px)">
                        <source srcset="<?php echo get_theme_file_uri('assets/images/large-hero.webp 767w') ?>" media="(min-width: 767px)">
                        <img srcset="<?php echo get_theme_file_uri('assets/images/large-hero.webp 530w') ?>" alt="Healthings - Things for Your Health">
                      </picture>
                </div>
            </div>
            <div class="row">
                <div class="row__medium-12">
                    <div class="large-hero__cta custom">
                        <p><a style="margin-right: .5rem;" title="Download Catalog" href="<?php echo site_url( 'download-catalog' ); ?>" class="btn btn--secondary btn--large">Download Catalog</a> <a title="Get Quotation" href="<?php echo site_url( 'get-quotation' ); ?>" class="btn btn--grad btn--large">Get Quotation</a> </p>
                    </div>
                </div>
            </div>
            <div class="featured">
                <div class="row row--gutters">
                    <div class="row__medium-6">
                        <div class="comparison">
                            <div class="bars bars--grey">
                                <span>Oksigen Cair</span>
                            </div>
                            <div class="bars bars--green">
                                <span><img src="<?php echo get_theme_file_uri('assets/images/healthings-logo-with-text-small-white.webp') ?>" alt="HealThings"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row__medium-6">
                        <p class="first-line">Raih efisiensi hingga <span>40%</span></p>
                        <p class="second-line">dari total biaya fasyankes pertahun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="site-pros page-section">
        <div class="wrapper">
            <div class="row">
                <h2 class="headline headline--centered text-capitalize">Keunggulan PSA Oksigen Generator</h2>
                <div class="by">
                    <span>oleh</span> <img src="<?php echo get_theme_file_uri('assets/images/healthings-logo-with-text-small.webp') ?>" alt="HealThings">
                </div>
            </div>
            <div class="row row--gutters">
                <div class="row__medium-4">
                    <ul>
                        <li>Pasokan oksigen selalu tersedia</li>
                        <li>Sangat cost-effective untuk fasilitas yang besar</li>
                        <li>Memenuhi segala jenis kebutuhan oksigen, termasuk yang membutuhkan aliran tekanan tinggi</li>
                    </ul>
                </div>
                <div class="row__medium-4 text-center">
                    <img src="<?php echo get_theme_file_uri('assets/images/oxygenerator-with-bg.webp') ?>" alt="Oxygen Generator HealThings">
                </div>
                <div class="row__medium-4">
                    <ul>
                        <li>Sistem pipa distribusi sentral/sub-sentral</li>
                        <li>Dapat digunakan untuk mengisi ulang tabung gas yang dapat dikoneksikan ke dalam sistem manifold yang ada di fasyankes</li>
                    </ul>
                    <div>
                        <a title="Lihat Spesifikasi" href="<?php echo site_url( 'products' ); ?>" class="btn btn--grad btn--large text-uppercase font-bold">Lihat Spesifikasi <img src="<?php echo get_theme_file_uri('assets/images/icons/caret-right.webp') ?>" alt="Lihat Spesifikasi"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-product page-section" id="about">
        <div class="wrapper">
            <div class="row row--gutters">
                <div class="row__medium-4">
                    <h2>Tentang HealThings</h2>
                </div>
                <div class="row__medium-8">
                    <p>HealThings adalah sebuah solusi peralatan medis <em>(medical devices)</em> yang mengedepankan teknologi terbarukan, efisiensi, dan kemudahan pengaplikasian di fasilitas pelayanan kesehatan.</p>
                    <p>HealThings fokus pada penjualan alat kesehatan, kerjasama operasional, dan penyewaan alat kesehatan.</p>
                    <div class="row row--gutters-small">
                        <div class="row__medium-4">
                            <div class="product bg-gradient">
                                <div class="product__icon">
                                    <img src="<?php echo get_theme_file_uri('assets/images/mri.webp') ?>" alt="Penjualan Alat Kesehatan">
                                </div>
                                <h3 class="product__title">Penjualan <br>Alat Kesehatan</h3>
                            </div>
                        </div>
                        <div class="row__medium-4">
                            <div class="product bg-gradient">
                                <div class="product__icon">
                                    <img src="<?php echo get_theme_file_uri('assets/images/hospital.webp') ?>" alt="Kerjasama Operasional Alat Kesehatan">
                                </div>
                                <h3 class="product__title">Kerjasama Operasional Alat Kesehatan</h3>
                            </div>
                        </div>
                        <div class="row__medium-4">
                            <div class="product bg-gradient">
                                <div class="product__icon">
                                    <img src="<?php echo get_theme_file_uri('assets/images/first-aid-kit.webp') ?>" alt="Penyewaan Alat Kesehatan">
                                </div>
                                <h3 class="product__title">Penyewaan Alat Kesehatan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-offering page-section">
        <div class="wrapper text-center">
            <div class="row">
                <h2 class="headline headline--centered">
                    Produksi Oksigen Mandiri <br>dapat <span> Dimulai Hari ini!</span>
                </h2>
                <p>
                    <a style="margin-right: .5rem" title="Download Catalog" href="<?php echo site_url( 'download-catalog' ); ?>" class="btn btn--secondary btn--large text-uppercase font-bold">Download Catalog</a> <a title="Get Quotation" href="<?php echo site_url( 'get-quotation' ); ?>" class="btn btn--grad btn--large text-uppercase font-bold">Get Quotation</a>
                </p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>