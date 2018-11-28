<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live ORGANIK</title>
    <meta name="description" content="Live ORGANIK">
    <meta name="keywords" content="Live ORGANIK">

    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

  <script src="js/scripts.min.js"></script>
<script>

$(document).ready(function(){
	getCountry();
});


function getCountry(){

		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://geoip-db.com/json/geoip.php?jsonp=callback';
		var h = document.getElementsByTagName('script')[0];
		h.parentNode.insertBefore(script, h);

}

	function callback(data)
  {

		 if(data.country_name=="United States"){
			  $("#contactDeatails").html("<p>11331, 183rd Street #1023  Cerritos, CA 90703</p>");
			$("#mailaccount").html("<a href='mailto:anita.malik@liveorganik.com' style='color: rgba(0,0,0,.4);'><span>anita.malik@liveorganik.com</span></a>");
		 }else{
			  $("#contactDeatails").html("<p>Suite 805/220 Collins St,  Melbourne VIC 3000</p> <p> Australia </p> <p> T: +61 (03) 9013 4403 </p>");
			  $("#mailaccount").html("<a href='mailto:rohan.sheth@liveorganik.com' style='color: rgba(0,0,0,.4);'><span>rohan.sheth@liveorganik.com</span></a>");
		 }
	}


	</script>

  </head>
  <body onload="getCountry()">

  <!-- START: header -->

  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header" style="position:fixed;">
    <div class="container">
        <a href="#" class="probootstrap-logo" style="text-transform: none;">Live <span>ORGANIK</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#source">Our source</a></li>
            <li><a href="#organic">Why Organic Food</a></li>
            <li><a href="#about">About</a></li>
            <!--<li><a href="gallery.html">Gallery</a></li> -->
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <div class="probootstrap-text-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <h1 class="probootstrap-heading probootstrap-animate mb20" data-animate-effect="fadeIn">100% Organic</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap mb30" data-animate-effect="fadeIn">100% Highest-Quality Organic Food</a></div>
              <!--<p class="probootstrap-animate" data-animate-effect="fadeIn"><a href="#" class="btn btn-ghost btn-ghost-white">Get This</a></p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url(img/banner/banner1.jpg);"></li>
      <li style="background-image: url(img/banner/banner2.jpg);"></li>
    </ul>
  </section>
  <!-- END: slider  -->


  <!--<section class="probootstrap-section probootstrap-bg" style="background-image: url(img/slider_2.jpg);">
    <div class="container text-center">
      <h2 class="heading probootstrap-animate" data-animate-effect="fadeIn">PRODUCTS</h2>
      <p class="sub-heading probootstrap-animate" data-animate-effect="fadeIn">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </section> -->
  <section id="products" class="probootstrap-section">
    <br /><br /><br />
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img  src="img/product/Fruits.jpg" alt="Fruits and Vegetables" class="img_pro img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Fruits and Vegetables</h2>
              <p>We provide handpicked organic food fruits and vegetables which are 100% chemical free. </p>
              <!--<p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>-->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="img/product/Grains.jpg" alt="Grains" class="img_pro img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Grains</h2>
              <p>We, at Live ORGANIK offer grains that are perfect for your healthy lifestyle and organic food needs. </p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="img/product/Legumes.jpg" alt="Legumes.jpg" class="img_pro img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Legumes</h2>
              <p>We provide organic legumes such as kidney beans, brown beans, and white beans. </p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="img/product/Nuts.jpg" alt="Nuts and Seeds" class="img_pro img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Nuts and Seeds</h2>
              <p>Live ORGANIK provides fresh, unprocessed, and organic nuts and seeds that are rich in flavor and nutrients.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="img/product/Dairy-Products.jpg" alt="Dairy Products and Eggs" class="img_pro img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Dairy Products and Eggs</h2>
              <p>We provide organic high-quality organic dairy products made from 100% grass-fed animals. Organic eggs sold by us are certified to be laid by cage-free hens. </p>
            </div>
          </div>
        </div>
        <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="img/img_6.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Organic Cucumber</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div> -->
        <div class="clearfix visible-lg-block visible-md-block"></div>
      </div>
    </div>
  </section>
<!--  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-leaf"></i></div>
            <h2 class="heading">Fresh Veggies &amp; Fruits</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-hand"></i></div>
            <h2 class="heading">Locally Grown Vegetables</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-tree"></i></div>
            <h2 class="heading">Natural As It's In Nature</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-location"></i></div>
            <h2 class="heading">From Country Side</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-water"></i></div>
            <h2 class="heading">Alkaline Water</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-air"></i></div>
            <h2 class="heading">Fresh Air</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
      </div>
    </div>
  </section> -->



<div id="source">
  <br /><br /><br />
  <section  class="probootstrap-section probootstrap-bg " style="background-image: url(img/slider_2.jpg);    padding: 3em 0;">
    <div class="container text-center">
      <h2 class="heading" data-animate-effect="fadeIn">Our Source</h2>
    </div>

  </section>
  <div style="color:black;background: #fff;">

      <div class="container" style="padding:30px;">
        <div >
          <p> We partner with organic farm owners and dairy owners,who strictly follow the practice of growing food organically.</p>
          <p> Fresh produce is first cleaned in a very hygienic, automated and controlled environment, followed by careful manual screening so that only consumable food is passed on to the packing lines/stations.</p>
          <p> Finally, the food is packaged into boxes and directly supplied to our store. </p>
        </div>
      </div>
  </div>
</div>


<div id="organic">
  <br /><br /><br />
  <section  class="probootstrap-section probootstrap-bg " style="background-image: url(img/slider_2.jpg);    padding: 3em 0;">
    <div class="container text-center">
      <h2 class="heading" data-animate-effect="fadeIn">WHY ORGANIC FOOD</h2>
    </div>

  </section>
  <div style="color:black;background: #fff;">

      <div class="container" style="padding:30px;">
        <div >
          <p> Organic food is not a new concept and it was the only way how fruits and vegetables were grown before World War began.</p>
          <p> It was only after World War II, that farmers started using pesticides and chemicals to minimize crop damage from insects and rodents.</p>
          <p> Washing conventional produce doesn’t remove all of its pesticides, however, rinsing might wash some pesticides from the food’s surface but not from within the flesh.</p>
          <p> An organic farm nourishes its soil by natural methods and therefore crops less likely to be affected by insects and it also resists disease.</p>
        </div>
      </div>
  </div>
</div>
<div id="about">
  <br /><br /><br />
  <section  class="probootstrap-section probootstrap-bg " style="background-image: url(img/slider_2.jpg);    padding: 3em 0;">
    <div class="container text-center">
      <h2 class="heading" data-animate-effect="fadeIn">About us</h2>
    </div>

  </section>
  <div style="color:black;background: #fff;">

      <div class="container" style="padding:30px;">
        <div >
          <p>  Live ORGANIK is our attempt to make affordable Organic food available with the highest quality standards. Opened in 2015, we are locally owned and operated by group of health enthusiasts. Our goal is to provide the best in healthy alternatives for our community and promote healthy living through our careful selection of naturally grown food. </p>
          <p>  All the products sold at our store are as per the “USDA Organic” standards. </p>
        </div>
      </div>
  </div>
</div>

<div id="contact" style="background: #E9E9E5;">
<br /><br /><br />
  <section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center mb50">
        <h4 class="sub-heading">Get In Touch</h4>
        <h2 class="heading">Let's Chat</h2>
      </div>
      <div class="row">
        <div class="col-md-8">
          <form action="send.php" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" required class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" required class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" required title="Please enter valid email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Contact Information</h4>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span id="contactDeatails"></span></li>
            <li><i class="icon-mail"></i> <span id="mailaccount"></span>
</li>
            <!--<li><i class="icon-phone2"></i><a href="tel:+15623534579" style="color: rgba(0,0,0,.4);"><span>+1 (562) 353-4579</span></a></li>-->
          </ul>

          <!--<h4>Feedback</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><a href="#">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </section>
</div>

  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Live ORGANIK</h4>
            <p>Live ORGANIK is our attempt to make affordable Organic food available with the highest quality standards. All products sold by us  are as per the “USDA Organic” standards.</p>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="#source">OUR SOURCE</a></li>
              <li><a href="#organic">WHY ORGANIC FOOD</a></li>
              <li><a href="#about">ABOUT</a></li>
              <li><a href="#contact">CONTACT</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Products</h4>
            <ul class="stack-link">
              <li>Fruits and Vegetables</li>
              <li>Grains</li>
              <li>Legumes</li>
              <li>Nuts and Seeds</li>
              <li>Dairy Products and Eggs</li>
            </ul>
          </div>
        </div>
      <!--  <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe"><i class="icon-arrow-long-right"></i></button>
              </div>
            </form>
          </div>
        </div> -->
      </div>
    <div class="row copyright">
      <div class="col-md-6">
          <div cl ass="probootstrap-footer-widget">
            <p>&copy; 2018 <a href="#">Live ORGANIK.</a>  All Rights Reserved.</p>
          </div>
        </div>
      <!--    <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>



  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>



  </body>
</html>
