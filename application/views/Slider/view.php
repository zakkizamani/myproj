<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="col-md-5">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php $no=0; foreach($record as $r) :?>
                        <li data-target="#demo" data-slide-to="<?=$no?>" class="active"></li>
                    <?php $no++;endforeach ;?>
                    
                </ul>
            </div>
            
        <div class="col-md-12">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="<?= base_url().'assets/images/slider/'.$r->gambar?>" alt="Los Angeles" width="436" height="508">  
                </div>
                <?php foreach($record as $r) :?>
                    <div class="carousel-item">
                            <img src="<?= base_url().'assets/images/slider/'.$r->gambar?>" alt="Los Angeles" width="436" height="508">  
                    </div>
                <?php endforeach ;?>
            </div>
        </div>

            <div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            
            
        </div>
    </div>
</div>
            

</body>
</html>
