<?php 


    if(isset($_POST['save_btn'])){

        $catogory = $_POST['catogory'];
    // echo $catogory;
        $title= $_POST['title'];
        $baner_image = $_FILES['baner_image'];
        $subtitle= $_POST['subtitle'];
        $view_image = $_FILES['view_image'];
        $download_link= $_POST['download_link'];


        if($catogory != "0"){
            if($title){
                $baner_image = $_FILES['baner_image']['name'];
                $tmp_img =  $_FILES['baner_image']['tmp_name'];
    
                if($baner_image){
                    $explode = explode('.',$baner_image);
                    $extraion = end($explode);
    
                    $coustome_name_image = date('d-M-Y')."-".time().".".$extraion;
                    $file_path = '../../image/uploadImage/'.$coustome_name_image;
                    move_uploaded_file($tmp_img,$file_path);
    
                    if($subtitle){
    
                        $image_name = $_FILES['view_image']['name'];
                        $tmp_img2 =  $_FILES['view_image']['tmp_name'];
                        $location = '../../image/uploadImage/';
                        if($view_image){
                            $num = 1;
                            $com_name = "";
    
                            foreach($image_name as $key => $value){
                                $explode = explode('.',$value);
                                $extraion = end($explode);
                
                                $coustome_name_image2 = date('d-M-Y')."-".time().$num ++.".".$extraion;
                                $file_path = $location . $coustome_name_image2;
    
                                move_uploaded_file($tmp_img2[$key],$file_path);
                                $com_name = $com_name.",".$coustome_name_image2;
     
                            }if($catogory && $title && $baner_image && $subtitle  && $view_image && $download_link) {
                                include "../config/config.php";
                                $insert = "INSERT INTO post (catogory,title,baner_image,subtitle,view_image,download_link) VALUES('$catogory','$title','$coustome_name_image','$subtitle','$com_name','$download_link')";
                                mysqli_query($conn,$insert);
                                header("location: http://localhost/Movei/admin/post/post.php");
                            }else{
                                echo "plice flap";
                            }
    
                        }else{
                            echo "plice flap";
                        }
                    }else{
                        echo "plice flap";
                    }
    
    
    
                }else{
                    echo "plice flap";
                }
            }else{
                echo "plice flap";
            }
        }else{
            echo "select Catogory";
        }


    }


?>