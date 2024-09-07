
<?php
    include "./master/header.php";
    $id = $_GET['id'];
    $selesct = "SELECT * FROM post WHERE catogory='$id'";
    $result = mysqli_query($conn,$selesct);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>


    <section class="section_body">
        
        <div class="section_body_prent">

            <?php 
                foreach($result as $view):
            ?>
            <div class="section_body_div">
                <div>
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <a href="view.php?id=<?= $view['id']?>"><img src="./image/uploadImage/<?= $view['baner_image']?>" alt="img"></a>
                        </div>
                        <div class="speaker-overlay">
                            <a href="view.php?id=<?= $view['id']?>"><?= $view['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            


                   
            </div>
        </div>
        
    </section>

    <!-- <section class="pagenation"> 
        <ul>
            <li><a href=""class="active">Pre</a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">Next</a></li>

            
        </ul>
    </section> -->
    
</body>
</html>

    

<?php
    include "./master/footer.php";
?>