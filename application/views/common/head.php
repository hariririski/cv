<div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@universal.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-instagram"></i></a>
                            </div>

                            <div class="login">
                              <?php
                                 $admin=$this->session->userdata('admin');
                                  if(empty($admin)==0){
                                 ?>
                                    <a href="<?php echo base_url()?>login/logout"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">logout</span></a>
                                <?php
                              }else{
                                  ?>
                                  <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <?php
                                }
                                ?>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
