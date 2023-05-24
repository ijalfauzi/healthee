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
                                <span>Oksigen Cair (Rp428.889.600)</span>
                            </div>
                            <div class="bars bars--green">
                                <span><img src="<?php echo get_theme_file_uri('assets/images/healthings-logo-with-text-small-white.webp') ?>" alt="HealThings"> (Rp315.360.000)</span>
                            </div>
                        </div>
                    </div>
                    <div class="row__medium-6">
                        <p class="first-line">Raih efisiensi hingga <span>26,7%</span></p>
                        <p class="second-line">dari total biaya fasyankes pertahun*</p>
                        <p class="third-line">*) Studi kasus rumah sakit tipe D di Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>   

<?php get_footer(); ?>