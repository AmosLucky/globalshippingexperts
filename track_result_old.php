<?php
require 'header.php';



 ?>
<style type="text/css">
	.vl {
  border-left: 6px solid green;
  height: 250px;
  
  
}

.dot {
  height: 50px;
  width: 50px;
  text-align: center;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
.line{
	float: left; border-left: 3px solid green; width:10%; height: 300px; margin-right: 10px;margin-left: 10px;
}
.line2{
	float: left; border-left: 3px solid ; width:10%; height: 300px; margin-right: 10px;margin-left: 10px;
}
</style>

 <div class="btContentWrap btClear">
		<div class="btContentHolder">
			<div class="btContent">
			<div class="bt_rc_container"><section id="bt_section62d4392ad74e1" data-parallax="0.1" data-parallax-offset="-50" class="boldSection topExtraSpaced bottomMoreSpaced btDarkSkin gutter btMiddleVertical btParallax wBackground cover" style="background-image:url('wp-content/uploads/sites/2/2015/09/truck_flipped_bckg.jpg');"><div class="port"><div class="boldCell"><div class="boldCellInner"><div class="boldRow " ><div class="rowItem col-md-12 col-ms-12  btTextLeft animate animate-fadein animate-moveleft inherit"  ><div class="rowItemContent"><header class="header btClear extralarge btDash bottomDash  btAccentDash btRegularTitle" style="max-width: 700px;"><p class="btSuperTitle">Tracking</p><div class="dash"><h1><span class="headline">TRACK RESULT</span></h1></div></header>
				<!-- <div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div> -->

			<!-- 	<div class="btBtn btBtn btnFilled btnAccentColor btnSmall btnNormal btnIco" ><div class="btIco borderless extrasmall"><a href="#"  data-ico-cs="&#xe606;" class="btIcoHolder"><span>Find out more</span></a></div></div> -->

				<!-- <div class="btBtn btBtn btnFilled btnNormalColor btnSmall btnNormal btnIco" ><div class="btIco borderless extrasmall"><a href="#"  data-ico-cs="&#xe607;" class="btIcoHolder"><span>Get a quote</span></a></div></div> -->


			</div></div></div></div></div></div></section>

			<?php 

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



			<section id="bt_section62d4392ad7a19"  class="boldSection topSpaced bottomSemiSpaced gutter inherit wBackground cover" style="background-image:url('wp-content/uploads/sites/2/2015/09/Transparent-background-with-dots.png'); "><div class="port"><div class="boldCell"><div class="boldCellInner"><div class="boldRow " >

				<!-- <div class="rowItem col-sm-4 col-ms-12 btTextRight animate animate-fadein btTextIndent inherit btDoublePadding"  ><div class="rowItemContent">
				<header class="header btClear medium  btAccentDash btRegularTitle" >
				<p class="btSuperTitle">CHECK OUR PRICING</p><div class="dash"><h3><span class="headline">CHOOSE ONE OF OUR CALCULATORS</span></h3></div></header>

			</div>
		</div> -->


			<div style="" class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  >
				<div class="rowItemContent">
					<div class="btIconImageRow" >
						<div class="row"style="margin-top: 30px; margin-bottom: 30px;" >
							<b><?php echo $from_country ?> &nbsp;&nbsp;<b> <span><img src="assets/arw.gif" style="height: 10px"> </span> <b>&nbsp;&nbsp;<?php echo $to_country ?></b>
						</div>
						<hr>
					</div>

						<header class="" >


							<div style="width:100%; height:300px">

								<div style="float:left; width:30%;
								  text-align: center;" >
									<?php echo $delivery_date ?>
									
									
								</div>
								

								<div  class="<?php echo $class ?>" >
									
									
								</div>

								<div style="float: left; width:50%;  text-align:start; margin-left: -30px">

									<?php
										if($status == "Delivered" || $status == "On hold"){
									
									echo '<div class="dot" style="padding-top: 10px;">
										
											<img src="assets/plane.png">
										
									</div>';
									} 

										?>

									<div style="margin-top:5px">
										<b><?php echo $delivery_title ?></b>
									<small>
										<?php echo $delivery_note ?>
									</small>
									</div>
									
								</div>
								
							</div>

							
							<div style="width:100%; height:300px">

								<div style="float:left; width:30%;
								  text-align: center;" >
									<?php echo $sent_date ?>
									
									
								</div>
								

								<div class="line" >
									
									
								</div>

								<div style="float: left; width:50%;  text-align:start; margin-left: -30px">
									
									<div class="dot" style="padding-top: 10px;">
										<?php

										if($status == "In progress"){
											echo '<img src="assets/plane.png">';
										}

										 ?>
									</div>

									<div style="margin-top:5px">
										<b><?php echo $sent_title ?></b>
									<small>
										<?php echo $sent_note ?> 
									</small>
									</div>
									
								</div>
								
							</div>







<!-- 
							<div class="row" style="width:100%">
								<div class="col-sm-3">
									<p>6/7/2022 7.40pm</p>
								</div>
								<div class="col-sm-1">
									<div  style="border-left: 3px solid green; height: 300px;"></div>
									
								</div>
								<div class="dot col-sm-3" ></div>
								<div class="col-sm-6" style=" margin-left: -50px;">
									
									<div>Title</div>
									<div>lorem</div>
								</div>

								
							</div>
							 -->



		</header>
<div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div>


<div class="rowItem col-sm-8 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  ><div class="rowItemContent"><div class="btIconImageRow" ><div class="btIco borderless large"><a href=""  target="no_target"  data-ico-cs="&#xe605;" class="btIcoHolder"></a></div></div><header class="header btClear small  btAlternateDash btRegularTitle" ><div class="dash">

<table class="table table-striped">
    <thead>
      <tr>
        <th colspan="2">
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
        <th colspan="2">
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
        <th colspan="2">
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
        <th colspan="2">
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

		</div></header><div class="btText">


</div>
<div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div>




<!-- 
<div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  ><div class="rowItemContent"><div class="btIconImageRow" ><div class="btIco borderless large"><a href="ocean-cargo-cost-calculator/index.html"  target="no_target"  data-ico-cs="&#xe643;" class="btIcoHolder"></a></div></div><header class="header btClear small  btAlternateDash btRegularTitle" ><div class="dash"><h4><span class="headline">OCEAN CARGO</span></h4></div></header><div class="btText"><div class="sTxt">Nam aliquet finibus blandit. Nullam mauris ante, consequat sed euismod id, hendrerit et odio. Donec auctor ligula in congue ornare.</div>
</div><div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div> -->




</div></div></div></div></section>

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
}else{ ?>



			<div class="rowItem col-sm-12 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  ><div class="rowItemContent"><div class="btIconImageRow" ><div class="btIco borderless large"><a href="trucking-cost-calculator/index.html"  target="no_target"  data-ico-cs="&#xe605;" class="btIcoHolder"></a></div></div><header class="header btClear small  btAlternateDash btRegularTitle" ><div class="dash">

<form method="POST" action="track_result">
				<span class="headline">

				<p><h4>Tracking Number</h4><br />
    <span class="wpcf7-form-control-wrap your-email">
    	<input type="text" name="track_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
    	</span> </p>

    					<p><input type="submit" required name="track" value="Track" class="wpcf7-form-control has-spinner wpcf7-submit" /></p>


			</span>
</form>

		</div></header><div class="btText">


</div>
<div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div>

	<?php
}


?>


<!-- <section id="bt_section62d4392ad83b2"  class="boldSection gutter" ><div class="port"><div class="boldCell"><div class="boldCellInner"><div class="boldRow " ><div class="rowItem col-sm-4 col-ms-12 btTextCenter inherit btDoublePadding"  ><div class="rowItemContent"><div class="bpgPhoto btTextCenter" ><div class="btImage"><img src="wp-content/uploads/sites/2/2015/10/mercedes.png" alt=""></div></div></div></div><div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  ><div class="rowItemContent"><div class="btIconImageRow" ><div class="btIco borderless large"><a href="courier-services-cost-calculator/index.html"  target="no_target"  data-ico-cs="&#xe65a;" class="btIcoHolder"></a></div></div><header class="header btClear small  btAlternateDash btRegularTitle" ><div class="dash"><h4><span class="headline">COURIER</span></h4></div></header><div class="btText"><p>Donec efficitur elit facilisis eros placerat finibus. Nam suscipit maximus magna, eget accumsan diam porta ac.</p>
</div><div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div><div class="rowItem col-sm-4 col-ms-12 btTextCenter animate animate-fadein btHighlight inherit btDoublePadding"  ><div class="rowItemContent"><div class="btIconImageRow" ><div class="btIco borderless large"><a href="air-cargo-cost-calculator/index.html"  target="no_target"  data-ico-cs="&#xe605;" class="btIcoHolder"></a></div></div><header class="header btClear small  btAlternateDash btRegularTitle" ><div class="dash"><h4><span class="headline">AIR CARGO</span></h4></div></header><div class="btText"><div class="sTxt">Nam aliquet finibus blandit. Nullam mauris ante, consequat sed euismod id, hendrerit et odio. Donec auctor ligula in congue ornare.</div>
</div><div class="btClear btSeparator bottomSemiSpaced noBorder" ><hr></div></div></div></div><div class="boldRow " ><div class="rowItem col-md-12 col-ms-12  btTextLeft"  ><div class="rowItemContent"><div class="btClear btSeparator topSpaced noBorder" ><hr></div></div></div></div></div></div></div></section> -->



</div>		</div><!-- /bt_content -->
 
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

 
	<section class="boldSection gutter btSiteFooterCurve ">
		<div class="port">
			<div class="btCurveLeftHolder">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="14px" viewBox="0 0 50 14" enable-background="new 0 0 50 14" xml:space="preserve">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M 0 14 C 27 15 20 0 51 0 c 0 13 0 15 0 15 L 0 15 Z" class="btCurveLeft"/>
				</svg>
			</div>
			<div class="btCurveRightHolder">
				<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="14px" viewBox="0 0 50 14" enable-background="new 0 0 50 14" xml:space="preserve">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M 50 14 c -27 0 -20 -14 -50 -14 c 0 13 0 14 0 145 L 50 14 Z" class="btCurveRight"/>
				</svg>
			</div>
			<div class="btSiteFooterCurveSleeve"></div>
		</div>
	</section>



 <?php require "footer.php"; ?>