<?php
  require_once 'backend/database.php';

  // Report submit
  if(isset($_POST['report_submit'])) {
    require 'backend/database.php'; // Require database

    // Get POST request vars
    $subject  = $_POST['subject'];
    $email  = $_POST['email'];
    $description = $_POST['description'];

    $sql = "INSERT INTO messages (onderwerp, email, bericht, datum) VALUES ('$subject', '$email', '$description', CURDATE())";
    if($conn->query($sql)) {
      // This is only text. Change this later!!
      echo "Report verzonden!";
      header("Location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>vakjob.sr</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.php"><h1><span>VAKJOB</span>.SR</h1></a>
            </div>
          </div>
			
          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">

                <li role="presentation"><a href="index.php" class="active">Home</a></li>               
                <li role="presentation"><a href="vacatures.php">Vacatures</a></li>
                <li role="presentation"><a href="contact.php">Contact</a></li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registreren <b class="caret"></b></a>
               <ul class="dropdown-menu">
            <li><a href="registreer_bed.php">Registreer bedrijf</a></li>
            <li><a href="registreer_stu.php">Registreer student</a></li>
          </ul>
        </li>
				 
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Inloggen <b class="caret"></b></a>
               <ul class="dropdown-menu">
            <li><a href="login_bed.php">Bedrijf login</a></li>
            <li><a href="login_stu.php">Student login</a></li>
          </ul>
        </li>
                
              </ul>
              
            </div>

          </div>

        </div>

      </div>
    </nav>
  </header>

  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
       <!--  <?php
            display();

            function display(){
              $conn = mysql_connect("localhost", "root", "root");
              mysql_select_db("vakjobsr", $conn);
              $query="SELECT * FROM images";
              $result=mysql_query($query, $conn);
              while($row = mysql_fetch_array($result)){
                echo '<img height="300", width="300" src="data:image;base64,'.$row[2]'">';
              }
            


            }
         ?> -->
        <div class="item active" style="background-image: url(images/slider/bg2.jpg)">

          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">VAKJOB<span>.SR</span></h2>
                  <p class="animation animated-item-2">Vind nu jou ideale vakantie job</p>
                  
                  <!-- hier kan die slider komen denk ik - RHEO -->
                </div>
              </div>

              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/work.png" class="img-responsive">
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->

  <div class="feature">
    <div class="container">
      <div class="text-center">
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i class="fa fa-book"></i>
            <h2>Passende Banen</h2>
            <p>zoek een baan die bij jou skills aansluit.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-laptop"></i>
            <h2>Makkelijk online</h2>
            <p>Gewoon met jou laptop of smartphone</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <i class="fa fa-heart-o"></i>
            <h2>Milieu vriendelijk</h2>
            <p>Omdat er geen papier aan te pas komt blijft het milieu intact</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-cloud"></i>
            <h2>Gebruikers vriendelijk</h2>
            <p>Simpele interface met simpele stappen</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Over ons</h2>
        <img src="images/6.jpg" class="img-responsive" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2>Template built with Twitter Bootstrap</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque </p>
      </div>
    </div>
  </div>

  <div class="lates">
    <div class="container">
      <div class="text-center">
        <h2>Het Laatste nieuws</h2>
      </div>
      <!-- <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/4.jpg" class="img-responsive" />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <img src="images/4.jpg" class="img-responsive" />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div> -->

      <?php
        // Announcements pagination
        if(isset($_GET['page_number'])) {
          $page_number = $_GET['page_number'];
        } else {
          $page_number = 0;
        }
        $limit_announcement = $page_number + 3;

        $sql = "SELECT * FROM announcements LIMIT $page_number ,$limit_announcement";
        $query = $conn->query($sql);
        while($result = $query->fetch_assoc()) {
          // print_r($result);
          ?>
          <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <img src="images/4.jpg" class="img-responsive" />
            <h3><?php echo $result['topic']; ?></h3>
            <p><?php echo $result['description']; ?></p>
          </div>
          <?php
        }

        $sql = "SELECT count(id) AS num_announcements FROM announcements";
        $query = $conn->query($sql);
        $result = $query->fetch_assoc();
        $ann_count = $result['num_announcements'];
        $pages = intval($ann_count / 3);
        $leftOvers = $ann_count % 3;
        $pages = ($leftOvers > 0) ? $pages + 1 : $pages;
      ?>
      <div class="col-xs-10 col-xs-offset-3">
          <ul class="pagination pagination-lg">
            <li><a href="#"><i class="fa fa-long-arrow-left"></i>Vorige pagina</a></li>
            <?php
              for($i=0; $i < $pages; $i++) {
                $pagenumber = $i + 1;
                echo ($i == 0) ? '<li><a href="' . $_SERVER['PHP_SELF'] . '?page_number=' . ($i * 3) . '">1</a></li>' : '<li><a href="' . $_SERVER['PHP_SELF'] . '?page_number=' . ($i * 3) . '">'.$pagenumber.'</a></li>';
              }
            ?>
            <li><a href="#">Volgende Pagina<i class="fa fa-long-arrow-right"></i></a></li>
          </ul>
          <!--/.pagination-->
        </div>
    </div>
  </div>

 
  <!--/#partner-->


  <!--/#conatcat-info-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-5">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
              <li><a data-toggle="modal" data-target="#myModal" title="probleem"><i class="fa fa-exclamation-triangle" aria-hidden="false"></i></a></li>
            </ul>
          </div>
        </div>
		


        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy; VAKJOB.SR. Alle Rechten Voorbehouden.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              
            </div>
          </div>
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="horizontal">
        	<div class="modal-header">
          	<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 class="modal-title">Meld uw probleem</h4>
       		</div>
       		<div class="modal-body">
         		<div class="form-group">
             <div class="col-lg-14">
         				<input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp">
         		</div>
               <div class="col-lg-14">
         				<input type="email" class="form-control" name="email" id="email" placeholder="email@adres.com">
         		</div>
         		<div class="form-group">
         			<div class="col-lg-14">
         				<textarea class="form-control" name="description" placeholder="voer uw bericht hier in"></textarea>
         		</div>

        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="report_submit" class="btn btn-success">Versturen</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        	</div>
    </form class = "horizontal">
      </div>
    </div>
  </div>
</div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
