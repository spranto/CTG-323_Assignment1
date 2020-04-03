<!DOCTYPE html>
<html>
<head>
    <title>
        Forms
    </title>
</head>
<body>
    <?php
        if(isset($_GET['Add'])) //to check if the name = "Add" button was pressed
        {
            if(!empty($_GET['first']) && !empty($_GET['second']) && !empty($_GET['third']))
            {
                echo $_GET['first'] + $_GET['second'] + $_GET['third'];
            }
            

        }
    ?>
    <form method="GET" action="">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="text" name="third"><br>
        <!-- type can be the type of input such as button(type is submit), dropdown etc -->
        <!--name is the name of the attribute that will be used in php-->
        <!-- value is the name that will be displayed on the button or input -->
        <input type="submit" name="Add" value="Add">

    </form>


</body>
</html>