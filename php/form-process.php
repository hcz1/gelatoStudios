<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $errorMSG .= "phone is required ";
} else {
    $manufacture = $_POST["phone"];
}

if (empty($_POST["manufacture"])) {
    $errorMSG .= "manufacture is required ";
} else {
    $manufacture = $_POST["manufacture"];
}

if (empty($_POST["model"])) {
    $errorMSG .= "model is required ";
} else {
    $model = $_POST["model"];
}

if (empty($_POST["currentColour"])) {
    $errorMSG .= "Current Colour is required ";
} else {
    $currentColour = $_POST["currentColour"];
}

if (empty($_POST["noOfDoors"])) {
    $errorMSG .= "Number of doors is required ";
} else {
    $noOfdoors = $_POST["noOfDoors"];
}

if (empty($_POST["colourChoice"])) {
    $errorMSG .= "Choice of Colour is required ";
} else {
    $colourChoice = $_POST["colourChoice"];
}

if (empty($_POST["shutsAndReturns"])) {
    $errorMSG .= "Shuts and returns is required ";
} else {
    $shutsAndReturns = $_POST["shutsAndReturns"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "harryzachariou1@gmail.com";
$Subject = "New Message Received From Website";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Manufacture: ";
$Body .= $manufacture;
$Body .= "\n";
$Body .= "Model: ";
$Body .= $model;
$Body .= "\n";
$Body .= "Current Colour: ";
$Body .= $currentColour;
$Body .= "\n";
$Body .= "Number of Doors: ";
$Body .= $noOfdoors;
$Body .= "\n";
$Body .= "Colour of Choice: ";
$Body .= $colourChoice;
$Body .= "\n";
$Body .= "Shuts and Returns: ";
$Body .= $shutsAndReturns;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>