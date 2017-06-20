<?php



// database functions ************************************************


  function fInsertToDatabase($myDb, $asin, $title, $price, $fname, $lname, $fname2, $lname2)
  {
      $image = '"http://images.amazon.com/images/P/' .$asin. '.01.MZZZZZZZ.jpg"';
      $sql = $myDb->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)");
      $sql->bindParam(":asin", $asin);
      $sql->bindParam(":title", $title);
      $sql->bindParam(":price", $price);
      $sql->execute();

      $sql2 = $myDb->prepare("INSERT INTO dvdactors (fname, lname) VALUES ('$fname', '$lname')");
      $sql2->bindParam(":fname", $fname);
      $sql2->bindParam(":lname", $lname);
      $sql3 = $myDb->prepare("INSERT INTO dvdactors (fname, lname) VALUES ('$fname2', '$lname2')");
      $sql2->execute();
      $sql3->execute();
      echo '<img src='.$image.'>';
  }

function fDeleteFromDatabase($myDb, $deleteId) {
 // $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
    if(is_numeric($deleteId))
    {
        $sql = $myDb->prepare("DELETE FROM dvdactors WHERE dvdactorId == $deleteId");
        $sql->execute();
    }

}

function fListFromDatabase($myDb) {
 // $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';
   $sql = $myDb->prepare("SELECT actorId, fname, lname FROM dvdactors");
   $sql->execute();
    while($row = $sql->fetch()) {
        print_r($row);
    }
}

function fjoin($myDb)
{
    $sql = $myDb->prepare("SELECT * FROM dvdactors INNER JOIN dvdcrossswalk on dvdactors.actorId = dvdcrosswalk.actorId
                           INNER JOIN dvdtitles on dvdcrosswalk.asin = dvdtitles.asin");
}
?>
