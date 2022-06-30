<?php
    if(isset($_POST['name']) && $_POST['name'] !='') {
        if(isset($_POST['phone']) && $_POST['phone'] !='') {
            if(isset($_POST['email']) && $_POST['email'] !='') {
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                    if(isset($_POST['message']) && $_POST['message'] !='') {
                        // submit the form
                        $customerName = $_POST['name'];
                        $customerPhone = $_POST['phone'];
                        $customerEmail = $_POST['email'];
                        $message = $_POST['message'];

                        $to = "mountaincastleevents@gmail.com";
                        $subject = "New Booking Requested";

                        $body .= "Customer Name: ".$customerName."\r\n";
                        $body .= "Customer Phone: ".$customerPhone."\r\n";
                        $body .= "Customer Email: ".$customerEmail."\r\n";
                        $body .= "Message: : ".$message."\r\n";

                        mail($to,$subject,$body);
                    }
                }
            }
        }
    } 
?>

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="title" content="Mountain Castle Events - Southeast Idaho" />
        <meta name="description" content="Southeast Idaho's favorite modern bounce castle. Make your party memorable. Perfect for birthdays, weddings, and special events. Affordable prices. Call now to book a bounce castle."/>
        <meta name="author" content="Presli Hastings"/>
        <meta name="keywords" content="Bounce House, Bounce Castle, Party, Kids Activities, Weddings, Southeast Idaho, Cute Parties, Party Ideas, Rexburg" />
        <title>Mountain Castle Events - Southeast Idaho Modern Bounce Castle</title>
        <link rel="icon" type="image/x-icon" href="images/img/Themepic.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/mystyles.css" rel="stylesheet" />
    </head>
<body>  

    <?php
    if($message_sent)
    ?>

    <h3> Thank you! We will contact you soon! <h3>

    <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Book Now!</h2><br><br>
                        <form class="form-signup" id="contactForm" method="POST" action="contact.php" data-netlify="true">
                            <!-- Name and Phone input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" name="name" id="name" type="text" placeholder="Enter name..." aria-label="Enter name..." data-sb-validations="required,name"></div>
                                <div class="col"><input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 555-5555" aria-label="(123) 555-5555" data-sb-validations="required,phone"></div>
                            </div><br>
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" name="emailAddress" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email"></div>
                            </div><br>
                            <!-- Message input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><textarea class="form-control" name="message" id="message" placeholder="When and where..." aria-label="When and where..." data-sb-validations="required,message"></textarea></div>
                                <div class="col-auto"><input class="btn btn-primary" id="submitButton" type="submit" value="BOOK NOW!"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>

