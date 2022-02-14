<?php

    $this_page = 'contact';

    include('templates/head.php');
    include('templates/header-02.php');
    include('templates/breadcrumbs.php');

?>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-center margin-bottom-20">GET IN TOUCH WITH US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">To Contact us for more details.</p>
                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <h5>Address</h5>
                                    <p>Technical Floor, Suit 001, Wing A Bolingo Hotel and Towers, Independence Avenue, Area 10 Garki Abuja-Nigeria</p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>Phone number</h5>
                                    <p><a href="tel:+1249060009086">+124 906 000 9086</a></p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>E-mail address</h5>
                                    <p><a href="mailto:contact@afrigueastoria.ng@gmail.com">contact@afrigueastoria.ng@gmail.com</a></p>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-8">
                                    <form class="wprt-contact-form" method="post" action="#">
                                        <div class="inner">
                                            <div class="left-side">
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="4" placeholder="Subject *" name="subject" id="subject" required>
                                                </div>
                                                <div class="message-wrap">
                                                    <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                                </div>
                                                <div class="send-wrap">
                                                    <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- /.wprt-contact-form -->
                                    <!-- <?php
                                    
                                        // No-AJAX message feedback
                                        $form_submission_feedback = "";

                                        if (isset($_POST['submit'])) {

                                            $name = htmlspecialchars($_POST['name']);
                                            $email = htmlspecialchars($_POST['email']);
                                            $inquiry = htmlspecialchars($_POST['inquiry']);
                                            $to = "info@heritagehebronglobal.com";
                                            $subject = "Afrigue Astoria - " . htmlspecialchars($_POST['subject']);
                                            $headers = "MIME-Version: 1.0" . "\r\n";
                                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                            $headers .= "From: ".$name."<".$email.">"."\r\n";
                                            $message = wordwrap($inquiry, 70);

                                            mail($to, $subject, $message, $headers);

                                            // Show success message if message is sent
                                            if (mail($to, $subject, $message, $headers)) {
                                                $form_submission_feedback = "<div class=\"feedback\"><p class=\"successful\">Message delivered <i class=\"fa fa-check\"></i></p></div>";
                                            }
                                            // Show failure message if message fails to send
                                            else {
                                                $form_submission_feedback = "<div class=\"feedback\"><p class=\"failed\">Message not delivered <i class=\"fa fa-remove\"></i></p></div>";
                                            }
                                        }

                                    ?> -->
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    include('templates/footer.php');

    echo $form_submission_feedback;

?>

</body>

</html>