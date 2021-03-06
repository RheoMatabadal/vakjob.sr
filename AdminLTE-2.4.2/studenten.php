<?php 
  session_start();

  require 'includes/database.php';

  /**
   * Actions
   */
  if(isset($_GET['submit_delete'])) {
    $id = $_GET['student_id'];
    $sql = "DELETE FROM students WHERE id = '$id'";
    if($conn->query($sql)) {
      header("Location: " . $_SERVER['PHP_SELF']);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vakjob.sr | Studenten</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

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
              <form action="includes/logout.inc.php" method="POST">
              <li class="user-footer">
               
                <div class="pull-right">
                  <button type="submit" name="submit" class="btn btn-default btn-flat">uitloggen</button>
                </div>
              </li>
            </form>
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
          <a href="index.php">
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
      <!-- Small boxes (Stat box) -->
    
      <!-- Main row -->
     
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
              
            <!-- /.chat -->
            
            <!-- /.box-header -->
              
 <div class="container">
  <h1>Studenten:</h1>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Voornaam</th>
      <th scope="col">Achternaam</th>
      <th scope="col">Acties</th>
     
    </tr>
  </thead>
  <tbody id="tbody">
  <?php

$sql = "SELECT * FROM students";
$query = $conn->query($sql);
while($result = $query->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $result['voornaam']; ?></td>
    <td><?php echo $result['achternaam']; ?></td>
    <td>
      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> Student</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>"><i class="fa fa-pencil fa-fw"></i> Bekijken</a></li>
          <li><a href="javascript:verwijderen('<?php echo $result['id']; ?>')"><i class="fa fa-trash-o fa-fw"></i>Verwijderen</a></li>
        </ul>
      </div>
    </td>
    
  </tr>
  <?php
}
?>
  </tbody>
</table>
</div>
<!-- pagination -->
<nav aria-label="...">
  <ul class="pager">
    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span>Vorige</a></li>
    <li class="next"><a href="#">Volgende <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
  $sql = "SELECT * FROM students";
  $query = $conn->query($sql);
  while($result = $query->fetch_assoc()) {
    ?>
      <!-- Modal -->
      <div id="myModal<?php echo $result['id']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Gegevens:</h4>
          </div>
          <div class="modal-body">
          <div class="form-group">
            <div class="col-md-8">
              <!-- <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> -->
                <div class="form-group input-group-sm">
                  <label for="usr">Gebruikersnaam:</label>
                  <input type="text" class="form-control" value="<?php echo $result['gebruikersnaam']; ?>" disabled>
                </div>
                <div class="form-group input-group-sm">
                  <label for="usr">Voornaam:</label>
                  <input type="text" class="form-control" value="<?php echo $result['voornaam']; ?>" disabled>
                </div>
                <div class="form-group input-group-sm">
                  <label for="pwd">Achternaam:</label>
                  <input type="text" class="form-control" value="<?php echo $result['achternaam']; ?>" disabled>
                </div>
                <div class="form-group input-group-sm">
                  <label for="pwd">E-mail:</label>
                  <input type="text" class="form-control" value="<?php echo $result['email']; ?>" disabled>
                </div>
                <div class="form-group input-group-sm">
                  <label for="pwd">Geboorte datum:</label>
                  <input type="text" class="form-control" value="<?php echo $result['geboorte_datum']; ?>" disabled>
                </div>
                <div class="form-group input-group-sm">
                  <label for="pwd">School:</label>
                  <input type="text" class="form-control" value="<?php echo $result['school']; ?>" disabled>
                </div>
            <!-- </form> -->
          </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
      </div>
    <?php
  }
?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js">  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>
   var $rows = $('#tbody tr');
    $('#search').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        
        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });

function verwijderen(student_id) {
   bootbox.confirm({
    message: "Weet u zeker dat u deze student wilt verwijderen?",
    buttons: {
        confirm: {
            label: 'Ja',
            className: 'btn-success'
        },
        cancel: {
            label: 'Nee',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        console.log('This was logged in the callback: ' + result);
        window.location = "<?php echo $_SERVER['PHP_SELF'].'?submit_delete&student_id='; ?>" + student_id;
    }
  });
 }
    </script>
</body>
</html>
