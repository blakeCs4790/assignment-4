<?php
	include "../dbConnect.php";
	include "../mySQL.php";

	//------------------------Need to uncomment/comment variables to add each group individually

//Passenger
    /*$asin = 'B01LTI0BPU';
    $title = 'Passengers';
    $price = 26.99;
    $fname = 'Jennifer';
    $lname = 'Lawrence';
    $fname2 = 'Chris';
    $lname2 = 'Pratt';*/

//Rouge One
    /*$asin = 'B01MXLWO5D';
    $title = 'Rogue One: A Star Wars Story';
    $price = 22.48;
    $fname = 'Felicity';
    $lname = 'Jones';
    $fname2 = 'Diego';
    $lname2 = 'Luna';*/

//Doctor Strange
    /*$asin = 'B01MG2YEWH';
    $title = 'Doctor Strange';
    $price = 26.99;
    $fname = 'Benedict';
    $lname = 'Cumberbatch';
    $fname2 = 'Chiwetel';
    $lname2 = 'Ejiofor ';*/

//Harry Potter collection
    $asin = 'B005OCFHHK';
    $title = 'Harry Potter: Complete 8-Film Collection';
    $price = 59.99;
    $fname = 'Daniel';
    $lname = 'Radcliffe';
    $fname2 = 'Rupert';
    $lname2 = 'Grint';


     $myDb = fConnectToDatabase();
     fInsertToDatabase($myDb, $asin, $title, $price, $fname, $lname, $fname2, $lname2); //i know in prod these would come from a form.
     fDeleteFromDatabase($myDb, $deleteId = 1); //In prod $deleteId value would come from a form.
     fListFromDatabase($myDb);

	

