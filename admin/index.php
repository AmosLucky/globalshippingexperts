<?php 

require 'header.php';

if(isset($_POST['delete'])){
     $id = $_POST['id'];

   $sql = "DELETE from waybils where id = '$id'";
   $result = mysqli_query($con,$sql);

   if($result){

    echo "<div class='alert alert-danger text-center'>Successfuly Deleted</div>";

   }else{
    $error = mysqli_error($con);
    echo "<div class='alert alert-danger'>Failed to Deleted ($error)</div>";

   }

}


if(isset($_GET['status']) && isset($_GET['i'])){
     $num = mysqli_real_escape_string($con,$_GET['status']);
      $id = mysqli_real_escape_string($con,$_GET['i']);
     $status = "In progress";
     if($num =="2"){
        $status = "Delivered";

     }

   $sql = "UPDATE waybils set status =  '$status' where id = '$id'";
   $result = mysqli_query($con,$sql);

   if($result){

    echo "<div class='alert alert-success text-center'>Successfuly Updated</div>";

   }else{
    $error = mysqli_error($con);
    echo "<div class='alert alert-danger'>Failed to Deleted ($error)</div>";

   }

}

?>

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <!-- start  -->
                       <!--  <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Shippings</h4>
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">

                                
                                <div class="mt-5">
                                    <h5 class="font-14">List of Waybills</h5>
                                   

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Reciver</th>
                                                <th>Track number</th>
                                                <th>Status</th>
                                                <th>Change Status</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php 
$sql = "SELECT * FROM waybils ORDER BY id DESC";

    $result = mysqli_query($con,$sql);

    if($result){
        

            while ($row = mysqli_fetch_array($result)) {


                /////////////SENDER DETAILS//////
                $id = $row['id'];
$sender_name = $row['sender_name'];
$sender_email = $row['sender_email'];
$sender_address = $row['sender_address'];
$sender_mobile = $row['sender_mobile'];

/////////////RECIEVERS DETAILS/////////////


$receiver_name = $row['receiver_name'];
$receiver_email = $row['receiver_email'];
$receiver_address = $row['receiver_address'];
$receiver_mobile = $row['receiver_mobile'];


/////////////////////WAYBILL DETAILS///////////

$track_number = $row['track_number'];
$to_country = $row['to_country'];
$from_country = $row['from_country'];
$delivery_date = $row['delivery_date'];
$sent_date = $row['sent_date'];
$bill_of_landing = $row['bill_of_landing'];
$quantity = $row['quantity'];
$weight_of_product = $row['weight_of_product'];
$shipment_type = $row['shipment_type'];
$content = $row['content'];
$mode_of_payment = $row['mode_of_payment'];
$mode_of_shipment =$row['mode_of_shipment'];
$total  = $row['total'];


$delivery_note = $row['delivery_note'];;
$delivery_title =$row['delivery_title'];;
$sent_note = $row['sent_note'];;
$sent_title =$row['sent_title'];;
$status =$row['status'];

?>
                                     
                                            <tr>
                                                <td><?php echo $receiver_name  ?></td>
                                                <td><?php echo $track_number  ?></td>
                                                <td>
                                                    <?php echo $status  ?>
                                                    
                                                   
                                                    
                                                </td>
                                                <td>
                                                    
                 <div class="input-group">
                  <div class="input-group-prepend">
               <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i>
               </button>
                     <ul class="dropdown-menu" style="">
                        <?php  if($status=="In progress"){?>
                     <li><a href="index?status=2&&i=<?php echo $id ?>" class="dropdown-item">Delivered</a></li>
                 <?php } else{ ?>
                     <li><a href="index?status=1&&i=<?php echo $id ?>" class="dropdown-item">In progress</a></li>
                 <?php } ?>
                 <li><a href="../print?rrc=<?php echo $id ?>" class="dropdown-item">Print reciept</a></li>
                 <li><a href="edit.php?rrc=<?php echo $id ?>" class="dropdown-item">Edit Record</a></li>

                 <li><type="button" class="btn text-dark dropdown-item" data-toggle="modal" data-target="#myModal<?php echo $id ?>">Delete record</a></li>
                   

                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                 
                                                </td>
                                                
                                            </tr>

                                            <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal<?php echo $id ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>You are about to delete this record.</p>
      </div>
      <div class="modal-footer">
       <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit" name="delete" class="btn btn-default text-danger">Delete</button>
       </form>
      </div>
    </div>

  </div>
</div>

                                            <?php }} ?>
                                            
                                        </tbody>
                                    </table>

                                </div>



                             
                                <!-- end -->

                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                    

                 <?php 

                 require "footer.php";

             ?>