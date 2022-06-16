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
    <form action="soal1.php" method="post">
        <label for="">Name :</label>
        <input type="text" name="name" require><span style="color:red;"> * </span><br><br>
        <label for="">Email :</label>
        <input type="text"name="email"><span style="color:red;"> * </span><br><br>
        <label for="">Website :</label>
        <input type="text"name="website"><span style="color:red;"> </span><br><br>
        <label for="">Comment :</label>
        <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        <label for="">Gander</label>
        <input type="radio" name="gender" id="" value="Female"><label for="">Female</label>
        <input type="radio" name="gender" id="" value="Male"><label for="">Male</label>
        <input type="radio" name="gender" id="" value="Other"><label for="">Other</label><span style="color:red;"> * </span><br><br>
        <button type="submit">Submit</button>
    </form>
    <h1>Your Input:</h1>
    <?php echo $_POST["name"];?><br>
    <?php echo $_POST["email"];?><br>
    <?php echo $_POST["website"];?><br>
    <?php echo $_POST["comment"];?><br>
    <?php echo $_POST["gender"];?><br>
</body>
</html>