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
  <h1><a href="dashboard.html">FITPRO | ADMIN</a></h1>
</div>
<!--close-Header-part--> 
<!-- Visit codeastro.com for more projects -->

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
<?php $page='manage-customer-progress'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<?php
include 'dbcon.php';
$id=$_GET['id'];
$qry= "select * from members where user_id='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
?> 

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Inicio</a> <a href="customer-progress.php">Progreso del cliente</a> <a href="#" class="current">Actualizar Progreso</a> </div>
    <h1 class="text-center"><i class="fas fa-signal"> Actualizar el progreso del cliente</i></h1>
  </div>
  
  
  <div class="container-fluid" style="margin-top:-38px;">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fas fa-signal"></i> </span>
            <h5>Progreso </h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              
			  <div class="span2"></div>
			  
              <div class="span8">
                <table class="table table-bordered table-invoice">
				
                  <tbody>
				  <form action="userprogress-req.php" method="POST">
                    <tr>
                    <tr>
                      <td class="width30">Nombre Completo:</td>
                      <td class="width70"><strong><?php echo $row['fullname']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Servicio:</td>
                      <td><strong><?php echo $row['services']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Peso Inicial: (KG)</td>
                      <td><input id="weight" type="number" name="ini_weight" value='<?php echo $row['ini_weight']; ?>' /></td>
                    </tr>

                    <tr>
                      <td>Peso actual: (KG)</td>
                      <td><input id="weight" type="number" name="curr_weight" value='<?php echo $row['curr_weight']; ?>' /></td>
                    </tr>
					
                    <tr>
                      <td>Tipo de cuerpo inicial:</td>
                      <td><input id="ini_bodytype" type="text" name="ini_bodytype" value='<?php echo $row['ini_bodytype']; ?>' /></td>
                    </tr>
                  
              </div>
			  
                      </td>
					  
					  <tr>
                     
                    </tr>

                    <tr>
                      <td>Tipo de Cuerpo Actualmente:</td>
                      <td><input id="curr_bodytype" type="text" name="curr_bodytype" value='<?php echo $row['curr_bodytype']; ?>' /></td>
                    </tr>
                  
              </div>
			  

                      </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
			  
			  
            </div> <!-- row-fluid ends here -->
			
			
            <div class="row-fluid">
              <div class="span12">
                
				
			
                <div class="text-center">
                  <!-- user's ID is hidden here -->
             <input type="hidden" name="id" value="<?php echo $row['user_id'];?>">
                  <button class="btn btn-primary btn-large" type="SUBMIT" href="">Guardar Cambios</button> 
				</div>
				  
				  </form>
              </div><!-- span12 ends here -->
            </div><!-- row-fluid ends here -->
			
      <?php
}
      ?>
          </div><!-- widget-content ends here -->
		  
		  
        </div><!-- widget-box ends here -->
      </div><!-- span12 ends here -->
    </div> <!-- row-fluid ends here -->
  </div> <!-- container-fluid ends here -->
</div> <!-- div id content ends here -->



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


</body>
</html>