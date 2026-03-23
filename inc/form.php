<?php
$firstName = "";
$lastName = "";
$email = "";
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if (empty($_POST['firstName'])) {
    $errors['firstNameError'] = 'يرجى ادخال الأسم الاول';
}

if (empty($_POST['lastName'])) {
    $errors['lastNameError'] = 'يرجى ادخال الأسم الاخير';
}

if (empty($_POST['email'])) {
    $errors['emailError'] = 'يرجى ادخال الايميل';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['emailError'] = 'يرجى ادخال ايميل صحيح';
}


if (isset($_POST['submit'])) 
{
   if (!array_filter($errors))
            {
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$sql = "INSERT INTO users(firstName,lastName,email) Values
 ('$firstName', '$lastName', '$email')";
 if (mysqli_query($conn,$sql))
    {
header('Location: '.$_SERVER['PHP_SELF']);
    }
    else
    {
        echo 'فشل الاتصال' . mysqli_error($conn);
    }
    }

}
     


?>