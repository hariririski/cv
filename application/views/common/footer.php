<footer id="footer">
    <div class="container">
        <div class="col-md-3 col-sm-6">
            <h4>About us</h4>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

            <hr>

            <h4>Join our monthly newsletter</h4>

            <form>
                <div class="input-group">

                    <input type="text" class="form-control">

                    <span class="input-group-btn">

                <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

            </span>

                </div>
                <!-- /input-group -->
            </form>

            <hr class="hidden-md hidden-lg hidden-sm">

        </div>
        <!-- /.col-md-3 -->

        <div class="col-md-3 col-sm-6">

            <h4>Aplikasi</h4>

            <div class="blog-entries">
                <div class="item same-height-row clearfix">
                    <div class="image same-height-always">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/detailsquare.jpg" alt="">
                        </a>
                    </div>
                    <div class="name same-height-always">
                        <h5><a href="#">Blog post name</a></h5>
                    </div>
                </div>

                <div class="item same-height-row clearfix">
                    <div class="image same-height-always">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/detailsquare.jpg" alt="">
                        </a>
                    </div>
                    <div class="name same-height-always">
                        <h5><a href="#">Blog post name</a></h5>
                    </div>
                </div>

                <div class="item same-height-row clearfix">
                    <div class="image same-height-always">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/img/detailsquare.jpg" alt="">
                        </a>
                    </div>
                    <div class="name same-height-always">
                        <h5><a href="#">Very very long blog post name</a></h5>
                    </div>
                </div>
            </div>

            <hr class="hidden-md hidden-lg">

        </div>
        <!-- /.col-md-3 -->

        <div class="col-md-3 col-sm-6">

            <h4>Kontak</h4>

            <p><strong>Universal Ltd.</strong>
                <br>13/25 New Avenue
                <br>Newtown upon River
                <br>45Y 73J
                <br>England
                <br>
                <strong>Great Britain</strong>
            </p>

            <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

            <hr class="hidden-md hidden-lg hidden-sm">

        </div>
        <!-- /.col-md-3 -->



        <div class="col-md-3 col-sm-6">

            <h4>Foto Aplikasi</h4>

            <div class="photostream">
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare2.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare3.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare3.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare2.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="<?php echo base_url();?>assets/img/detailsquare.jpg" class="img-responsive" alt="#">
                    </a>
                </div>
            </div>

        </div>
        <!-- /.col-md-3 -->
    </div>
    <!-- /.container -->
</footer>

<div id="copyright">
    <div class="container">
        <div class="col-md-12">
            <p class="pull-left">&copy; 2015. Your company / name goes here</p>
            <p class="pull-right">Template by <a href="https://bootstrapious.com/free-templates">Bootstrapious</a>
                 <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
            </p>

        </div>
    </div>
</div>
<?php echo $this->load->view('common/login', '', TRUE);?>