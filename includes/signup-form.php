<?php
if(isset($_POST['signup'])){
    $screenName = $_POST['screenName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $error = '';

    if(empty($screenName) or empty($password) or empty($email)){
        $error = "All fields are required";
    } else {
        $email = $getFromUser->checkInput($email);
        $password = $getFromUser->checkInput($password);
        $screenName = $getFromUser->checkInput($screenName);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = " Invalid Email Fomat";
        } elseif (strlen($screenName) > 20){
            $error = "Name must be between in 6 to 20 characters";
        } elseif (strlen($password) < 5){
            $error= "password is too short";
        }else {
            if($getFromUser->checkEmail($email)=== true){
                $error = "Email is already in use";
            } else {
                $getFromUser->create('users', array('username' => $screenName,'email' => $email, 'password' => md5($password), 'screenName' => $screenName, 'profileImage' => 'assets/images/defaultprofileimage.png', 'profileCover' => 'assets/images/defaultCoverImage.png'));
                header('Location:includes/signup.php?step=1');
            }
        }
    }
}
?>
<form method="post">
    <div class="signup-div">
        <h3>Sign up </h3>
        <ul>
            <li>
                <input type="text" name="screenName" placeholder="Full Name"/>
            </li>
            <li>
                <input type="email" name="email" placeholder="Email"/>
            </li>
            <li>
                <input type="password" name="password" placeholder="Password"/>
            </li>
            <li>
                <input type="submit" name="signup" Value="Signup for Twitter">
            </li>
        </ul>
        <?php
        if(isset($error)){
            echo '
            <li class="error-li">
              <div class="span-fp-error">'.$error.'</div>
            </li>
            ';
        }
        ?>
    </div>
</form>
