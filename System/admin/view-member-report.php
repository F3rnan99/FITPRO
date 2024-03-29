<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}
?>
<!-- Visit codeastro.com for more projects -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym System Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Perfect Gym Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="hidden" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->

<!--sidebar-menu-->
<?php $page="member-repo"; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Inico</a> <a href="member-report.php" class="current">Informes de miembros</a> </div>
    <h1 class="text-center"><i class="fas fa-file"> Informe del miembro </i></h1>
  </div>
  <div class="container-fluid print-container">
    <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">
      <?php
            include 'dbcon.php';
            $id=$_GET['id'];
            $qry= "select * from members where user_id='$id'";
            $result=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_array($result)){
            ?> 
      
     <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                  <tbody>
                    <tr>
                      <td><img src="../img/gym-logo.png" alt="Gym Logo" width="100"></td>
                    </tr>
                    <br>
                    <div class="pull-left">
                      <h4>Querido <?php echo $row['fullname']; ?>,<br/> <br/> La membresía está actualmente <?php echo $row['status']; ?>! <br/></h4><p>Gracias por elegir nuestros servicios.</p>
                        <br>  
                    </div>
                  </tbody>
                </table>
              </div>
              
              <div class="span8">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">ID de membresía</th>
                      <th class="head1">Servicios tomados</th>
                      <th class="head0 right">Mis planes (hasta)</th>
                      <th class="head1 right">Dirección</th>
                      <th class="head0 right">Total</th>
                      <th class="head0 right">Conteo de asistencia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="text-center">PGC-SS-<?php echo $row['user_id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['services']; ?></div></td>
                      <td><div class="text-center"><?php if($row['plan'] == 0) { echo 'NONE';} else {echo $row['plan'].' Meses';} ?></div></td>
                      <td><div class="text-center"><?php echo $row['address']; ?></div></td>
                      <td><div class="text-center"><?php echo '$'.$row['amount']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['attendance_count']; ?> Días</div></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h4>Último pago realizado:  $<?php echo $row['amount']; ?></h4>
                        <em><a href="#" class="tip-bottom" title="Registration Date" style="font-size:15px;">Miembro desde: <?php echo $row['dor']; ?> </a></em> </td>
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>

            <div class="row-fluid">
            <div class="pull-right">
                  <h4><span>Aprobado por:</h4>
                  <img src="../img/report/stamp-sample.png" width="124px;" alt=""><p class="text-center">Nota: Generado automáticamente</p> 
                </div>
            <h4 class="text-primary mb-4">Encuentranos</h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i> Bogotá, Colombia</p>
                    <p><i class="fa fa-phone"></i> 333-333 3333</p>
                    <p><i class="fa fa-envelope mr-2"></i> soporte@fitpro.com</p>                  
            </div>
          </div>
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>

  <div class="text-center">
    <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
  </div>

</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> | FITPRO S.A.S ®. Todos los derechos reservados.</a> </div>
</div>

<style>
#footer {
  color: white;
}

@media print {
  body * {
    visibility: hidden;
  }

  .print-container, .print-container * {
    visibility: visible;
  }

  .print-container {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
  }
}
</style>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
