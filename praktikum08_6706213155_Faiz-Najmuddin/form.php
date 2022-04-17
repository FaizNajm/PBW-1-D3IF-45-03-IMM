<html lang="">
<head>
    <title>Form</title>
</head>
<body>

<h2>Student Union Form</h2>
<form method="post" action="proses.php">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="other">other
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

