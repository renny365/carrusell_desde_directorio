<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slider</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style type="text/css">
    body
    {
    background:#fff;
    }
    img
    {
    width:auto;
    box-shadow:0px 0px 20px #cecece;
    -moz-transform: scale(0.7);
    -moz-transition-duration: 0.6s; 
    -webkit-transition-duration: 0.6s;
    -webkit-transform: scale(0.7);
    
    -ms-transform: scale(0.7);
    -ms-transition-duration: 0.6s; 
    }
    img:hover
    {
    box-shadow: 20px 20px 20px #dcdcdc;
    -moz-transform: scale(0.8);
    -moz-transition-duration: 0.6s;
    -webkit-transition-duration: 0.6s;
    -webkit-transform: scale(0.8);
    
    -ms-transform: scale(0.8);
    -ms-transition-duration: 0.6s;
    
    }
</style>

</head>
<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php  $contador=0;  
            //echo $item . "<br>";
             // Se crea instancia de RecursiveIteratorIterator
            $iterador = new RecursiveDirectoryIterator("../gallery/");
            foreach (new RecursiveIteratorIterator($iterador) as $item) { 
                if($contador==0){ ?>
                    <div class="carousel-item active">
                        <img src="<?php echo $item; ?>" class="d-block w-100" width="450" height="250">
                    </div>
                <?php $contador=1;
                    }else{ ?>
                <div class="carousel-item">
                    <img src="<?php echo $item; ?>" class="d-block w-100" width="450" height="250">
                </div>
            <?php } ?>
        <?php } ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>