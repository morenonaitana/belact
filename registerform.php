<?php 
    if(isset($_POST['submit'])){
        $to = "belact2016@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $company = $_POST['company'];
        $subject = "New Registration";
        $message = $name . " from: ". $company . " Registered for Cell Therapy meeting.";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        header('Location: thankyou.php');
        //echo "<div class='thanks'><p class='p1'>Thank you for your registration, see you soon !</p></div>";
        //echo "<p class='p1'>Thank you for your registration, see you soon !</p>";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>