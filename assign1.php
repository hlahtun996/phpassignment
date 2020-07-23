<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$phone=test_input($_POST["phone"]);
$township=test_input($_POST["township"]);
$grade=test_input($_POST["grade"]);
$subjects=$_POST["subject"];
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
Phone: <input type="phone" name="phone"><br><br>
Township: <select name="township">
<option value="Hledan">Hledan</option>
<option value="Insein" >Insein</option>
<option value="Hlaing">Hlaing</option>
</select>
<br><br>
Grade:
<input type="radio" name="grade" value="First Year">First Year
<input type="radio" name="grade" value="Second Year">Second Year
<input type="radio" name="grade" value="Third Year">Third Year<br><br>
Subject:
<input type="checkbox" name="subject[]" value="PHP"> PHP
<input type="checkbox" name="subject[]"  value="JAVA"> JAVA
<input type="checkbox" name="subject[]" value="C#"> C#
<input type="checkbox" name="subject[]" value="JavaScript"> JavaScript<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br><br>";
echo $phone;
echo "<br><br>";
echo $township;
echo "<br><br>";
echo $grade;
echo "<br><br>";
if(isset($_POST['submit']))
{
   $subjects=$_POST['subject'];

   foreach($subjects as $key=> $values)
{
    echo $values." ";
}
}    
?>
</body>
</html>