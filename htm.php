<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Carrousell</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!--se aplica esta variable solo para hacer el cambio para la clase carousel-item active o carousel-item-->
                <?php  $contador=0;  
                $iterador = new RecursiveDirectoryIterator("../gallery/");
                foreach (new RecursiveIteratorIterator($iterador) as $item) { 
                    if($contador==0){ ?>
                    <!--si esta en valor 0 activa la clase carousel-item active -->
                        <div class="carousel-item active">
                            <img src="<?php echo $item; ?>" class="d-block w-100" width="450" height="250">
                        </div>
                        <!--si esta en valor 1 activa la clase carousel-item -->
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