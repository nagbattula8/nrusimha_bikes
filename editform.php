<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php

$id = $_GET['id'];
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM booking WHERE id='$id'";
$result = mysqli_query($conn ,$query);
  ?>
  
 <div class="clearfix"></div>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

			<?php
			
			get_internal_sidebar();
			
			?>
			
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
				
				<?php
			
			get_internal_navigation();
			
			?>
    
					
				  
			<div class="right_col" role="main> 
				 <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Basic Elements <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="functions/edit.php" method="get" class="form-horizontal form-label-left">

						<?php 
						  while ($row = mysqli_fetch_assoc($result)){
							
						  ?>
                      
                        <input type="hidden" name="nbo_id" value="<?php echo $row['id'];?>">
                      					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Curretn Booking</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control"  name="nbo_current_booking" value="<?php echo $row['current_booking'];?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Booking ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="nbo_booking_id" value="<?php echo $row['booking_id'];?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="nbo_payment_status" value="<?php echo $row['payment_status'];?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Order History ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="nbo_order_history_id"  value= "<?php echo $row['order_history_id'];?>" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <!--<button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button> -->
                          <button type="submit" class="btn btn-success">Edit Booking Information</button>
                        </div>
                      </div>

                    </form>
					
					<?php 
						  }
					  mysqli_close($conn);
					  ?>
                  </div>
                </div>
					
		
	<?php 
			get_internal_footer();
	?>