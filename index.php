<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href=" cv.css " />
        <stript src="script.js " defer></stript>
        <title>CV DE NOUMEN FRECH</title>
</head>

<body>
    <div class="conteneur">
        <div class="section-left">
            <div class="int-comp ">
                <?php 
                    require "profile.php";
                ?>
            </div>
                <?php
                     require "progres-bar.php";
                ?>
            </div>
        <div class=" section-right ">
            
            <?php
                 require "expérience.php";
            ?>

            <?php 
                require "divertissement.php";
            ?>
            
            <div class="cur-aca ">
                <?php
                     require "cursus.php";
                ?>
            </div>

        </div>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p "crossorigin="anonymous "></script>
</body>

</html>