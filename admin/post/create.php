<?php 
    include "../config/config.php";
    include "../master_admin/header.php";
    $selesct = "SELECT * FROM catogory";
    $result = mysqli_query($conn,$selesct);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="section_form_post">
        <div>
            <form action="store.php" method="POST" enctype="multipart/form-data">
                <label for="">Catogory Name</label><br>
                <select class="option"  id=""  name="catogory">
                <option value="0" selected >Select</option>
                    <?php 
                        foreach($result as $view):
                    ?>
                        <option value="<?= $view['id']?>" ><?= $view['catogory_name']?></option>

                    <?php endforeach;?>
                </select><br>

                <label for="">Title</label><br>
                <input type="text" name="title"> <br>

                <picture class="picture">
                    <img src="" id="port_image" alt="" width="400px" height="500px">
                </picture><br>

                <label for="">Baner Image</label><br>
                <input onchange="document.getElementById('port_image').src =window.URL.createObjectURL(this.files[0])" type="file" name="baner_image"> 

                <label for="">Subtitle</label><br>
                <textarea type="text" name="subtitle" rows="5"> </textarea> <br>


               
                
                <div class="picture_div" id="view_images" >
                   
                </div><br>

                <label for="">View Image</label>
                <input onchange="previewImages()" type="file" name="view_image[]" multiple="" > 

                <label for="">Download Link</label>
                <input type="text" name="download_link"> 

                <button type="submit" name="save_btn" class="add_button">Save</button>
            </form>
        </div>
    </section>
</body>
</html>


<script>
        function previewImages() {
            const previewContainer = document.getElementById('view_images');
            previewContainer.innerHTML = '';  // Clear existing images
            const files = document.querySelector('input[name="view_image[]"]').files;

            if (files) {
                Array.from(files).forEach(file => {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    img.onload = () => URL.revokeObjectURL(img.src);  // Clean up memory
                    previewContainer.appendChild(img);
                });
            }
        }
</script>