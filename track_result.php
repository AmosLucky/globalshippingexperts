<?php 
require "header.php";



if(isset($_POST['track'])){

	$track_number = $_POST['track_number'];

	$sql = "SELECT * FROM waybils where track_number = '$track_number'";

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

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" class="page-track no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Track
							<span>Your Package Info</span>
                            </h1>
                            <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content"  class="no-padding">
            <!-- section begin -->
            <section id="section-tracking">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <input type="text" name="track" value="" placeholder="Insert tracking number here...">
                                <input type="submit" id="track-it" name="submit" value="TRACK IT">
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div> -->

                <div id="section-tracking-resul" class="light-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="divider-double"></div>
                                <div class="text-center">
                                    <h3><span class="grey">Product ID:</span> <?php echo $track_number ?></h3>
                                </div>


                                <div class="divider-double"></div>

                                <div class="wrapper-line padding40 rounded10">


                                    <ul class="progress">
                                        <li><a href="#"><?php echo $from_country ?></a></li>
                                        <li class="beforeactive"><a href="#"><img src="assets/arw.gif" style="height: 10px"></a></li>
                                        <li class="active"><a href="#"><?php echo $to_country ?></a></li>
                                       
                                    </ul>

                                    <div class="divider-double"></div>

                                    <ul class="timeline custom-tl">

                                        <!-- <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                                Nov 03, 2015
		                                        <span>20:07 pm</span>
                                            </div>
                                            <div class="timeline-badge success"><i class="fa fa-check-square-o wow zoomIn"></i></div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">
                                                    The shipment has been successfully delivered 
			  <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                                </div>
                                            </div>
                                        </li> -->

                                        <!-- <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                                Nov 03, 2015
		  <span>20:07 pm</span>
                                            </div>
                                            <div class="timeline-badge warning"><i class="fa fa-warning wow zoomIn"></i></div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">
                                                    The shipment could not be delivered 
			  <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                                </div>
                                            </div>
                                        </li> -->

                                        <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            <?php echo $delivery_date ?>
		  <!-- <span>20:07 pm</span> -->
                                            </div>
                                            <div class="timeline-badge">

                                            <?php
										if($status == "Delivered" || $status == "On hold"){
									
									echo '<i class="fa fa-plane wow zoomIn"></i>';
									} 
                                    

										?>

                                                
                                            </div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">
                                                    <b><?php echo $delivery_title ?></b>
                                                    <small><?php echo $delivery_note ?></small>
			  <span class="location"><?php echo $to_country ?> 
              <!-- <a href="" class="popup-gmaps">view on map</a> -->
            </span>
                                                </div>
                                            </div>
                                        </li>



                                        <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" 
                                            data-wow-delay=".2s">
                                              
                                            </div>
                                            <div class="timeline-badge">
                                                <!-- <i class="fa fa-plane wow zoomIn"></i> -->
                                            </div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">

                                                <?php
										if($status == "Delivered" || $status == "On hold"){
									
									echo 'Progress continues';
									} 
                                    

										?>
                                                   
			  <span class="location"></span>
                                                </div>
                                            </div>
                                        </li>

                                        <li></li>





                                        <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            <?php echo $sent_date ?>
		  <!-- <span>18:05 pm</span> -->
                                            </div>
                                            <div class="timeline-badge">
                                            <?php

                                        if($status == "In progress"){
                                            echo '<i class="fa fa-plane wow zoomIn"></i>';
                                        }

                                        ?>
                                                
                                            </div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">
                                                <?php echo $sent_title ?>
			  <span class="location">
              <small>
										<?php echo $sent_note ?> 
									</small>

              </span>
              <span class="location"><?php echo $from_country ?>
                                                </div>
                                            </div>
                                        </li>

                                       
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="container">

            <table class="table table-striped">
    <thead>
      <tr>
        <th colspan="2" class="bg-primary">
        	Waybill: <?php echo $track_number ?>
        </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Est. Delivery Date :</b></td>
        <td><?php echo $delivery_date ?></td>
       
      </tr>
      <tr>
        <td><b>Origin Service Area:</b></td>
        <td><?php echo $from_country ?></td>
        
      </tr>
       <tr>
        <td><b>Destination Area:</b></td>
        <td>  <?php echo $to_country ?></td>
        
      </tr>
      
    </tbody>
  </table>

  <table class="table table-striped">
    <thead>
      <tr>
        <th colspan="2" class="bg-primary">
        	Sender's Details
        </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Name:</b></td>
        <td><?php echo $sender_name ?></td>
       
      </tr>
      <tr>
        <td><b>Email:</b></td>
        <td><?php echo $sender_email ?></td>
        
      </tr>
       <tr>
        <td><b>Address:</b></td>
        <td><?php echo $sender_address ?></td>
        
      </tr>
      <tr>
        <td><b>Mobile:</b></td>
        <td><?php echo $sender_mobile ?></td>
        
      </tr>
      
    </tbody>
  </table>

  <table class="table table-striped">
    <thead>
      <tr>
        <th colspan="2" class="bg-primary">
        	Receiver's Details
        </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Name:</b></td>
        <td><?php echo $receiver_name ?></td>
       
      </tr>
      <tr>
        <td><b>Email:</b></td>
        <td><?php echo $receiver_email ?></td>
        
      </tr>
       <tr>
        <td><b>Address:</b></td>
        <td><?php echo $receiver_address ?></td>
        
      </tr>
      <tr>
        <td><b>Mobile:</b></td>
        <td><?php echo $receiver_mobile ?></td>
        
      </tr>
      
    </tbody>
  </table>


  <table class="table table-striped">
    <thead>
      <tr>
        <th colspan="2" class="bg-primary">
        	Shipment Details
        </th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>
Bill of Lading:</b></td>
        <td><?php echo $bill_of_landing ?></td>
       
      </tr>
      <tr>
        <td><b>Type of Shipment:</b></td>
        <td><?php echo $shipment_type ?></td>
        
      </tr>
       <tr>
        <td><b>Content of Shipment:</b></td>
        <td><?php echo $content ?></td>
        
      </tr>
      <tr>
        <td><b>Quantity of Product:</b></td>
        <td><?php echo $quantity ?></td>
        
      </tr>

      <tr>
        <td><b>Weight of Product:</b></td>
        <td><?php echo $weight_of_product ?></td>
        
      </tr>

      <tr>
        <td><b>Mode of Transport:</b></td>
        <td><?php echo $mode_of_shipment ?></td>
        
      </tr>

      <tr>
        <td><b>Total Charges:</b></td>
        <td><?php echo $total ?></td>
        
      </tr>
       <tr>
        <td><b>Mode of Payment:</b></td>
        <td><?php echo $mode_of_payment ?></td>
        
      </tr>
      
    </tbody>
  </table>

            </section>
			<!-- section close -->
        </div>
        <!-- content close -->

        <?php

}

}else if(mysqli_num_rows($result)>1){
	echo "<br><h4 style='text-align:center'>Dublicate Record detected</h4><br>";



}else{
	echo "<br><h4 style='text-align:center'>No item(s) detected</h4><br>";
			
		}

	}else{
		$error = mysqli_error($con);
		echo "<br><h4 style='text-align:center'>$error</h4><br>";

	}
}else{ 

    header("Location:track");
}


?>


        <!-- footer begin -->
        <?php

        require "footer.php";

        ?>