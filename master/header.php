<?php   
    $conn = mysqli_connect("localhost","root","","movie");
    $selesct = "SELECT * FROM catogory";
    $result = mysqli_query($conn,$selesct);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <section class="con" >
        <div class="header">
            <div>
                <h1><a href="./index.php">Movie</a></h1>
            </div>
            <div class="search_bnt">
                <form action="search.php" method="POST">
                    <input type="text" placeholder="search" name="search">
                    <button type="submit" name="search_btn"> Submit</button>
                </form>
            </div>
        </div>
    </section>

    
<section class="nav_bar"> 
        <ul>
            <li><a href="./index.php"class="active">HOME</a></li>
            <?php 
                foreach($result as $results):
            ?>
                <li><a href="catogory.php?id=<?= $results['id']?>"><?= $results['catogory_name']?></a></li>
            <?php endforeach;?>
            <li><a href="./admin/">login</a></li>
            
        </ul>
    </section>
    
</body>
</html>