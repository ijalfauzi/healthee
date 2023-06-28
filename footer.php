        <div class="site-widget page-section">
            <div class="wrapper">
                <div class="row">
                    <div class="row__large-6">
                        <div class="widget-1">
                            <div class="widget-content">
                                <h3 class="headline headline--widget">Powered by</h3>
                                <a href="https://kp3.co.id" title="PT Karya Prima Putera Perkasa"><img src="<?php echo get_theme_file_uri('assets/images/kp3.webp') ?>" alt="PT Karya Prima Putera Perkasa"></a>
                            </div>
                            <div class="widget-content">
                                <h3 class="haedline headline--widget">Follow Us</h3>
                                <div class="site-widget__socials">
                                    <a title="Facebook" href="https://facebook.com/profile.php?id=100092313803048"><img src="<?php echo get_theme_file_uri('assets/images/icons/facebook.webp') ?>" alt="Facebook"></a>
                                    <a title="Instagram" href="https://instagram.com/healthings.kp3"><img src="<?php echo get_theme_file_uri('assets/images/icons/instagram.webp') ?>" alt="Instagram"></a>
                                    <a title="Linkedin" href="https://linkedin.com/showcase/healthings-id/"><img src="<?php echo get_theme_file_uri('assets/images/icons/linkedin.webp') ?>" alt="Linkedin"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row__large-6">
                        <div class="widget-3">
                            <div class="widget-content widget-content--last-widget">
                                <h3 class="headline headline--widget">Contact Us</h3>
                                <ul>
                                    <li class="address">
                                        <a title="Temukan di Google Maps" href="https://g.page/kapetiga?share">
                                            <img src="<?php echo get_theme_file_uri('assets/images/icons/map.webp') ?>" alt="Alamat">
                                            <div class="text-adress">
                                                Jl. Kebagusan Raya No. 192, Kebagusan, Pasar Minggu, Jakarta Selatan 12520
                                            </div>
                                        </a>
                                    </li>
                                    <li class="phone">
                                        <a title="Telepon Kami" href="tel:02178838951">
                                            <img src="<?php echo get_theme_file_uri('assets/images/icons/phone.webp') ?>" alt="Telepon">
                                            <div class="text-phone">+62-21-78838951</div>
                                        </a>
                                    </li>
                                    <li class="email">
                                        <a title="Email Kami" href="mailto:marketing@kp3.co.id">
                                            <img src="<?php echo get_theme_file_uri('assets/images/icons/envelope.webp') ?>" alt="Email">
                                            <div class="text-email">marketing@kp3.co.id</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="wrapper">
                <p class="site-footer__text">
                    © 2023 <a title="PT Karya Prima Putera Perkasa" href="https://kp3.co.id">PT Karya Prima Putera Perkasa</a>. <span>All Rights Reserved.</span>
                </p>
            </div>
        </footer>
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
        <?php wp_footer(); ?>
    </body>
</html>