<?php
//********************** variables ******************************************
$vname = $_POST["name"];
$vemail = $_POST['email'];
$vdob = $_POST['dob'];
$vgen = $_POST['gender'];
$vtob = $_POST['tob'];
$vplace = $_POST['place'];
$vmob = $_POST['mobile'];
$vquery = $_POST['query'];

//*************************************************************************

echo $_POST["name"];

$message = " Dear Admin,

Following is the data submitted by user:

First Name: $vname;

Email Address: $vemail;

Date of Birth: $vdob;

Gender: $vgen;

Time of Birth: $tob;

Place of Birth: $vplace;

Mobile Number: $vmob;

User Message: $query;



- Web Master.
Indian Vedic Foundation";

//***************************************************************************

$headers = 'From: Administrator';

echo "Thanks!";
mail('ivfastro@gmail.com', 'Subject', $message, $headers);

//****************************************************************************
?>