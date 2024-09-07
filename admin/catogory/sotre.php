<?php 
    session_start();
    require "../config/config.php";
    if(isset($_POST['save_btn'])){
        $name = $_POST['caotgory_name'];    
        
        if($name){
            $insetr = "INSERT INTO catogory(catogory_name)VALUES ('$name')";
            mysqli_query($conn,$insetr);
            $_SESSION['catogory_success'] = "Insert SuccessFull!";
            header("location: http://localhost/Movei/admin/catogory/catogory.php");
            exit();
        }else{
            $_SESSION['catogory_error'] = "Insert failed!!";
            header("location: http://localhost/Movei/admin/catogory/catogory.php");
            exit();
        }

    }

    if(isset($_GET['Edit_id'])){
        if(isset($_POST['edit_bnt'])){

            $id = $_GET['Edit_id'];
            $name = $_POST['caotgory_name'];  
            $update = "UPDATE catogory SET catogory_name ='$name' WHERE id='$id'";
            mysqli_query($conn,$update);
            $_SESSION['update_success'] = "Update SuccessFull!";
            header("location: http://localhost/Movei/admin/catogory/catogory.php");
            exit();
        }else{
            $_SESSION['update_error'] = "Update failed!!";
            header("location: http://localhost/Movei/admin/catogory/catogory.php");
            exit();
        }
    
    }

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        $delete = "DELETE FROM catogory WHERE id='$id'";
        mysqli_query($conn,$delete);
        $_SESSION['delete_success'] = "Delete SuccessFull!";
        header("location: http://localhost/Movei/admin/catogory/catogory.php");
        exit();
    }else{
        $_SESSION['delete_error'] = "Delete failed!!";
        header("location: http://localhost/Movei/admin/catogory/catogory.php");
        exit();
    }

?>