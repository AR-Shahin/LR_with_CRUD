<?php
$con = mysqli_connect('localhost', 'root', '', 'seu');
session_start();
function dataFilter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function emailValidation($email)
{
    $con = mysqli_connect('localhost', 'root', '', 'seu');
    $sql = "SELECT  * FROM `data` WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        return True;
    }
    else
    {
        return False;
    }
}
function passValidation($pass, $conPass)
{
    if ($pass === $conPass)
    {
        return True;
    }
    else
    {
        return False;
    }
}

if (isset($_POST['btn']))
{
    $name = dataFilter($_POST['name']);
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conPass = $_POST['conPass'];

    if (passValidation($pass, $conPass) == True)
    {
        if (emailValidation($email) == True)
        {
            $_SESSION['doubleEmail'] = 1;
            header("Location:regUI.php");
        }
        else
        {
            $sql = "INSERT INTO `data` (`id`, `name`, `email`, `pass`) VALUES (NULL, ' $name', '$email', '$pass')";
            if (mysqli_query($con, $sql))
            {
                $_SESSION['insert_sucess'] = 1;
                header("Location:regUI.php");
            }
        } //passvalid
        
    }

    else
    {
        $_SESSION['invalid_pass'] = 1;
        header("Location:regUI.php");
    }
} //isset



?>
