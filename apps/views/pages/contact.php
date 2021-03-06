<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>        
<div style="color: #000;background-color:#fff;text-align:center;padding: 100px 5% 0px 5%;text-align: justify;">
    <div class="map-loc">
        <div class="txt-center mb-30">
            <img src="<?= base_url();?>assets/images/detail/map.png" class="news-style" />
        </div>
    </div>
</div>


<!-- MAPS -->
<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
<div class="" id="map" style="height:450px;position:relative; margin-top:20px"></div>
</div>

<!-- FORM -->
<div style="color: #000;background-color:#fff;text-align:center;padding: 10px 5% 50px 5%;text-align: justify;">
<form class="form-style" id="contact">
    <div class="jumbotron__title txt-center">
        <h1 class="form-label1">Get Your NUP Now !</h1>
        <h1 class="form-label2">Only Rp 5,000,000 – Limited Units</h1>
    </div>
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group">
    <input type="email" class="form-control" name="email" id="emailInput" aria-describedby="emailHelp" placeholder="Email" required>
    <small id="emailHelp" class="form-text text-muted txt-left pl-5px">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <input type="number" name="number" class="form-control" id="phoneInput" aria-describedby="phoneHelp" placeholder="No. Telepon" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="pesanInput" name="message" rows="3" placeholder="Pesan" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary" id="get-now">Get Now!</button>
</form>
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
            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
            <li><a href="<?= site_url(['news'])?>">News</a></li>
            <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
            <li><a href="<?= site_url(['contact'])?>" class="active">Contact</a></li>
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
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>" class="active">Contact</a></li>
    </ul>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMSIJLct0nu9ftabXf81gZ_OR4AyNh3yI&amp;callback=initMap"></script>
<script type="text/javascript">
function initMap() {
var lokasi = [
['Lokasi Cluster', -6.635233, 106.829893, 4],
['Marketing Gallery', -6.638601, 106.832341, 5]
];

  var latlong = { lat: -6.635970, lng: 106.8310000 };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: latlong
  });

  var marker = new google.maps.Marker({
position: {lat: lokasi[0][1], lng: lokasi[0][2]},
map: map,
title: lokasi[0][0],
label: lokasi[0][0],
  });

var marker2 = new google.maps.Marker({
position: {lat: lokasi[1][1], lng: lokasi[1][2]},
    map: map,
title: lokasi[1][0],
label: lokasi[1][0],
  });
}
</script>
<script type="text/javascript">
$('#contact').on('submit', function(e){
    e.preventDefault();
    var form = $('#contact');
    $.ajax({
        url: '<?= site_url(['submit-contact'])?>',
        data: form.serialize(),
        type: 'POST',
        dataType : 'json',
        beforeSend : function(event){
          $("#get-now").html("<i class='fa fa-spinner fa-spin'> </i> wait");
        },
        success: function(data) {
          if(data.save == true){
            $("#get-now").html("Get Now!");
            alert('Terimakasih telah menghubungi kami.');
            location.reload();
          }else{
            location.reload();
          }
        }
    });
});
</script>