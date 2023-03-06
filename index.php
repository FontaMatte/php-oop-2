<?php

    require_once __DIR__. '/./DataBase/db.php';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animal Shop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <h1 class="text-center py-4">
            PETS SHOP
        </h1>

        <div class="container">

            <!-- FOOD SECTION -->
            <h2>
                PET FOOD
            </h2>
            <div class="card-group">
                <?php foreach ($foodArray as $food) { ?>
                <div class="card">
                    <img src="<?php echo $food->image ?>" class="card-img-top" alt="<?php echo $food->name ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $food->name ?></h5>
                    <p class="card-text"><?php echo $food->description ?></p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Category:</strong> 
                            <?php echo $food->category->icon ?>
                            <?php echo $food->category->name ?>
                        </small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Type:</strong> 
                            <?php echo $food->type ?>
                        </small>
                    </p>
                    <p class="card-text"><?php echo $food->price.'$' ?></p>
                    </div>
                </div>
                <?php } ?>       
            </div>

            <!-- TOYS SECTION -->
            <h2 class="py-5">
                PET TOYS
            </h2>
            <div class="card-group">
                <?php foreach ($toysArray as $toy) { ?>
                <div class="card">
                    <img src="<?php echo $toy->image ?>" class="card-img-top" alt="<?php echo $toy->name ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $toy->name ?></h5>
                    <p class="card-text"><?php echo $toy->description ?></p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Category:</strong> 
                            <?php echo $toy->category->icon ?>
                            <?php echo $toy->category->name ?>
                        </small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Type:</strong> 
                            <?php echo $toy->type ?>
                        </small>
                    </p>
                    <p class="card-text"><?php echo $toy->price.'$' ?></p>
                    </div>
                </div>
                <?php } ?>       
            </div>
            
            <!-- ANIMALCARE SECTION -->
            <h2 class="py-5">
                ANIMAL CARE
            </h2>
            <div class="card-group mb-5">
                <?php foreach ($animalCareArray as $animalCare) { ?>
                <div class="card">
                    <img src="<?php echo $animalCare->image ?>" class="card-img-top" alt="<?php echo $animalCare->name ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $animalCare->name ?></h5>
                    <p class="card-text"><?php echo $animalCare->description ?></p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Category:</strong> 
                            <?php echo $animalCare->category->icon ?>
                            <?php echo $animalCare->category->name ?>
                        </small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"><strong>Type:</strong> 
                            <?php echo $animalCare->type ?>
                        </small>
                    </p>
                    <p class="card-text"><?php echo $animalCare->price.'$' ?></p>
                    </div>
                </div>
                <?php } ?>       
            </div>
        </div>
        
    </body>
</html>