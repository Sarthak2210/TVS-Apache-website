<?php
$insert=false;
if(isset($_POST['name'])){
  
  $server="localhost";
  $username="root";
  $password="";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("connection to this database failed due to".
      mysqli_connect());
  }

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];
  $sql = "INSERT INTO `tvs`.`tvs` (`id`, `name`, `mail`, `mobile`, `message`) VALUES ('','$name', '$mail', '$mobile', '$message');";
//   echo $sql;
   
  if($con->query($sql) == true){
    //   echo "successfully inserted";
    $insert=true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icon/phone">

    <title>Contact Us</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="apache.jpg" alt="logo"></div>
            <li><a href="Index.html">Home</a></li>
            <li><a href="aog.php">AOG</a></li>
            <li><a href="tvs.html">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            
        </div>
        
    </nav>
    <form id="text" method="post" action="contact.php">
        <div class="form"> 
        <div class="form-box">
            <h2>Contact Us</h2><br>
            <input class="input" type="text" id="name" name="name" placeholder="Full name"><br><br>
            <input class="input" type="email" id="mail" name="mail" placeholder="Email"><br><br>
            <input class="input" type="number" id="mobile" name="mobile" placeholder="Phone number"><br><br>
            <input class="input" type="text" id="message" name="message" placeholder="Message"><br><br><br><br>
            <button class="form-sub-btn" type="submit" value="submit">Submit</button><br>
            <div class="submit-msg">
        <?php
            if($insert == true){
            echo "<p class='msg'>You have successfully submitted your response.</p>";
        }
        ?>
        </div>
        </div>
        
       
    </form>
    <footer>
        <div id="left-footer">



            <section class="section-footer">
                <div class="layout">
                    <p>
                    <h4>Address</h4><br>Post Box No.4<br>
                    Harita, Hosur - 635 109<br>
                    Ph : 04344-276780 Fax : 04344-276878</p>
                </div>
                <div class="thumbnail">
                    <p>
                    <h4>Call us on</h4><br>
                    <p>Toll Free : 18002587555<br>
                        Ph : +91-44-28332115<br>
                        Fax : +91-44-28331214
                    </p>
                    </p>
                </div>
                <div class="thumbnail">
                    <h4>
                        <a class="mail" href="mailto:customercare@tvsmotor.com">customercare@tvsmotor.com</a>
                    </h4><br>
                    <div class="buttons">
                        <a href="contact.php"> <button class="btn-footer">Contact Us</button></a>
                    </div>
                </div>
            </section>

            <hr>
            <div id="right-footer">
                <img src="Facebook.png" usemap="#map1">
                <map name="map1">
                    <area shape="poly" coords="2,2,2,26,30,29,29,2" alt="facebook"
                        href="https://www.facebook.com/TVSApacheOfficial" target="_blank">
                </map><br>
                <img src="Youtube.png" usemap="#map2">
                <map name="map2">
                    <area shape="poly" coords="2,0,3,18,27,18,27,0" alt="facebook"
                        href="https://www.youtube.com/channel/UCz2PtCT3Vjd3gcK47hf_N_w" target="_blank">
                </map><br>

                <img src="Twitter.png" usemap="#map3">
                <map name="map3">
                    <area shape="poly" coords="2,2,2,27,29,27,30,2" alt="facebook"
                        href="https://twitter.com/tvsapacheseries" target="_blank">
                </map><br>

                <img src="Instagram.png" usemap="#map4">
                <map name="map4">
                    <area shape="poly" coords="2,2,1,28,29,27,30,2" alt="facebook"
                        href="https://www.instagram.com/tvsapacheseries/" target="_blank">
                </map><br>
                <i class="fa fa-phone" aria-hidden="true"></i>

            </div>

    </footer>
    
</body>

</html>