<?php

$DSN1 = 'mysql:host=localhost; dbname=record';
$pdo = new PDO($DSN1,'root','');

//PDO query
 $stmt = $pdo->query('SELECT * from emp_record');

 while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
      echo $row['id'].'<br>';
 }

///mysqli_select_db($connectingDB,'record');

//http://localhost/phpCourse/CrudLesson/db1.php

?>