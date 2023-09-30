<?php 
require "header.php";

?>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" class="page-track no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Track
							<span>Your Package</span>
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
                <div class="container">
                   <form method="POST" action="track_result">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <input type="text" name="track_number" value="" placeholder="Insert tracking number here...">
                                <input type="submit" id="track-it" name="track" value="TRACK IT">
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                   </form>
                </div>

                

            </section>
			<!-- section close -->
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <?php

        require "footer.php";

        ?>