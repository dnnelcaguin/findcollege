<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            FindMe
        </title>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"/>
        <link href="fonts/icomoon/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/magnific-popup.css" rel="stylesheet"/>
        <link href="css/jquery-ui.css" rel="stylesheet"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet"/>
        <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
        <link href="fonts/flaticon/font/flaticon.css" rel="stylesheet"/>
        <link href="css/aos.css" rel="stylesheet"/>
        <link href="css/rangeslider.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="http://www.finduniversity.ph/widgets/searchtool.css" rel="Stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="site-wrap">
            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle">
                        </span>
                    </div>
                </div>
                <div class="site-mobile-menu-body">
                </div>
            </div>
            <header class="site-navbar py-2 bg-white" role="banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-11 col-xl-3">
                            <h1 class="mb-0 site-logo">
                                <a class="text-black h2 mb-0" href="index.php">
                                    Finding College
                                </a>
                            </h1>
                        </div>
                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                            <a class="site-menu-toggle js-menu-toggle text-black" href="#">
                                <span class="icon-menu h3">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </body>
</html>
<div class="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5" style="background-image: url(images/hero_1.jpg);">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1 data-aos="fade-up">
                            Find Best University
                            <!-- <span class="typed-words"></span> -->
                        </h1>
                        <!-- <p data-aos="fade-up" data-aos-delay="100">Explore top-rated attractions, activities and more!</p> -->
                    </div>
                </div>
                <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
                    <form method="post">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-3">
                                <div class="select-wrap">
                                    <span class="icon">
                                        <span class="icon-keyboard_arrow_down">
                                        </span>
                                    </span>
                                    <select class="form-control" id="_FUST_category" style="width:200px;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                                <!--   <div class="FUST_SearchField" style="display:box;" > -->
                                <select class="form-control" id="_FUST_location" style="width:200px;">
                                </select>
                            </div>
                            <!--     </div> -->
                            <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                                <!-- <div class="FUST_SearchField" style="display:box;"> -->
                                <select class="form-control" id="_FUST_degreeLevel" style="width:200px;">
                                </select>
                            </div>
                            <!--  </div> -->
                            <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                <div class="FUST_FindButton">
                                    <a class="btn btn-primary" href="javascript:_FU_Search('_FUST_category','_FUST_location','_FUST_degreeLevel','_FUST_major');">
                                        Search
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row pt-5 mt-5 text-center">
    <div class="col-md-12">
        <div class="border-top pt-5">
            <p>
                <div class="FUST_Link">
                    powered by
                    <a href="http://www.finduniversity.ph" target="_blank">
                        FindUniversity.ph
                    </a>
                </div>
            </p>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js">
</script>
<script src="js/jquery-migrate-3.0.1.min.js">
</script>
<script src="js/jquery-ui.js">
</script>
<script src="js/popper.min.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script src="js/owl.carousel.min.js">
</script>
<script src="js/jquery.stellar.min.js">
</script>
<script src="js/jquery.countdown.min.js">
</script>
<script src="js/jquery.magnific-popup.min.js">
</script>
<script src="js/bootstrap-datepicker.min.js">
</script>
<script src="js/aos.js">
</script>
<script src="js/rangeslider.min.js">
</script>
<script src="js/typed.js">
</script>
<script>
    var typed = new Typed('.typed-words', {
            strings: ["Appartments"," Restaurants"," Hotels", " Events"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
</script>
<script src="js/main.js">
</script>
<input id="_FUST_major" type="hidden" value=""/>
<input id="_FU_orderBy" type="hidden" value=""/>
<input id="_FU_orderByParam" type="hidden" value=""/>
<script src="http://www.finduniversity.ph/_resources/search.js" type="text/javascript">
</script>
<script type="text/javascript">
    _FU_website = "http://www.finduniversity.ph";_FU_SetCategoriesOptions('_FUST_category');_FU_SetLocationOptions('_FUST_location');_FU_SetDegreeLevelOptions('_FUST_degreeLevel');
</script>
