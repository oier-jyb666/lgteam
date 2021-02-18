<?php header('content-type:application/json') ?>
<?php include "./mysql.php" ?>
<?php 
  $txt=$_GET["txt"];
  $out = Array();
  $i=0;
  if($txt) {
    $conn = new mysqli($servername, $username, $password, $dbname);mysqli_query($conn , "set names utf8");
    $sql = "SELECT * FROM team WHERE `name` LIKE '%$txt%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
        $out[$i]=$row;
        $i++;
      }
    }
    mysqli_close($conn);
  }
  echo json_encode($out);
?>