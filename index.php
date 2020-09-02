<?php
require_once("include/DB.php");

if(isset($_POST["submit"])){
    if(!empty($_POST["ename"]) &&!empty($_POST["ssn"]) ){

        //inserting the data into the database 

        $Ename = $_POST["ename"];
        $SSN = $_POST["ssn"];
        $Depart = $_POST["depart"];
        $Salary = $_POST["salary"];
        $H_Add = $_POST["homeaddress"];

        global $connectingDB;
        $sql = "INSERT INTO emp_record (ename,ssn,depart,salary,home_address) 
        VALUES(:eName,:ssN,:depT,:salarY,:homeaddresS)";

        // preparing our sql 
        $stmt = $connectingDB->prepare($sql);

        // defining these dummy names
        $stmt ->bindValue(':eName',$Ename);
        $stmt ->bindValue(':ssN',$SSN);
        $stmt ->bindValue(':depT',$Depart);
        $stmt ->bindValue(':salary',$Salary);
        $stmt ->bindValue(':homeaddresS',$H_Add);

        $Execute = $stmt->execute();

        if   ($Execute){
            echo "record is successfull";
        }

    }else{

        echo "Please atleast add name and security number";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Crud Application</h2>
    <form class="" action="index.php" method="post">
        <legend>* Please Fill in The Following Fields.</legend>
        <fieldset>
           <span >Employee Name:</span><br>
            <input class="input" type="text" Name="ename"  placeholder="Name"><br>
            
            <span>Social Security Number:</span><br>
            <input class="input" type="text" Name="ssn" value="" placeholder="Social Security Number"><br>
           
            <span>Department:</span><br>
            <input class="input" type="text" Name="depart" value="" placeholder="Department"><br>
            
            <span>Salary:</span><br>
            <input class="input" type="text" Name="salary" value="" placeholder="salary"><br>
            
            <span>Home Address:</span><br>
            <textarea Name="homeaddress" rows="5" cols="50" placeholder="Home Address" ></textarea><br>
                <input class="submit" type="submit" Name="submit" value="Submit Your Information" placeholder="submit"><br>
        </fieldset>
    </form>
</body>
</html>