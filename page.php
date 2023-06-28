<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>
        <div class="site-content page-section">
        <div class="wrapper">
            <div class="row">
                <h1><?php the_title(); ?></h1>
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
        <?php the_content(); ?>
    <?php }

    get_footer();
    
?>