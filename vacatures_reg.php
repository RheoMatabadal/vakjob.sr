<?php

	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vakjobsr";
 // require_once 'backend/database.php';

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
      header("Location: vacarues_reg.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php

	// The connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//testing the connection
	if ($conn->connect_error){
		die("connection failed: " .$conn->connect_error);
	}

	if(isset($_POST['submit'])) {
		  

		$name = $_POST['name'];
		$locatie = $_POST['locatie'];
		$datefilter = $_POST['datefilter'];
		$start_werktijd = $_POST['start_werktijd'];
		$eind_werktijd = $_POST['eind_werktijd'];
		$message = $_POST ['message'];

		$sql = "INSERT INTO vacatures_test (name, locatie, datefilter, start_werktijd, eind_werktijd, message) VALUES ('$name', '$locatie', '$datefilter', '$start_werktijd', '$eind_werktijd', '$message');";

		if($conn->query($sql) == TRUE){
			echo "Report verzonden";
			header('Location:http://localhost/vakjob.sr/vacatures.php');
		} else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}







?>


    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy;VAKJOB.SR. Alle Rechten Voorbehouden.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              <a href="https://bootstrapmade.com/bootstrap-business-templates/">Bootstrap Business Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
            </div>
            <div class="form-group">
              <div class="col-lg-14">
                <input type="text" class="form-control" name="onderwerp" id="onderwerp" placeholder="onderwerp">
            </div>
          </div>
            <div class="form-group">
              <div class="col-lg-14">
                <textarea class="form-control" name="description" placeholder="voer uw bericht hier in"></textarea>
            </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY">
  </script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>
  <script type="text/javascript" src="js/moment.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
 
<!-- Include Date Range Picker -->
  <script type="text/javascript" src="js/daterangepicker.js"></script>
  <script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>

  <script type="text/javascript">
     $('.clockpicker').clockpicker();
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

   
</script>

</body>

</html>