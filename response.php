<html>
<head>
<link href= "myStyles.css" type="text/css" rel="stylesheet" >
</head>
<body>
   

    <?php

echo "<h1>Thank you, " . $_POST['firstname'] ." ". $_POST['lastname'] . " for submitting your resume. </h1>";

if(isset($_POST['submit'])){
    $to = $_POST['email']; 
    $from = $_POST['email']; 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $headers = "From:" . $from;
    
   
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['Description'];
    

    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
   
    }
?>
      

</body>



</html>