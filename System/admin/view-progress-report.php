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
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<?php $page='c-p-r'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Ir al Inicio" class="tip-bottom"><i class="fas fa-home"></i> Inicio</a> <a href="member-report.php" class="current">Informes de miembros</a> </div>
    <h1 class="text-center">Informe de progreso<i class="fas fa-tasks"></i></h1>
  </div>
  <div class="container-fluid">
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
                  <img src="../img/gym-logo.png" alt="Gym Logo" width="100">
                  <h4 class="text-primary mb-4"> Encuentranos</h4>
                <p><i class="fa fa-map-marker"></i> Bogotá, Colombia</p>
                <p><i class="fa fa-phone"></i> +012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i> soporte@fitrpo.com</p>
                  </tbody>
                </table>
              </div>
              
              <div class="span8">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">ID de membresía</th>
                      <th class="head1 right">Peso inicial</th>
                      <th class="head0 right">Peso actual</th>
                      <th class="head1">Servicios tomados</th>
                      <th class="head0 right">Planes (Hasta)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="text-center">PGC-SS-<?php echo $row['user_id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['ini_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['curr_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['services']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['plan']; ?> Mes</div></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h5><?php echo $row['fullname']; ?>'s Estructura corporal declarada a partir de <?php echo $row['ini_bodytype']; ?> a <?php echo $row['curr_bodytype']; ?>. <br /> Con diferencias de peso total de <?php include 'actions/weight-diff.php';?> KG <br /> Según registros de <?php echo $row['progress_date']; ?></h5>
                        
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>

            <div class="row-fluid">
                <div class="pull-left">
                <br>
                
                <h4>Miembro del gimnasio: <?php echo $row['fullname']; ?> <br> Variación de peso de <em style="color:green"><?php include 'actions/progress-percent.php';?>%</em> según las actualizaciones actuales! <i class="fa fa-spinner fa-spin" style="font-size:24px"></i><br/> <br/>  <br/></h4><p>Gracias por elegir nuestros servicios.<br/>- en nombre de todo el equipo.</p>
                </div>
                <div class="pull-right">
                  <h4><span>Aprobado Por:</h4>
                  <img src="../img/report/stamp-sample.png" width="124px;" alt=""><p class="text-center">Nota: Generado automáticamente</p> </div>
                  
            </div>
          </div>
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Developed By FITPRO | SENA 2024</a> </div>
</div>

<style>
#footer {
  color: white;
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
