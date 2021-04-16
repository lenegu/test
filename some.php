<?php 

    $name=$_POST['bdate'];

                $connection = new PDO('mysql:host=localhost;dbname=fp;charset=utf8','root');
                $sql = ("SELECT * FROM users WHERE firt_name LIKE :n OR last_name LIKE :n1 OR bdate LIKE :n2 ");
                $query = $connection->prepare($sql);
                $query->execute(["n"=>$name,"n1"=>$name,"n2"=>$name]);
            while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $output = '
    <tr>
      <td>'.$row['firt_name'].'</td>
      <td>'.$row['last_name'].'</td>
      <td>'.$row['bdate'].'</td>
    </tr>'; 
}
echo $output;



