<!DOCTYPE html>
<?php

$servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "vakjobsr";

  // The connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  //testing the connection
  if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
  }

  if(isset($_POST["submit"])){

    $titel = $_POST["titel"];
    $message = $_POST["message"];
    $img = $_POST["img"];
    $foto = $_POST["foto"];

    $sql = "INSERT INTO announcements (user_id, topic, description, img) VALUES (1, '$titel', '$message', '$foto');";

    if($conn->query($sql) == TRUE){
      echo "Report verzonden";
    } else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // if(isset($_POST["submitslider"])){

  //   $titel = $_POST["titel"];
  //   $message = $_POST["message"];
  //   $img = $_POST["img"];
  //   $foto = $_POST["foto"];

  //   $sql = "INSERT INTO announcements (user_id, topic, description, img) VALUES (1, '$titel', '$message', '$foto');";

  //   if($conn->query($sql) == TRUE){
  //     echo "Report verzonden";
  //   } else{
  //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  //   }
  // }

  $sql = 'SELECT * FROM announcements';
  $result = $conn->query($sql);

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vakjob.sr | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>VJ</b>SR</span>
      <!-- logo for regular state and  mobile devices -->
      <span class="logo-lg"><b>VAKJOB</b>.SR</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
            
          <!-- Tasks: style can be found in dropdown.less -->
         
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  
          <!-- User Account: style can be found in dropdown.less -->
         
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">uitloggen</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="start.php">
            <i class="fa fa-home"></i> <span>Start</span>
            
          </a>
        </li> 
      
        
         <li>
          <a href="gebruikers.php">
            <i class="fa fa-user-circle"></i> <span>Gebruikers</span>
            
          </a>
        </li> 
        <li>
          <a href="bedrijven.php">
            <i class="fa fa-building"></i> <span>Bedrijven</span>
            
          </a>
        </li> 
        <li>
          <a href="studenten.php">
            <i class="fa fa-graduation-cap "></i> <span>Studenten</span>
            
          </a>
        </li> 
         <li>
          <a href="vacatures.php">
            <i class="fa fa-list "></i> <span>Vacatures</span>
            
          </a>
        </li>
        <li>
          <a href="berichten.php">
            <i class="fa fa-comment  "></i> <span>Berichten</span>
            
          </a>
        </li>
        <li>
          <a href="updates.php">
            <i class="fa fa-refresh  "></i> <span>Pagina updates</span>
            
          </a>
        </li>

       
        
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
 <div class="container">
  <h1>Updates:</h1>
<div class="container">
    
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="zoek">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
  <h2>Update toevoegen:</h2>
  <div class="col-md-8">

<form  method="POST" enctype="multipart/form-data">
  <input type="hidden" value="1000000" name="MAX_FILE_SIZE">
  <input type="file" name="uploadedfile">
  <button type="submit" name="submit"> Upload voorgevel foto </button>
</form>
<?php
if (isset($_POST['submit'])) {
  $target_path="fotos/";
  $target_path=$target_path.basename($_FILES['uploadedfile']['name']);
  if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $conn = new mysqli("localhost", "root", "root", "vakjobsr");
    $sql = "INSERT into images ('path') values ('$target_path')";
    if ($conn->query($sql)==TRUE) {
      echo "<br><br>";

    }
    else
    {
      echo "eRROR:".$sql.$conn->error;
    }
  }
}
?>
<br>
<br>

<h4>Bekend making plaatsen</h4>
  <form action = "" method="post">
    <div class="form-group input-group-sm">
      <label placeholder="Titel" for="ttl">Titel:</label>
      <input type="text" name="titel" class="form-control" id="titel">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Uw bericht"></textarea>
    </div>
     <div>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Foto toevoegen <input name = "img" type="file" id="imgInp">
                </span>
            </span>
            <input type="text" name ="foto" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
    </div>

    <div>
      <button name="submit" type="submit" class="btn btn-default">Voeg toe</button>
    </div></form>

    <!-- <div class="input-group form-group">
      <button name="submit" type="submit" class="btn btn-default">Voeg toe</button>
    </div>
    <form method="POST">
    <div >
      <button name="submitslider" type="submit" class="btn btn-default" style="background-color: red; color: white;">Voeg toe aan slider</button>
    </div>
    </form> -->
  </form>
  </div>

<br>
<br>

<?php

echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">Artikel</th>
      <th scope="col">Omschrijving</th>
      <th scope="col">Datum</th>
      <th scope="col">Actie</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>';

    if($result->num_rows > 0){
      while ($row = $result -> fetch_assoc()){

    
     
     echo '<td>' .$row["topic"]. '</td>
      <td>' .$row["description"]. '</td>
      <td>' .$row["created_at"]. '</td>
      <td>';?>
        <form action = "updatesdelete.php" method="post">
      <span class="glyphicon glyphicon-trash" style="color: red;"></span>
      <input type="hidden" value="<?php echo $row["id"]?> " name="id">
      <input class="btn btn-primary" type="submit" value="Delete">
      </form>
 
      </td>
    </tr>

    <?php
  }
  } else {
    echo "0 result";
  }?>
  </tbody>
</table>
     

 



<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!--De script for picture pop-up-->
<script type="text/javascript">
$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   

  });</script>

  });

</script>
</body>
</html>
