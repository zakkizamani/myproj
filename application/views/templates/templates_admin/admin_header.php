<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/dashgum/theme/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/dashgum/theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dashgum/theme/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dashgum/theme/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dashgum/theme/assets/lineicons/style.css">    
    <link href="<?php echo base_url()?>assets/page/css/blog-post.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/dashgum/theme/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/dashgum/theme/assets/css/style-responsive.css" rel="stylesheet">
    <!--<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>-->
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Admin Panel</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?= base_url('Auth/logout')?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>assets/dashgum/theme/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <div class="col-sm-12 pl-6"><h5 class="centered"><?= $user['nama_user']?></h5></div><br><br><br>

                  <!--ini area menu dimanis-->

                  <?php $menu= $this->db->get_where('tabel_menu', ['parent'=>0])->result(); ?>

                  <?php foreach ($menu as $m ) : ?>

                      <?php $sub_menu= $this->db->get_where('tabel_menu',array("parent"=>$m->id)); ?>

                      <?php if($sub_menu-> num_rows() > 0): ?>
                            <li class="sub-menu" >
                                <a href="<?php echo base_url($m->link)?>" <?php if($this->uri->segment(1)== $m->link) {echo "active";}?> >
                                    <i class="<?php echo $m->icon ?>"></i>
                                    <span><?php echo $m->nama_menu ?></span>
                                </a>

                                  <ul class="sub">
                                    <?php foreach($sub_menu->result() as $sub) :?>
                                      <li class="<?php if($this->uri->segment(1)== $sub->link) {echo "active";}?>"><a class="<?php if($this->uri->segment(1)== $sub->link) {echo "active";}?>"   href="<?php echo base_url($sub->link) ?>"><?php echo $sub->nama_menu ?></a></li>
                                    <?php endforeach; ?>
                                  </ul>
                            </li>

                      <?php else :?> 

                            <li class="sub-menu">
                              <a class="<?php if($this->uri->segment(1)== $m->link) {echo "active";}?>" href="<?php echo base_url($m->link) ?>" >
                                <i class="<?php echo $m->icon ?>"></i>
                                <?php echo $m->nama_menu ?>
                              </a>
                            </li>

                      <?php endif; ?>

                      
                  <?php endforeach; ?>
                  <!--ini area menu dimanis-->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->