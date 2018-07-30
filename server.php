<?php
session_start();

// initializing variables
$name = "";
$mobileno = "";
$address = "";
$email  = "";
//$cv   = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $mobileno=mysqli_real_escape_string($db, $_POST['mobileno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
   // $cv = mysqli_real_escape_string($db, $_POST['cv']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($mobileno)) { array_push($errors, " Mobile No is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
  //  if (empty($cv)) { array_push($error, "CV is required"); }



    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO inquiry (name, mobileno, address,  email) 
  			  VALUES('$name','$mobileno','$address', '$email')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header('location: Upload.php');
    }

}

?>
