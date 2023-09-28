
<?php 

require "conn.php";

?>
  <!DOCTYPE html>
<html>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>Print Invoice</title>
  
  <!-- Define Charset -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <!-- Page Description and Author -->
  <meta name="description" content="Gargo Pro"/>
  <meta name="keywords" content="Courier Delivery & Logistic Company" />
  <meta name="author" content="Viz">  
  
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
<style>
      
      #background{
    position:absolute;
    z-index:0; 
    display:block;
    min-height:70%; Z
    min-width:70%; 
}

#content{X
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:grey;
    font-size:36px;
    transform:rotate(300deg);
    -webkit-transform:rotate(300deg);
}
      
  </style>
  
  
 


  </head>
  
      
      
      <?php 

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
        // code...
$class = "line";
      
if($status == "In progress"){
  $class = "line2";
  $delivery_title = "";
  $delivery_note = "";
  $delivery_date = "------";

}

    

      ?>
      <body class=""  style="background-color:white;"  onload="window.print();">

  
    <div class="wrapper container" id="background"> <p id="bg-text"></p>

      <!-- Main content -->
      <section class="invoice" >
        <!-- title row -->
        <div class="row"  >
          <div class="col-xs-12">
            <h2 class="page-header">
        <span><img src="img/logo.png"
                                alt="Air shipment tracking system, Sea shipment tracking system, Cargo tracking system"
                                title="Worldwide ExpressForce & shpiment tracking system" width="190" height="85" border="0"> 
        
        
    
        <img class="pull-right"  src="img/logo.png" alt=""  height="185"/> 
        
        <h3 style="color:red;"><strong> Tracking Number:  <?php echo $track_number ?></strong>
        </h3></span>
        
            </h2>
          </div><!-- /.col -->
        </div>
        
          

         
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
         <center> 
             <b style="color:green;"><?php echo $company_name ?><br>
           Email: <?php echo $company_email ?><br>
Website: www.deliveryhomelogistics.com</b></center>
            </h2>
          </div><!-- /.col -->
        </div>
        
        
         <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <strong style="color:blue;">FROM (SENDER)</strong>
            <address>
              <h3><strong style="color:green;"><?php echo $sender_name ?> </strong></h3><br>

              <b>Address:</b>&nbsp;&nbsp;<?php echo $sender_address ?><br/>
        <b>Phone No:</b>&nbsp;&nbsp;<?php echo $sender_mobile ?><br/>
        <b>Origin Office:</b> &nbsp;&nbsp;<?php echo $from_country ?>     </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <strong style="color:blue;">TO (CONSIGNEE)</strong>
            <address>
              <h3><strong style="color:green;">&nbsp;&nbsp;<?php echo $receiver_name ?></strong></h3><br>
               
        <b>Address:</b>&nbsp;&nbsp;<?php echo $receiver_address ?>. <br/>
              <b>Phone:</b> &nbsp;&nbsp;<?php echo $receiver_mobile ?><br/>
       
              <b>Destination Office:</b>&nbsp;&nbsp;<?php echo $to_country ?>        </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
      <table>
                                          <tr>
                                                <td>
                                                    <center>
                                                        <img src="assets/barcode810e.png?text=testing" alt="testing" /><br>
                                                        <strong><?php echo $track_number ?></strong><br>
                                                    </center>
                                                </td>
                                                
                                            </tr>
                                        </table>
      <br/>
            <b>Order ID:</b>&nbsp;&nbsp;<?php echo $id ?><br/>
            <b>Est. Delivery Date:</b>&nbsp;<?php echo $delivery_date ?> <br/>
      <b>Payment Mode:</b> <small class="label label-danger"><i class="fa fa-money"></i>&nbsp;&nbsp;<?php echo $mode_of_payment ?></small><br/> 
      <b>Mode of Transport:</b>&nbsp;<?php echo $mode_of_shipment ?><br/>
      
          </div><!-- /.col -->     
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Type of Shipment</th>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Total Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $quantity ?></td>
                  <td><?php echo $shipment_type ?></td>
                  <td><?php echo $content ?> </td>
                  <td></td>
          <td><?php echo $total ?></td>
                </tr>               
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
    
          
    
    <br>
    <br>
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <p class="lead"><strong>Payment Methods:</strong></p>
            <img src="assets/securepayment.png" alt="Methods payments" /> 
           
         
          </div>
          
          <div class="col-xs-6">
            <p class="lead"><strong>Official Stamp/ <?php echo $sent_date ?> </strong></p>
            <img src="assets/stamp1.png" alt="" height="100" />           
             
          </div>
          
          
          
          
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div>
     <script src="js/app.min.js" type="text/javascript"></script>
  </body>
    <?php }}else{
       echo "<h2 >No receipt match</h2>";

    } }else{
       echo "<h2>No receipt match</h2>";

    } }else{
       echo "<h2>No receipt match</h2>";

    } ?>
    <!-- ./wrapper -->

    <!-- AdminLTE App -->
   

</html>
