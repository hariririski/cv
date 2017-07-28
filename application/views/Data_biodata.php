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
    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url()?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url()?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo base_url()?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <?php echo $this->load->view('common/icon', '', TRUE);?>
</head>

<body>


    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <?php echo $this->load->view('common/head', '', TRUE);?>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

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

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Biodata Pribadi</h1>
                    </div>

                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-12 clearfix" id="customer-account">

                          <div class="box">

                            <div class="heading">
                                <h3 class="text-uppercase">Biodata</h3>
                            </div>

                            <form>
                              <?php
                                 foreach($lihat as $biodata){
                               ?>
                              <div class="col-md-4">
                                  <img class="img-responsive img-circle" alt="" width="90%"  src="<?php echo base_url()?>uploads/<?php echo $biodata->foto?>">
                              </div>
                                <div class="row">

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                          <div class="col-sm-4">
                                                <label for="password_old">NO KTP</label>
                                          </div>
                                          <div class="col-sm-8">
                                            <input type="text" value="<?php echo $biodata->no_ktp?>" required class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                          <div class="col-sm-4">
                                                <label for="password_old">Nama</label>
                                          </div>
                                          <div class="col-sm-8">
                                            <input type="text" value="<?php echo $biodata->nama?>"  required  class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                          <div class="col-sm-4">
                                                <label for="password_old">Tempat Lahir</label>
                                          </div>
                                          <div class="col-sm-8">
                                            <input type="text" value="<?php echo $biodata->tempat_lahir?>" required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                          <div class="col-sm-4">
                                                <label for="password_old">Tanggal Lahir</label>
                                          </div>
                                          <div class="col-sm-8">
                                            <input type="date"value="<?php echo $biodata->tgl_lahir?>" required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                          <div class="col-sm-4">
                                                <label for="password_old">Alamat</label>
                                          </div>
                                          <div class="col-sm-8">
                                            <input type="text" value="<?php echo $biodata->alamat?>" required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- /.row -->
                                <br>
                                <div class="row">
                                  <div class="col-md-2">

                                  </div>
                                  <div class="col-sm-10">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">NO HP</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="text" value="<?php echo $biodata->no_hp?>" required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Agama</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <select  required   class="form-control" id="sel1">
                                              <option><?php echo $biodata->agama?></option>
                                              <option>Islam</option>
                                              <option>Kristen</option>
                                              <option>Budha</option>
                                              <option>Hindu</option>
                                            </select>
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Status</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <select class="form-control" id="sel1">
                                              <option><?php echo $biodata->status?></option>
                                              <option>Belum Menikah</option>
                                              <option>Sudah Menikah</option>

                                            </select>
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Jenis Kelamin</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <select  required  class="form-control" id="sel1">
                                              <option><?php echo $biodata->jenis_kelamin?></option>
                                              <option>Laki-Laki</option>
                                              <option>Perempuan</option>
                                            </select>
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Email</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="email" value="<?php echo $biodata->email?>" required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Facebook</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="text" value="<?php echo $biodata->facebook?>" class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Google Plus</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="text" value="<?php echo $biodata->googleplus?>" class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Instagram</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="text" value="<?php echo $biodata->instagram?>" class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Username </label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="text" value="<?php echo $biodata->username?>"  required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Password</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="password"  required   class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <div class="col-sm-2">
                                                <label for="password_old">Foto</label>
                                          </div>
                                          <div class="col-sm-9">
                                            <input type="file" name="foto"class="form-control" >
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <br>
                              <br>
                              <br>
                                <!-- /.row -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i>Simpan Biodata</button>
                                </div>
                                <?php
                                    }
                                 ?>
                            </form>

                        </div>
                        <!-- /.box -->



                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->


                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->
<?php echo $this->load->view('common/footer', '', TRUE);?>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url()?>assets/js/front.js"></script>





</body>

</html>
