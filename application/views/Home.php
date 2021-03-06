<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hariririski</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url();?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <?php echo $this->load->view('common/icon', '', TRUE);?>
    <!-- owl carousel css -->

    <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>


            <?php echo $this->load->view('common/head', '', TRUE);?>


            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                      <?php echo $this->load->view('common/banner', '', TRUE);?>

                        <!--/.navbar-header -->

                        <?php echo $this->load->view('common/menu', '', TRUE);?>


                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->



        <!-- *** LOGIN MODAL END *** -->

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="">
                                    </p>
                                    <h1>Multipurpose responsive theme</h1>
                                    <p>Business. Corporate. Agency.
                                        <br />Portfolio. Blog. E-commerce.</p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/template-homepage.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/template-mac.png" alt="">
                                </div>

                                <div class="col-sm-5">
                                    <h2>46 HTML pages full of features</h2>
                                    <ul class="list-style-none">
                                        <li>Sliders and carousels</li>
                                        <li>4 Header variations</li>
                                        <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                        <li>+ 11 extra pages showing template features</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h1>Design</h1>
                                    <ul class="list-style-none">
                                        <li>Clean and elegant design</li>
                                        <li>Full width and boxed mode</li>
                                        <li>Easily readable Roboto font and awesome icons</li>
                                        <li>7 preprepared colour variations</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/template-easy-customize.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/template-easy-code.png" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h1>Easy to customize</h1>
                                    <ul class="list-style-none">
                                        <li>7 preprepared colour variations.</li>
                                        <li>Easily to change fonts</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white no-mb">
            <div class="container" data-animate="fadeInUp">
                <div class="row">
                    <div class="col-md-12">

                        <div class="heading text-center">
                            <h2>Featured project</h2>
                        </div>

                        <div class="row">
                            <div class="portfolio-showcase clearfix">
                                <div class="col-sm-6">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-4.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <h3><a href="portfolio-detail.html">Portfolio item</a></h3>
                                    <p class="lead">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    <p class="buttons">
                                        <a href="portfolio-detail.html" class="btn btn-template-main">View</a>
                                        <a href="#" class="btn btn-template-main">Visit website</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="heading text-center">
                            <h3>Latest from our workshop</h3>
                        </div>

                        <div class="row portfolio no-space">
                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-5.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-6.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>

                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-7.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>
                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-9.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>
                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-8.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                                        <p class="buttons">
                                            <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                            <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->
                            </div>
                        </div>

                        <div class="see-more">
                            <a href="portfolio-4.html" class="btn btn-template-main">See more of our work</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i>
                            </div>
                            <h4><span class="counter">580</span><br>

		Websites</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter">100</span><br>

		Satisfied Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-copy"></i>
                            </div>
                            <h4><span class="counter">320</span><br>

		Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-font"></i>
                            </div>
                            <h4><span class="counter">923</span><br>

		Magazines and Brochures</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>From our blog</h2>
                    </div>

                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                        mi vitae est. Mauris placerat eleifend leo. <span class="accent">Check our blog!</span>
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Fashion now</a></h4>
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Fashion now</a></h4>
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-5.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">What to do</a></h4>
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php echo base_url();?>assets/img/portfolio-6.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">5 ways to look awesome</a></h4>
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                    <p class="intro">Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people.</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

      

        <!-- *** GET IT ***
_________________________________________________________ -->


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <?php echo $this->load->view('common/footer', '', TRUE);?>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/front.js"></script>



    <!-- owl carousel -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>



</body>

</html>
