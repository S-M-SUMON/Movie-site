<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: http://localhost/Movei/admin/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <section class="con" >
        <div class="header">
            <div>
                <h1>Movie</h1>
            </div>
            <div class="search_bnt">
                <form action="" >
                    <input type="text">
                    <button> Submit</button>
                </form>
            </div>
        </div>
    </section>

    
    <section class="nav_bar"> 
        <ul>
            <li><a href="../post/post.php">Post</a></li>
            <li><a href="../catogory/catogory.php">Catogory</a></li>
            <li><a href="../../index.php">Go Web Site</a></li>

            
        </ul>
    </section>
    
</body>
</html>