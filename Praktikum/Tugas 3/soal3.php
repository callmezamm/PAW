<?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $nameErr = "Name is required";
        }else{
            $name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
        }
        if (empty($_POST["email"])){
            $emailErr = "Email is required";
        }else{
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["website"])){
            $websiteErr = "";
        }else{
            $website = $_POST["website"];
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
              }
        }
        if (empty($_POST["comment"])){
            $comment = "";
        }else{
            $comment = $_POST["comment"];
        }
        if (empty($_POST["gender"])){
            $genderErr = "Gender is required";
        }else{
            $gender = $_POST["gender"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Form Validation Example</h1>

    <p style='color: red;'>* required field</p>
    <form action="soal3.php" method="post">
        <label for="">Name :</label>
        <input type="text" name="name" require><span style="color:red;"> * <?php echo $nameErr;?></span><br><br>
        <label for="">Email :</label>
        <input type="text"name="email"><span style="color:red;"> * <?php echo $emailErr;?></span><br><br>
        <label for="">Website :</label>
        <input type="text"name="website"><span style="color:red;"> <?php echo $websiteErr;?></span><br><br>
        <label for="">Comment :</label>
        <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        <label for="">Gander</label>
        <input type="radio" name="gender" id="" value="Female"><label for="">Female</label>
        <input type="radio" name="gender" id="" value="Male"><label for="">Male</label>
        <input type="radio" name="gender" id="" value="Other"><label for="">Other</label><span style="color:red;"> * <?php echo $genderErr;?></span><br><br>
        <button type="submit">Submit</button>
    </form>
    <h1>Your Input:</h1>
    <?php echo $name;?><br>
    <?php echo $email;?><br>
    <?php echo $website;?><br>
    <?php echo $comment?><br>
    <?php echo $gender;?><br>

</body>
</html>