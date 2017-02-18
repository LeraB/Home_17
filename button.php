<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Home Work 3 </title>
</head>
<body>
<?php 
 $Name = $_REQUEST['name'];
 $Second_name = $_REQUEST['second_name'];
 $Sex = $_REQUEST['sex'];
 $Age = $_REQUEST['age'];
 $Sex_two = $_REQUEST['sex_two'];
 $Data = $_REQUEST['data'];
 $Family_position = $_REQUEST['family_position'];
 $Social_status = $_REQUEST['social_status'];
 $Residence = $_REQUEST['residence'];
 $Choice = $_REQUEST['choice'];
  if (isset($Choice)) {
    $Choice_string = implode(",", $Choice);
};
 
 $Sel  = $_REQUEST['sel'];
 $Count = $_REQUEST['count'];
 $Text = $_REQUEST['text'];
 $Position = $_REQUEST['position'];
 if (isset($Position)) {
    $Position_string = implode(",", $Position);
};

 $Input_box = $_REQUEST['input_box'];
 $Email = $_REQUEST['email'];
 $Category = $_REQUEST['category'];
 $No = $_REQUEST['no'];
 
 $connect = mysqli_connect("Home_Work", "root", "", "about");
if (mysqli_connect_error()) {
    printf("Помилка: \n", mysqli_connect_error());
    exit();
}

 $Name = mysqli_real_escape_string($connect,$Name);
 $Second_name = mysqli_real_escape_string($connect,&Second_name);
 $Sex = mysqli_real_escape_string($connect,$Sex);
 $Age = mysqli_real_escape_string($connect,$Age);
 $Sex_two = mysqli_real_escape_string($connect,$Sex_two);
 $Data = mysqli_real_escape_string($connect, $Data);
 $Family_position = mysqli_real_escape_string($connect,$Family_position);
 $Social_status = mysqli_real_escape_string($connect,$Social_status);
 $Residence = mysqli_real_escape_string($connect,$Residence);
 $Choice = mysqli_real_escape_string($connect,$Choice );
 $Sel  = mysqli_real_escape_string($connect,$Sel);
 $Count = mysqli_real_escape_string($connect,$Count);
 $Text = mysqli_real_escape_string($connect,$Text);
 $Position = mysqli_real_escape_string($connect,$Position);
 $Input_box = mysqli_real_escape_string($connect,$Input_box);
 $Email = mysqli_real_escape_string($connect,$Email);
 $Category = mysqli_real_escape_string($connect,$Category );
 $No = mysqli_real_escape_string($connect,$No);
 

$return = mysqli_query($connect, "INSERT INTO bout(Name, Second_name, Sex, Age, Sex_two, Data, Family_position, Social_status, Residence, 
Choice, Sel, Count, Text, Position, Input_box, Email, Category, No)");
    
if ($return) {
    echo "Дані відправлені";
} else {
    echo "Помилка:" . $connect->error;
}
echo '<a href="list-db.php"></a>';
?>

<table border="3">
    <tr>
        <th>Name</th>
        <th>Second_name</th>
        <th>Sex</th>
        <th>Age</th>
        <th>Sex_two</th>
        <th>Data</th>
        <th>Family_position</th>
        <th>Social_status</th>
        <th>Residence</th>
        <th>Choice</th>
        <th>Sel</th>
        <th>Count</th>
        <th>Text</th>
        <th>Position</th>
        <th>Input_box</th>
        <th>Email</th>
        <th>Category</th>
        <th>No</th>
    </tr>
	    <?php
  $connect = mysqli_connect("Home_Work", "root", "", "about");
    $sql = "SELECT * FROM about;";
    $result = $c->query($sql);
    if ($result) {
        while($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?= $row['Name'] ?></td>
        <td><?= $row['Second_name'] ?></td>
        <td><?= $row['Sex'] ?></td>
        <td><?= $row['Age'] ?></td>
        <td><?= $row['Sex_two'] ?></td>
        <td><?= $row['Data'] ?></td>
        <td><?= $row['Family_position'] ?></td>
        <td><?= $row['Social_status'] ?></td>
        <td><?= $row['Residence'] ?></td>
        <td><?= $row['Choice'] ?></td>
        <td><?= $row['Sel'] ?></td>
        <td><?= $row['Count'] ?></td>
        <td><?= $row['Text'] ?></td>
        <td><?= $row['Position'] ?></td>
        <td><?= $row['Input_box'] ?></td>
        <td><?= $row['Email'] ?></td>
        <td><?= $row['Category'] ?></td>
        <td><?= $row['No'] ?></td>
    </tr>
        <?php
      }
    }
    ?>
</table>
<a href="index.html">Back</a> </body>
 