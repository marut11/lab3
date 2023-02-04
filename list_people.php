<?php
require("connect_db.php");
$id = $_GET["id"];

$sql = "SELECT ID, name, age, gender, maried_status FROM marut";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["Gender"]=="M"){
        if($row["Age"]<15){
                echo "ดช.", $row["Name"] . "<br>";
        }else{
                echo "นาย.", $row["Name"] . "<br>";
        }
    }
    if($row["Gender"]=="F"){
        if($row["Age"]<15){
            echo "ดญ.", $row["Name"] . "<br>";
        if($row["Maried_status"]=="M"){
            echo "นาง.", $row["Name"] . "<br>";
        }
    }else{
            echo "นางสาว.", $row["Name"] . "<br>";
    }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
