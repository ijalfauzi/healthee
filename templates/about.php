<?php 
/*
* Template Name: About
* Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

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

<script>
    // Responsive Navigation Menu

    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");
    const items = document.querySelectorAll(".item");

    // Toggle mobile menu

    function toggleMenu() {
    if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    toggle.querySelector("a").innerHTML = "&equiv;";
    } else {
    menu.classList.add("active");
    toggle.querySelector("a").innerHTML = "x";
    }
    }

    // Activate submenu

    function toggleItem() {
    if (this.classList.contains("submenu-active")) {
    this.classList.remove("submenu-active");
    } else if (menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
    this.classList.add("submenu-active");
    } else {
    this.classList.add("submenu-active");
    }
    }

    // Close submenu anywhere

    function closeSubmenu(e) {
    if (menu.querySelector(".submenu-active")) {
    let isClickInside = menu
    .querySelector(".submenu-active")
    .contains(e.target);

    if (!isClickInside && menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
    }
    }
    }

    // Event Listeners

    toggle.addEventListener("click", toggleMenu, false);
    for (let item of items) {
    if (item.querySelector(".submenu")) {
    item.addEventListener("click", toggleItem, false);
    }
    item.addEventListener("keypress", toggleItem, false);
    }
    document.addEventListener("click", closeSubmenu, false);

    // Google Analytics



    // Google Tag Manager



</script>
<style type="text/css">
    body {
        background: linear-gradient(45deg,#49bb99,#16387f 75%);
    }
</style> 