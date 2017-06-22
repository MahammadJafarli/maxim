<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Maxim - Modern One Page Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- =======================================================
        Theme Name: Maxim
        Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
<!-- navbar -->
<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Responsive navbar -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <h1 class="brand"><a href="{{url('/')}}">Maxim</a></h1>
                <!-- navigation -->
                <nav class="pull-right nav-collapse collapse">
                    <ul id="menu-main" class="nav">
                        <li><a title="team" href="#about">About</a></li>
                        <li><a title="services" href="#services">Services</a></li>
                        <li><a title="works" href="#works">Works</a></li>
                        <li><a title="blog" href="#blog">Blog</a></li>
                        <li><a title="contact" href="#contact">Contact</a></li>
                        <li><a href="page.html">Page</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header area -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ '/images/'.$blog->post_image }} " alt="">
            </div>

            <div class="col-md-8">
                <h1>{{ $blog->post_title }}</h1>
                <p>{{ $blog->post_text }}</p>
            </div>
        </div>
    </div>

</section>








<!-- end spacer section -->
<!-- section: contact -->

<footer>
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <ul class="social-networks">
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
                    <li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
                </ul>
                <p class="copyright">
                    &copy; Maxim Theme. All rights reserved.
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
                    -->
                    <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by BootstrapMade.com
                </div>
                </p>
            </div>
        </div>
    </div>
    <!-- ./container -->
</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localscroll-1.2.7-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
</body>
</html>