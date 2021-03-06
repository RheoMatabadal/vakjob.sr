<?php
  require 'backend/database.php';

    //   if($conn->query($sql) == FALSE){
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }

  // Report submit
  if(isset($_POST['report_submit'])) {
  require 'backend/database.php'; // Require database

    // Get POST request vars
    $email  = $_POST['email'];
    $description = $_POST['description'];

    $sql = "INSERT INTO messages (email, bericht) VALUES ('$email', '$description')";
    if($conn->query($sql)) {
      // This is only text. Change this later!!
      echo "Report verzonden!";
      header("Location: vacatures.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VAKJOB.SR</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"/>
  <link href="css/sweetalert.css" rel ="stylesheet">

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
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="vacatures.php" class="active">Vacatures</a></li>
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

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Vacatures</li>
      </div>
    </div>
  </div>
  
<?php
  echo '<section id="blog" class="container">
    <div class="blog">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
        <a href="vacatures_reg.html" class="btn btn-primary" role="button">Vacature toevoegen</a>
          
        <table class="table">
            <thead class="thead-default">
              <tr class="active">';
                
              $sql = 'SELECT * FROM vacatures';
              $result = $conn->query($sql);
                
              if($result->num_rows > 0){
                //testing output of data
                while ($row = $result ->fetch_assoc()){

                  echo '<th><h3>' .$row["name"]. '</h3></th>

                 <th><h4>  <a href="#"><i class="glyphicon glyphicon-trash" style="color: black; float: right;"></i></a>    <a href="javascript:edit()"><i class="glyphicon glyphicon-pencil"  style="color: black; float: right;"></i></a>  <a href="javascript:bekijken()"><i class="glyphicon glyphicon-eye-open" style="color: black; float: right;"></a></i>   </h4></th>
              </tr>
            </thead>
            <tbody>';
              

                
              // if($result->num_rows > 0){
              //   //testing output of data
              //   while ($row = $result ->fetch_assoc()){

                  echo '<tr>
                <td><h4 style="margin-left: -17px;"><i class="glyphicon glyphicon-map-marker" style="color: black;"></i>' .$row["locatie"].'</h4><br>
                    <p>'.$row["description"]. '</p><br>
                    <p>' .$row["begin_time"]. ' - ' .$row["end_time"]. '</p><br>   
                    <p>' .$row["description"]. '</p><br>
                    <a href="javascript:bekijken()" class="btn btn-primary" role="button" >Bekijken</a>

                </td>
              </tr>';
                }
              } else {
                echo "0 results";
              }
              ?>
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
        
          <!--/.blog-item-->

         
          <!--/.blog-item-->

        <div class="col-xs-10 col-xs-offset-1">
          <ul class="pagination pagination-lg">
            <li><a href="#"><i class="fa fa-long-arrow-left"></i>Vorige pagina</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Volgende Pagina<i class="fa fa-long-arrow-right"></i></a></li>
          </ul>
          <!--/.pagination-->
        </div>
        <!--/.col-md-8-->
          <!--/.

          <div class="widget archieve">
            <h3>Archieve</h3>
            <div class="row">
              <div class="col-sm-12">
                <ul class="blog_archieve">
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</span></a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</span></a></li>
                </ul>
              </div>
            </div>
          </div><
          .archieve-->

         

      </div>
      </div>
   
      <!--/.row-->

  </section>
  <!--/#blog-->

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
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/sweetalert.js"></script>
   <script src="js/sweetalert.min.js"></script>

  <script type="text/javascript">
    
    function bekijken(){
      swal({
  title: "Keuken hulp",
  text: "Assisteren in de keuken. Kom en help in de keuken van Krasnapolsky. U krijgt binnenkort een email van ons terug.",
  showCancelButton: true,
  cancelButtonText: "Terug",
  confirmButtonText: "Solliciteer nu",
  closeOnConfirm: false
},
function(){
  location.href = '#';
});
    } 

    
  </script>
  <script type="text/javascript">
    function edit(){
      swal({
  title: "An input!",
  text: "Write something interesting:",
  type: "input",
  type: "input",
  type: "select",
  type: "select",
  showCancelButton: true,
  closeOnConfirm: false,
  inputPlaceholder: "Titel van baan"
  inputPlaceholder: "Beschrijving"
  selectPlaceholder: "datum"
}, function (inputValue) {
  if (inputValue === false) return false;
  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }
  swal("Nice!", "You wrote: " + inputValue, "success");
})
    }
  </script>

</body>

</html>
