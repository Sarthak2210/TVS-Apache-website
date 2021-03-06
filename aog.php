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
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $model = $_POST['model'];
  $ride = $_POST['ride'];
  $sql = "INSERT INTO `tvs`.`aog` (`id`, `name`, `email`, `phone`, `city`, `state`, `model`, `ride`) VALUES ('', '$name', '$email', '$phone', '$city', '$state', '$model', '$ride');";
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
    <link rel="stylesheet" href="aog.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Apache Owners Group</title>
</head>

<body>
    <nav class="navbar back-nav">
        <ul class="nav-list">
            <div class="logo"><img src="apache.jpg" alt="logo"></div>
            <li><a href="Index.html">Home</a></li> 
            <li><a href="aog.php">AOG</a></li>
            <li><a href="tvs.html">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            
        </div>
    </nav>
    
    <section class="background firstsection">
        
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Welcome to TVS Community</p><br>
                <p class="text-small">TVS Community is for passionate and like-minded riders of the TVS Apache Owners, sharing a common platform to explore and spread their love for motorcycling.
                    </p><br>
                <div class="buttons">
                   <a href="#section-1"> <button class="btn">Explore</button></a>
                </div>
            </div>
            <div class="thumbnail-1 logo-1">
                <img class="imgfluid" src="aog.png" alt="bike">
            </div>
        </div>
    </section>
    <section class="section" id="section-1">
        <div class="paras">
            <p class="sectiontag text-big">APACHE OWNERS GROUP</p><br>
            <p class="sectionsubtag text-small">Apache Owner Group, is a community of passionate and like-minded riders of the TVS Apache, sharing a common platform to explore and spread their love for motorcycling.

                A community knitted by Apache owners from all over India and other nations, the Apache Owners Group
                riders unite to ride together into explorations and adventures while creating bonds for a lifetime.
                This is the AOG Brotherhood.</p><br><br><h1 class="gall">Gallery</h1>
        </div>
    </section>
    <section class="section-slide">
    
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img src="1.jpg" alt="1staog">
                    </div>
                        <div class="slide">
                          <img src="2.jpg" alt="2ndaog">
                        </div>
                        <div class="slide">
                          <img src="3.jpg" alt="3rdaog">
                        </div>
                        <div class="slide">
                          <img src="4.jpg" alt="4thaog">
                        </div>
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
              document.getElementById('radio' + counter).checked = true;
              counter++;
              if(counter > 4){
                  counter = 1;
              }
            },5000);
        </script>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Marquee Ride</p>
            <p class="sectionsubtag text-small">Embark on spine-tingling journeys that put you grit and skill to the ultimate test. Where the bonds between man and machine solidify as together you set off to conquer neverbefore ventured terrains. Share this gruling but glorious ride as you leave the busy world behind. Rest assured, you'll be creating an unforgettable memory at every milestone.</p>
        </div>
        <div class="thumbnail">
            <img class="imgfluid" src="ride.jpg" alt="bike">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Breakfast Ride</p>
            <p class="sectionsubtag text-small">A short but thrilling escape from the humdrums of the city to open roads with a gang that's rich with expeerience, expertise and adventures. Whet your riding skills on the way, swap stories and enjoy a jamming session or two over breakfast.</p>
        </div>
        <div class="thumbnail">
            <img class="imgfluid" src="ride2.jpg" alt="bike">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Overnight Ride</p>
            <p class="sectionsubtag text-small">A rove under the stars where riders at the beginning of the trip become your comrades as you return. Engage in riveting sessions with expert riders, talking from the bolts of the machine to bolting down the racetrack. Enjoy adventure activities, live music and share your chase of peak performance over bornfires and eveing cocktails.</p>
        </div>
        <div class="thumbnail">
            <img class="imgfluid" src="ride3.jpg" alt="bike">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Chapter Ride</p>
            <p class="sectionsubtag text-small">A weekend filled with expeeriences from high-speed action to slow unwinding of body and soul. Apache riders from various cities within that zone come together to ride to picturesque landscapes while pushing their limits of performance. Through this adrenaline-pumped ride you're guaranteed to bond with motely crew of motorheads that share your devotion for riding</p>
        </div>
        <div class="thumbnail">
            <img class="imgfluid" src="ride4.jpg" alt="bike">
        </div>
        
    </section>
    


    <section class="regis">
        <div class="buttons">
            
                <button class="button" data-modal="modalOne">Register Here</button>
        
        </div>
    </section>
    
        </div>
    </div>
      <div id="modalOne" class="modal">
        <div class="modal-content">
          <div class="contact-form">
            <a class="close">&times;</a>
            <form id="text" method="post" action="aog.php">
              <img src="aog.png" class="logo-pop">
              <div>
                <input class="input" type="text" name="name" placeholder="Full name">
                <input class="input" type="email" name="email" placeholder="Email">
                <input class="input" type="number" name="phone" placeholder="Phone number">
                <input class="input" type="text" name="city" placeholder="Enter your City">
                <select name="state" class="drop">
                  <option value="state">Select State</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
               
               </select>
               <select name="model" class="drop">
                  <option value="state">Select Bike Model</option>
                  <option value="TVS Apache RR 310">TVS Apache RR 310</option>
                  <option value="TVS Apache 200 4V">TVS Apache 200 4V</option>
                  <option value="TVS Apache RTR 180">TVS Apache RTR 180</option>
                  <option value="TVS Apache 160 4V">TVS Apache 160 4V</option>
                  <option value="TVS Apache RTR 160">TVS Apache RTR 160</option>
              </select>
              <select name="ride" class="drop">
                  <option value="ride">Select Ride</option>
                  <option value="Marquee Ride">Marquee Ride</option>
                  <option value="Breakfast Ride">Breakfast Ride</option>
                  <option value="Overnight Ride">Overnight Ride</option>
                  <option value="Chapter Ride">Chapter Ride</option>
              </select>
              </div>
              <button class="form-sub-btn" type="submit" value="submit">Submit</button>
              <div class="submit-msg">
        <?php
            if($insert == true){
            echo "<p class='msg'>You have successfully submitted your response.</p>";
        }
        ?>
        </div>
            </form>
          </div>
        </div>
      </div>
      <script>
        let modalBtns = [...document.querySelectorAll(".button")];
        modalBtns.forEach(function(btn) {
          btn.onclick = function() {
            let modal = btn.getAttribute('data-modal');
            document.getElementById(modal)
              .style.display = "block";
          }
        });
        let closeBtns = [...document.querySelectorAll(".close")];
        closeBtns.forEach(function(btn) {
          btn.onclick = function() {
            let modal = btn.closest('.modal');
            modal.style.display = "none";
          }
        });
        window.onclick = function(event) {
          if(event.target.className === "modal") {
            event.target.style.display = "none";
          }
        }
      </script>

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
                        <a href="contact.html"> <button class="btn-footer"><b>Contact Us</b></button></a>
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

            </div>

    </footer>

</body>

</html>