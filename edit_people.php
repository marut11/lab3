<?php
require("connect_db.php");
$id=$_GET["id"];

$sql = "SELECT id, name, age, gender, mary_status FROM marut where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<form action="save_edit_people.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    Name: <input type="text" name="name" value="<?php echo $row["name"];?>"><br>
    Age: <input type="text" name="age" value="<?php echo $row["age"];?>"><br>
    Gender: <select name="gender">
        <option value="M" <?php if($row["gender"]=="M") echo "selected";?>>Male</option>
        <option value="F" <?php if($row["gender"]=="F") echo "selected";?>>Female</option>
    </select><br>
    Marry Status: <select name="marry_status">
        <option value="S" <?php if($row["marry_status"]=="S") echo "selected";?>>Single</option>
        <option value="M" <?php if($row["marry_status"]=="M") echo "selected";?>>Married</option>
    </select><br>
    <input type="submit" value="Send">
</form>
<?php
}
?>