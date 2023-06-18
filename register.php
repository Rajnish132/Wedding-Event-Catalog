<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/UserTable.php';

start_session();

// try to register the user - if there are any error/
// exception, catch it and send the user back to the
// login form with an error message
try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    $formdata['cpassword'] = filter_input($input_method, "cpassword", FILTER_SANITIZE_STRING);

    // throw an exception if any of the form fields 
    // are empty
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }
    //$email = filter_var($formdata['username'], FILTER_VALIDATE_EMAIL);
    //if ($email != $formdata['username']) {
    //    $errors['username'] = "Valid email required required";
    //}

    if (empty($_POST['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($formdata['cpassword'])) {
        $errors['cpassword'] = "Confirm password required";
    }
    // if the password fields do not match 
    // then throw an exception
    if (!empty($formdata['password']) && !empty($formdata['cpassword']) 
            && $formdata['password'] != $formdata['cpassword']) {
        $errors['password'] = "Passwords must match";
    }

    if (empty($errors)) {
        // since none of the form fields were empty, 
        // store the form data in variables
        $username = $formdata['username'];
        $password = $formdata['password'];
        $cpassword = $formdata['cpassword'];

        // create a UserTable object and use it to retrieve 
        // the users
        $servername = "localhost";
        $user_name = "root";
        $pass_word = "";
        $dbname = "wec";
        $connection = mysqli_connect($servername,$user_name,$pass_word,$dbname);
        //$connection = new PDO("mysql:host=$servername;dbname=$dbname", $user_name, $password);

        // Set PDO error mode to exception (optional)

        //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the UserTable object with the local connection
       

        //$userTable = new UserTable($connection);        

        // Retrieve user data by username

        $user = "SELECT username FROM usertable WHERE username = '$_POST[username]'";
        $rs    = mysqli_query($connection, $user);
        $da    = mysqli_fetch_array($rs, MYSQLI_NUM);
        if ($da[0] > 1) {
            $errors['username'] = "Username already registered";
            echo "Username Already in Exists<br/>";
        }

        else {
            $sql = "INSERT INTO `usertable`(`username`, `password`, `cpassword`) VALUES ('$username','$password','$cpassword')";

            if (mysqli_query($connection, $sql)) {
                echo "Registered successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
            mysqli_close($connection);
        }
        // In this modified code, we are using the PDO extens

        // $connection = DB::getConnection();
        // $userTable = new UserTable($connection);
        // $user = $userTable->getUserByUsername($username);

        // since password fields match, see if the username
        // has already been registered - if it is then throw
        // and exception
        // if ($user != null) {
        //     $errors['username'] = "Username already registered";
        // }
    }
    
    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }
    
    // since the username is not aleady registered, create
    // a new User object, add it to the database using the
    // UserTable object, and store it in the session array
    // using the key 'user'

    // $user = "INSERT INTO `usertable`(`username`, `password`, `cpassword`) VALUES ('$username','$password','$cpassword')";
    // // $user = new User(null, $username, $password, "user");
    // //$id = $userTable->insert($user);
    // //$user->setId($id);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;    
    // now the user is registered and logged in so redirect
    // them the their home page
    // Note the user is redirected to home.php rather than
    // requiring the home.php script at this point - this 
    // ensures that if the user refreshes the home page they
    // will not be resubmitting the login form.
    // 
    // require 'home.php';
    header('Location: index.php');
}
catch (Exception $ex) {
    // if an exception occurs then extract the message
    // from the exception and send the user the
    // registration form
    $errorMessage = $ex->getMessage();
    require 'register_form.php';
}
?>
