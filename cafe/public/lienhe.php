<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Liên Hệ</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/libraries.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="wrapper">
    
      <!-- HEADER -->
      <?php
        include './template/header2.php';
      ?>
        <?php
  
        
        $conn = mysqli_connect("localhost", "root", "", "cafe");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        
        $hoten =  $_REQUEST['hoten'];
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $noidung = $_REQUEST['noidung'];
          
        
        $sql = "INSERT INTO cafe_lienhe VALUES ('$hoten', 
            '$email','$phone','$noidung')";
          
        if(mysqli_query($conn, $sql)){
            echo "<div class='row'>"
                    . "<p class='col-12 h3 text-center text-success mt-3'>ĐÃ GỬI THÔNG TIN CỦA BẠN</p>" 
                    . "<p class='col-12 h4 text-center'>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Xin cảm ơn</p>"
                    . "<div class='row d-flex justify-content-center'>"
                      . "<a href='index.php' class='col-6 btn btn-dark m-3' style='max-width:20rem'>Về Trang Chủ</a>"
                    . "</div>"
                ."</div>"
                 
                 ; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
   <?php
      include './template/footer.php';
    ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
  
</html>