<?php 

require "header.php";

$msg ="";

if(isset($_GET['rrc'])){

  $id = mysqli_real_escape_string($con,$_GET['rrc']);

  $sql = "SELECT * FROM waybils where id = '$id'";

  $result = mysqli_query($con,$sql);

  if($result){
    if(mysqli_num_rows($result)==1){

      while ($row = mysqli_fetch_array($result)) {


          /////////////SENDER DETAILS//////
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


$delivery_note = $row['delivery_note'];
$delivery_title =$row['delivery_title'];
$sent_note = $row['sent_note'];
$sent_title =$row['sent_title'];
$status =$row['status'];



  $delivery_date = $row['delivery_date'];;

      

}

    


if(isset($_POST['update'])){

    $id =  $_POST['id'];

    /////////////SENDER DETAILS//////
$sender_name = $_POST["sender_name"];
$sender_email = $_POST["sender_email"];
$sender_address = $_POST["sender_address"];
$sender_mobile = $_POST["sender_mobile"];

/////////////RECIEVERS DETAILS/////////////


$receiver_name = $_POST["receiver_name"];
$receiver_email = $_POST["receiver_email"];
$receiver_address = $_POST["receiver_address"];
$receiver_mobile = $_POST["receiver_mobile"];


/////////////////////WAYBILL DETAILS///////////

$track_number = $_POST["track_number"];
$to_country = $_POST["to_country"];
$from_country = $_POST["from_country"];
$delivery_date = $_POST['delivery_date'];
$sent_date = $_POST['sent_date'];
$bill_of_landing = $_POST['bill_of_landing'];
$quantity = $_POST['quantity'];
$weight_of_product = $_POST['weight_of_product'];
$shipment_type = $_POST['shipment_type'];
$content = $_POST['content'];
$mode_of_payment = $_POST['mode_of_payment'];
$mode_of_shipment = $_POST['mode_of_shipment'];
$total  = $_POST['total'];

$delivery_note = $_POST['delivery_note'];
$delivery_title =$_POST['delivery_title'];
$sent_note = $_POST['sent_note'];
$sent_title =$_POST['sent_title'];
$status =$_POST['status'];
$sql = "SELECT * FROM waybils where track_number = '$track_number'";
$q = mysqli_query($con,$sql);


$sql = "UPDATE waybils SET track_number = '$track_number',
sender_name = '$sender_name',sender_email = '$sender_email', 
sender_mobile = '$sender_mobile',sender_address = '$sender_address',
 receiver_name = '$receiver_name',
 receiver_email = '$receiver_email',receiver_mobile = '$receiver_mobile',
 receiver_address = '$receiver_address', from_country = '$from_country',
 to_country = '$to_country',delivery_date = '$delivery_date',sent_date = '$sent_date',
 bill_of_landing = '$bill_of_landing',quantity = '$quantity',weight_of_product = '$weight_of_product',
 shipment_type = '$shipment_type',
 content = '$content',mode_of_payment = '$mode_of_payment',
 mode_of_shipment = '$mode_of_shipment',
 total = '$total', delivery_title = '$delivery_title', delivery_note =  '$delivery_note',
  sent_title = '$sent_title', sent_note = '$sent_note', status = '$status' WHERE id = '$id'
";

$result = mysqli_query($con,$sql);

if($result){
    $msg = "<div class='alert alert-success'> Sucessfully saved (Tracking number : $track_number)</div>";



}else{
    $error = mysqli_error($con);

    $msg = "<div class='alert alert-danger'>$error<div>";

}






}


?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <form method="POST">

                    <input name="id" value="<?php echo  $id ?>" type="hidden" >

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $msg  ?>
                            </div>
                        </div>
                        
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                 <h5 class="header-title">Sender's Details</h5>
                                   
                                
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $sender_name ?>"  name="sender_name" class="form-control" required placeholder="Senders name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-email">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" value="<?php echo $sender_email ?>" name="sender_email" class="form-control" required placeholder="Senders Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-password">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="sender_address" value="<?php echo $sender_address ?>" required placeholder="Senders Address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-placeholder">Mobile</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="sender_mobile" value="<?php echo $sender_mobile ?>" required placeholder="Senders Phone">
                                        </div>
                                    </div>
                                    
                                
                            </div>
                            <!-- end -->

                            <div class="col-lg-6">
                                 <h5 class="header-title">Reciever's Details</h5>
                                   
                                
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $receiver_name ?>" name="receiver_name" class="form-control" value="receiver_name" required placeholder="Recievers name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-email">Email</label>
                                        <div class="col-md-10">
                                            <input type="email"  value="<?php echo $receiver_email ?>" name="receiver_email" class="form-control"  placeholder="Recievers Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-password">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $receiver_address ?>" class="form-control" name="receiver_address" required placeholder="Recievers Address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-placeholder">Mobile</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $receiver_mobile ?>" class="form-control" name="receiver_mobile" required placeholder="Recievers Phone">
                                        </div>
                                    </div>
                                   
                                
                            </div>
                            <!-- end -->




                        </div>
                        <!-- end row -->

                        <div class="col-md-12">
                            <h5 class="header-title">WayBill Details</h5>
                            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                        <label class="col-md-2 col-form-label">WayBill Tacking number</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $track_number ?>" name="track_number" class="form-control" required placeholder="WayBill Tracking number">
                                        </div>
                                    </div>
                        </div>



                            <div class="row">
                                 
                            <div class="col-lg-6">
                                 
                                   
                                
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">From</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $from_country ?>" name="from_country" class="form-control" required placeholder="From Country">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-email">TO</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $to_country ?>" name="to_country" class="form-control" required placeholder="Destination Country">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-password">Date Sent </label>
                                        <div class="col-md-10">
                                            <input type="date"  value="<?php echo $sent_date ?>" class="form-control" name="sent_date" required placeholder="Date sent ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-password">Delivery Date </label>
                                        <div class="col-md-10">
                                            <input type="date" value="<?php echo $delivery_date ?>" class="form-control" name="delivery_date" required placeholder="Delivery Date">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-placeholder">Bill of Lading</label>
                                        <div class="col-md-10">
                                            <input type="number" value="<?php echo $bill_of_landing ?>" class="form-control" name="bill_of_landing" required placeholder="Bill of Landing">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-email">Quantity of Product</label>
                                        <div class="col-md-10">
                                            <input type="number"  value="<?php echo $quantity ?>" name="quantity" class="form-control" required placeholder="Number Product">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-password">Weight of Product:</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $weight_of_product ?>" class="form-control" name="weight_of_product" required placeholder="Weight of Product">
                                        </div>
                                    </div>
                                    
                                
                            </div>
                            <!-- end -->

                            <div class="col-lg-6">

                                 <div class="form-group row">

                                     <label class="col-md-2 col-form-label">Type of Shipment</label>
                                        <div class="col-md-10">
                                            <input required class="form-control" name="shipment_type"  value="<?php echo $shipment_type ?>">
                                               
                                        </div>
                                    </div>
                                 
                                   
                                
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Content of Shipment</label>
                                        <div class="col-md-10">
                                            <input required value="<?php echo $content ?>" type="text" name="content" class="form-control" required placeholder="Content of shipment">
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">

                                     <label class="col-md-2 col-form-label">Mode of Transport:</label>
                                        <div class="col-md-10">
                                            <select value="<?php echo $mode_of_shipment ?>" required class="form-control" name="mode_of_shipment">
                                                 <?php

                                    if(strlen($mode_of_shipment)>3){

                                     ?>
                                     <option><?php echo $mode_of_shipment ?></option>
                                      <?php
                                  }

                                     ?>
                                                <option value="Sea freight">Sea freight</option>
                                                <option value="Air Freight">Air Freight</option>
                                                <option value="Road freight">Road freight</option>
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="example-placeholder">Total Charges</label>
                                        <div class="col-md-10">
                                            <input required type="text" class="form-control" name="total" value="<?php echo $total ?>" placeholder="Total Charges">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                     <label class="col-md-2 col-form-label">Mode of Payment:</label>
                                        <div class="col-md-10">
                                            <select required value="<?php echo $mode_of_payment ?>" class="form-control" name="mode_of_payment">
                                                 <?php

                                    if(strlen($mode_of_payment)>3){

                                     ?>
                                     <option><?php echo $mode_of_payment ?></option>
                                      <?php
                                  }

                                     ?>
                                                <option>Pay-before-Delivery</option>
                                                <option>Pay-on-Delivery</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                
                            </div>
                            <!-- end -->

                            




                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Delivery details</h5>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Sent Title</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $sent_title ?>" name="sent_title" class="form-control" required placeholder="From Country">
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Sent Note</label>
                                        <div class="col-md-10">
                                            <textarea type="text"  name="sent_note" class="form-control" required placeholder="From Country"><?php echo $sent_note ?></textarea>
                                        </div>
                                    </div>


                            </div>



                            <div class="col-lg-6">
                                <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Delivery Title</label>
                                        <div class="col-md-10">
                                            <input type="text" value="<?php echo $delivery_title ?>" name="delivery_title" class="form-control" required placeholder="Delivery tilte">
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Delivery Note</label>
                                        <div class="col-md-10">
                                            <textarea type="text"  name="delivery_note" class="form-control" required placeholder="Delivery note"><?php echo $delivery_note ?></textarea>
                                        </div>
                                    </div>


                            </div>
                            
                        </div>

                        

                        <div class="row">
                            <div class="col-lg-12">
                                <select name="status" required class="form-control">
                                    <?php

                                    if(strlen($status)>3){

                                     ?>
                                     <option><?php echo $status ?></option>
                                      <?php
                                  }

                                     ?>
                                    <option>In progress</option>
                                     <option>On hold</option>
                                    
                                </select>
                            </div>
                            
                        </div>

                        <div class="row justify-content-center">
                                <button class="btn btn-primary" name="update" type="submit" style="width: 400px; margin-top: 20px;" >
                                    Update
                                    
                                </button>
                            </div>





                       
                    
                        

                    </div>
                    <!-- end container-fluid -->

                    
<?php 


require "footer.php";

}
}
}

?>