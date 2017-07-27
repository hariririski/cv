 <?php $this->session->flashdata('login');?>
 <?php //$link=uri_string(); if($link =="help"){ echo "active";} ?>
 <div class="navbar-collapse collapse" id="navigation">

     <ul class="nav navbar-nav navbar-right">
         <li class="dropdown <?php $link=uri_string(); if($link =="home"){ echo "active";} ?> ">
             <a href="<?php echo base_url()?>home" >Home </a>
         </li>
         <li class="dropdown <?php $link=uri_string(); if($link =="biodata"){ echo "active";} ?> ">
             <a href="<?php echo base_url()?>biodata" >Biodata </a>
         </li>
         <li class="dropdown <?php $link=uri_string(); if($link =="aplikasi"){ echo "active";} ?> ">
             <a href="<?php echo base_url()?>aplikasi" >Aplikasi </a>
         </li>
         <li class="dropdown <?php $link=uri_string(); if($link =="kontak"){ echo "active";} ?> ">
             <a href="<?php echo base_url()?>kontak" >kontak </a>
         </li>

         <?php
            $admin=$this->session->userdata('admin');
             if(empty($admin)==0){
            ?>
         <li class="dropdown <?php $link=uri_string(); if($link =="data_biodata"||$link =="data_keahlian"||$link =="data_organisasi"||$link =="data_pengalaman_kerja"||$link =="data_aplikasi"){ echo "active";} ?>">
             <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Data<b class="caret"></b></a>
             <ul class="dropdown-menu">
                 <li ><a href="<?php echo base_url()?>data_biodata">Biodata</a>
                 </li>
                 <li><a href="<?php echo base_url()?>data_keahlian">Keahlian</a>
                 </li>
                 <li><a href="<?php echo base_url()?>data_organisasi">Organisasi</a>
                 </li>
                 <li><a href="<?php echo base_url()?>data_pengalaman_kerja">Pengalaman Kerja</a>
                 </li>
                 <li><a href="<?php echo base_url()?>data_aplikasi">Aplikasi</a>
                 </li>


             </ul>
         </li>
         <?php
           }
           ?>

     </ul>

 </div>
 <!--/.nav-collapse -->
