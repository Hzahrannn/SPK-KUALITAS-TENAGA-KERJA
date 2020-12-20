<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Pendataan Minat dan Bakat Mahasiswa">
    <meta name="author" content="Ansonika">
    <title>Pendataan Minat Dan Bakat Mahasiswa</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/pmblogo20.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="60x60" href="img/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina-152x152.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               $('#uploadForm + embed').remove();
               $('#uploadForm').after('<embed src="'+e.target.result+'" width="450" height="300">');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

</head>

<body>
    <form method="post" action="" enctype="multipart/form-data" id="uploadForm">
        <input type="file" name="file" id="file" />
        <input type="submit" name="submit" value="Upload"/>
        <ul>
            <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
            <li>File size: <?php echo $_FILES['file']['size'];  ?>
            <li>File type: <?php echo $_FILES['file']['type'] ?>
        </ul>
    </form>
    
    <script>
    $("#file").change(function () {
        filePreview(this);
    });
    </script>
    
    <?php 
    $uploadPath = 'images/'; 
    if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){ 
         $namaFile = $_FILES['file']['name'];
        echo "<br>";
        echo $_FILES['file']['name'] . "<br>";
        echo $_FILES['file']['tmp_name'] . "<br>";
        echo $_FILES['file']['size'] . "<br>";
        echo $_FILES['file']['type'] . "<br>";
        echo $uploadPath . "<br>";
        if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath.$_FILES['file']['name'])){ 
            echo 'File has been uploaded successfully.'. "<br>";
        }else{ 
            echo 'File upload failed, please try again.'. "<br>";
        }
        echo "<a href='images/$namaFile' target='_blank'>$namaFile <a/>" . "<br>";;
    } 
    ?>
</body>

</html>