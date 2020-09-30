<?php
    $tabMenu=[
        "home" => "pages/home.php",
        "presentation" => "pages/presentation.php",
        "contact" => "pages/contact.php"
    ];
    if(isset($_GET['page'])){
        if(array_key_exists($_GET['page'],$tabMenu)){
            $menu=$tabMenu[$_GET['page']];
        }else{
            $menu="pages/notFound.php";
        }
    }else{
        $menu="pages/home.php";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("components/header.php");
    
        include($menu);
   
        include("components/footer.php");
    ?>
</body>
</html>