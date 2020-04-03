<!DOCTYPE html>
<html>
<head>
    <title>
        Forms
    </title>
</head>
<body>
    <?php
        $user = "sakib";
        $pass = "123456";
        if(isset($_GET['verify'])) //to check if the name = "submit" button was pressed
        {
            if(!empty($_GET['username']) && !empty($_GET['password']))
            {
                if(strlen($_GET['password']) != 6) echo "Password length must be exactly 6 <br>";
                if($_GET['username'] == $user && $_GET['password'] == $pass) echo "Logged in";
                elseif ($_GET['username'] != $user) echo "Invalid username";
                elseif ($_GET['password']) echo "The password does not match the username";
            }
            

        }
    ?>
    <form method="GET" action="">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <!-- type can be the type of input such as button(type is submit), dropdown etc -->
        <!--name is the name of the attribute that will be used in php-->
        <!-- value is the name that will be displayed on the button or input -->
        <input type="submit" name="verify" value="verify">

    </form>


</body>
</html>