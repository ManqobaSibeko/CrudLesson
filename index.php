<?php
require_once("include/DB.php");

if(isset($_POST["submit"])){
    if(!empty($_POST["ename"]) &&!empty($_POST["ssn"]) ){

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
            <input class="input" type="text" Name="department" value="" placeholder="Department"><br>
            
            <span>Salary:</span><br>
            <input class="input" type="text" Name="salary" value="" placeholder="salary"><br>
            
            <span>Home Address:</span><br>
            <textarea Name="homeAddress" rows="5" cols="50" placeholder="Home Address" ></textarea><br>
                <input class="submit" type="submit" Name="submit" value="Submit Your Information" placeholder="submit"><br>
        </fieldset>
    </form>
</body>
</html>