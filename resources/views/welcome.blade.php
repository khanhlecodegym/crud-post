<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Anchor Bootstrap 4.1.3 UI Kit by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>

<!-- Animation CSS -->
<link href="./assets/css/vendor/aos.css" rel="stylesheet"/>

</head>

<body>



<!------------------------------------------
NAVBAR
------------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
<div class="container">
	<a class="navbar-brand" href="./index.html"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="./index.html">Intro</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Examples </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="./landing.html">Home Landing</a>
				<a class="dropdown-item" href="./login.html">User Login</a>
				<a class="dropdown-item" href="./blog.html">Blog Index</a>
				<a class="dropdown-item" href="./page.html">Sample Page</a>
			</div>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./docs.html">Docs</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">
			<li class="nav-item">
			<span class="nav-link" href="#">
			<a class="btn btn-purple shadow btn-round" href="#" data-toggle="modal" data-target="#modal_newsletter"><i class="fas fa-cloud-download-alt"></i> Download UI Kit <a href="https://github.com/wowthemesnet/Anchor-Bootstrap-UI-Kit/archive/master.zip" class="downloadzip" class="hidden"></a>
			</a>
			</span>
			</li>
		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->


<!------------------------------------------
HEADER
------------------------------------------->
<div class="jumbotron jumbotron-lg jumbotron-fluid mb-3 bg-primary position-relative">
	<div class="container text-white h-100 tofront">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="display-3">Build your SAAS landing page using the <b>intelligent KIT interface</b></h1>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->


<section class="pt-5 pb-5" data-aos="fade-down">
<div class="container">

    <!-- Featured -->
	<div class="row">

		@foreach ($posts as $item)
        <div class="col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-xl-300">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-purple">{{ $item->category }}</strong>
                    <h3 class="mb-0">
                    <a class="text-dark" href="#">{{ $item->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">
                        Nov 12
                    </div>
                    <p class="card-text mb-auto">
                        {{ $item->getCity() }}
                    </p>
                    <a class="text-gray" href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="assets/img/demo/blog1.jpg">
            </div>
            </div>
        @endforeach
	</div>
    <!-- End Featured -->

    <!-- Blog Cards -->
	<div class="row gap-y">
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog3.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">10 Steps for a Successful Business without Investing Money</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by Dalida </span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog4.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">Happy wife is happy life says life experts</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by Sandra </span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog5.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">Pack your bags and see the world today</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by Mike </span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog6.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">Whatever works is what's best,but not always</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by Mary </span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog7.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">Social media and its impact on your business</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by John </span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<div class="card">
				<img class="img-card-top" src="assets/img/demo/blog8.jpg">
				<div class="card-body">
					<a href="#">
					<h5 class="card-title text-dark">Summer holidays are the best way to relax</h5>
					<span class="card-text text-muted">
					Posted on May 24, 2019 by Sal </span>
					</a>
				</div>
			</div>
		</div>
	</div>
    <!-- End Blog Cards -->

</div>
</section>

<!------------------------------------------
SUBSCRIBE
------------------------------------------->
<div class="container pt-3 pb-5 mb-5" data-aos="fade-up">
	<div class="pb-4 text-center">
		<h2><span class="text-secondary font-weight-bold">Subscribe</span> to our <strong>newsletter</strong></h2>
		<p class="text-muted">
			 A lot of features to develop your own lore ipsum. No credit card required.
		</p>
	</div>
	<form class="row justify-content-center">
		<div class="col-md-3">
			<input type="text" class="form-control input-round w-100 form-control-lg" placeholder="First name*">
		</div>
		<div class="col-md-3">
			<input type="text" class="form-control input-round w-100 form-control-lg" placeholder="E-mail address*">
		</div>
		<div class="col-md-3">
			<button type="submit" class="btn btn-info btn-round btn-lg w-100">Subscribe</button>
		</div>
	</form>
</div>


<!------------------------------------------
DEMO MODAL & DONATE BUTTON ONLY - DON'T COPY
------------------------------------------->
<div class="modal fade" id="modal_newsletter" tabindex="-1" role="dialog" aria-labelledby="modal_newsletter" aria-hidden="true">
	<div class="modal-dialog shadow-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center justify-content-center">
					<em class="text-muted mr-2">Share this freebie:</em>
					<!-- Share Facebook -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-secondary text-white mr-1" data-sharer="facebook" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-facebook-f"></i></span>
					<!-- Share Twitter -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-info text-white mr-1" data-sharer="twitter" data-title="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-hashtags="bootstrap,free" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-twitter"></i></span>
					<!-- Share Google+ -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="googleplus" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-google"></i></span>
					<!-- Share E-mail -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-purple text-white mr-1" data-sharer="email" data-title="Bootstrap KIT Url" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/" data-subject="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-to="some@email.com"><i class="fas fa-envelope"></i></span>
					<!-- Sharingbutton Pinterest -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="pinterest" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-pinterest"></i></span>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text-center mb-3">
					<img src="assets/img/favicon.ico">
				</div>
				<h6 class="text-center font-weight-light ">Thanks for downloading Anchor Bootstrap UI Kit!</h6>
				<h5 class="text-center mb-4">We'll e-mail you when a new version arrives! *</h5>
				<form id="newsletter-form" action="https://www.themepush.com/sendy/subscribe" method="POST" accept-charset="utf-8">
					<div class="d-none">
						<label for="hp">HP</label>
						<br>
						<input type="text" name="hp" id="hp">
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-name">
								<label class="sr-only" for="inputName">Your name</label>
								<input type="text" name="name" id="name" required="" pattern="[A-Za-z\s]+" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-email">
								<label class="sr-only" for="inputEmail">Email address</label>
								<input type="email" name="email" id="email" required="" class="form-control" placeholder="E-mail">
							</div>
						</div>
						<input type="hidden" name="list" value="CVN62nDKE0qTf4XLs8J9iQ" checked="checked">
						<div class="col-md-12 mb-3">
							<input type="hidden" name="subform" value="yes">
							<input onclick="requiredConsent()" class="btn btn-success btn-block shadow-sm" value="Send me updates & more freebies" type="submit" name="submit" id="submit">
						</div>
						<div class="col-md-12 mb-3 text-center">
							<small class="d-block" style="color:#ccc;font-style:italic;line-height:1.4;">* This is a newsletter managed by WowThemes, the item author. It is the only way we can reach you out when a new version is released, so, please, subscribe!</small>
						</div>
					</div>
					<div class="row justify-content-center d-none mt-3">
						<label class="c-input c-checkbox small">
						<input type="checkbox" name="gdpr" id="gdpr" checked="checked">
						<span class="c-indicator"></span> I agree to the <a target="_blank" href="https://www.wowthemes.net/privacy-policy/#newsletter-subscription-forms">privacy policy</a>. </label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div style="position:fixed; bottom:20px;left:20px;">
	<a href="https://www.paypal.me/wowthemes/10" target="_blank"><img class="rounded-circle shadow-lg" src="assets/img/demo/coffee.png" width="70" data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy me a coffee!"></a>
</div>
<!--------------------------------------
END DEMO MODAL & DONATE BUTTON
--------------------------------------->


<!--------------------------------------
FOOTER
--------------------------------------->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
<path class="bg-black" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>
<footer class="bg-black pb-5">
<div class="container">
	<div class="row">
		<div class="col-12 col-md mr-4">
			<i class="fas fa-copyright text-white"></i>
			<small class="d-block mt-3 mb-4 text-muted">©
			<script>document.write(new Date().getFullYear())</script>
			 Anchor Bootstrap UI Kit,  by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>. <a target="_blank" href="https://www.wowthemes.net/freebies-license/">License</a></small>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Features</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Cool stuff</a></li>
				<li><a class="text-muted" href="#">Random feature</a></li>
				<li><a class="text-muted" href="#">Team feature</a></li>
				<li><a class="text-muted" href="#">Stuff for developers</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Resources</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Resource</a></li>
				<li><a class="text-muted" href="#">Resource name</a></li>
				<li><a class="text-muted" href="#">Another resource</a></li>
				<li><a class="text-muted" href="#">Final resource</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Utilities</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Business</a></li>
				<li><a class="text-muted" href="#">Education</a></li>
				<li><a class="text-muted" href="#">Government</a></li>
				<li><a class="text-muted" href="#">Gaming</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">About</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Team</a></li>
				<li><a class="text-muted" href="#">Locations</a></li>
				<li><a class="text-muted" href="#">Privacy</a></li>
				<li><a class="text-muted" href="#">Terms</a></li>
			</ul>
		</div>
	</div>
</div>
</footer>



<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>

<!-- Animation -->
<script src="./assets/js/vendor/aos.js" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>

<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>

</body>
</html>
