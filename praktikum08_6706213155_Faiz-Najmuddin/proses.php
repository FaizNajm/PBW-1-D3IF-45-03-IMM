<html>
<body>
<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
} else {
    die("Sorry, you cannot access this page!");
}
if (!empty($name)) {
    if (!preg_match("/^[a-zA-Z \-.']*$/", $name)) {
        echo "Your input is Incorrect! only letters white space, dot(.), and dash(-)are allowed<br>";
    } else {
        $name = test_input($name);
        echo "Thanks, <b>" . $name . "</b><br>";
    }
} else {
    echo "Name is required <br>";
}
if (!empty($email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format! <br>";
    } else {
        $email = test_input($email);
        echo "Your email is <b>" . $email . "</b><br>";
    }
} else {
    echo "email is required <br>";
}
if (!empty($website)) {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        echo "Invalid website format! <br>";
    } else {
        $website = test_input($website);
        echo "Your website is: <b>" . $website . "</b><br>";
    }
} else {
    echo "website is none <br>";
}
if (!empty($comment)) {
    $comment = test_input($comment);
    echo "Your comment is  <b>" . $comment . "</b><br>";
} else {
    echo "comment is none<br>";
}
if (!empty($gender)) {
    echo "you are a , <b>" . $gender . "</b><br>";
} else {
    echo "gender is required <br>";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

?>
</body>
</html>
