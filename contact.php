<?php 
require "header.php";
?>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" class="page-contact no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Contact Us
						<span>Get In Touch With Us</span>
                            </h1>
                            <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->



        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row no-gutter">
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>

                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" name="form1" method="post" action="#">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                    </p>



                                </form>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="divider-line"></div>

                


            </div>
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <?php

        require "footer.php";
        
        ?>