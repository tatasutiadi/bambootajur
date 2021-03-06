<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>        
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>
      
        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
            <li><a href="<?= site_url(['news'])?>" class="active">News</a></li>
            <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
            <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
        </ul>
    </div>
</nav>
      
<!-- Menu Icon -->
<div class="menuIcon">
    <span class="icon-menu icon-bars"></span>
    <span class="icon-menu icon-bars overlay"></span>
</div>
      
<div class="overlay-menu">
    <div class="logo2">
        <!-- Logo Placeholder for Inlustration -->
        <a href="<?= base_url();?>pages/index">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="<?= site_url(['concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['homes'])?>">The Homes</a></li>
        <li><a href="<?= site_url(['facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>" class="active">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>


<div style="color: #000;background-color:#fff;text-align:left;padding: 10px 5% 20px 5%;text-align: justify;">
    <form class="form-style ml-15">
        <div class="jumbotron__title txt-left">
            <h1 class="form-label1 mt-150">Progress</h1>
        </div>
    </form>
</div>

<!-- CAROUSEL -->
<div style="color: #000;background-color:#fff;text-align:center;padding: 0 5% 50px 5%;text-align: justify;">
    <div id="demo" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url();?>assets/images/detail/1.png" alt="concept A" width="1100" height="400">
                <div class="carousel-caption">
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/2.png" alt="concept B" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type B</h3>
                    <p>Thank you, Chicago!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/3.png" alt="concept C" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type C</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/4.png" alt="concept D" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/5.png" alt="concept A" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/6.png" alt="concept B" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/7.png" alt="concept C" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/8.png" alt="concept D" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/9.png" alt="concept A" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/detail/10.png" alt="concept B" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
        </div>

        <a class="carousel-control-prev prev-custom" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next next-custom" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

    <!-- FOOTER -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <div class="row bg-footer no-margin">

        <div class="col-md-3 f-first">
            <div class="detail-footer">
                <p class="header-footer">Marketing Gallery</p>
                Jalan Raya Tajur No.30, Tajur – Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone 0811 1403 280<br>
                Phone 0251-8574 255<br>
                Email bambootajur@gmail.com<br>
            </div>
        </div>

        <div class="col-md-3">
            <div class="detail-footer">
                <p class="header-footer">Show Unit</p>
                Jalan Unitex, Tajur – Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone 0811 1403 280<br>
                Email bambootajur@gmail.com<br>
            </div>
        </div>

        <div class="col-md-3 f-first">
            <div class="img-footer f-first">
                <p class="m-nol header-footer no-margin">Development by</p>
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" />
            </div>
        </div>
        <div class="col-md-3 f-first">
            <div class="img-footer">
                <p class="header-footer">Marketing by</p>
                <img src="<?= base_url();?>assets/images/vendor/shinmichi.png" class="img-shinmichi" />
            </div>
        </div>
                
            <!-- icon -->

            <div class="col-sm-12 txt-center f-fav">
                <a href="https://www.facebook.com/GreenBambooTerrace" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/BambooTajur" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/bambootajur/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
                
        </div>
    </div>

    <!-- copyright -->
    <div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
        <div class="col-sm-12 txt-center f-cop">
            &copy; Copyright 2018. All Rights Reserved
        </div>
    </div>

    <!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/navbar.js"></script>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(100);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(0);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, {
            duration: 750,
            // easing: "easeOutQuint"
            });
    });
</script>

<script>
    $(function() {
    var header = $("#navbar");
    
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
    });

    $(function() {
    var header = $(".menuIcon");
    
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled-icon");
        } else {
            header.removeClass("scrolled-icon");
        }
    });
    });
</script>
<script>
    function lockScroll() {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
            }
        else {
            $('body').addClass('lock-scroll');
        }
    }
</script>