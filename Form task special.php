<!DOCTYPE html>
<html>
<head>
    <title>
        Forms
    </title>
</head>
<body>
    <?php
        if(isset($_GET['add'])) //to check if the name = "submit" button was pressed
        {
            if(!empty($_GET['num1']) && (!empty($_GET['num2']) || $_GET['num2'] == '0'))
            {
            	echo $_GET['num1'] + $_GET['num2']; 
            }
            else echo "No number provided";   
        }
    	else if(isset($_GET['sub'])) //to check if the name = "submit" button was pressed
        {
            if(!empty($_GET['num1']) && (!empty($_GET['num2']) || $_GET['num2'] == '0'))
            {
            	echo $_GET['num1'] - $_GET['num2']; 
            }
            else echo "No number provided";   
        }
        else if(isset($_GET['mul'])) //to check if the name = "submit" button was pressed
        {
            if(!empty($_GET['num1']) && (!empty($_GET['num2']) || $_GET['num2'] == '0'))
            {
            	echo $_GET['num1'] * $_GET['num2']; 
            }
            else echo "No number provided";   
        }
       	else if(isset($_GET['div']))
        {
            if(!empty($_GET['num1']) && (!empty($_GET['num2'])))
            {
            	echo $_GET['num1'] / $_GET['num2']; 
            }
            elseif ($_GET['num2'] == '0') 
            {
            	echo "Division not possible";
            }
            else echo "No number provided";   
        }
    ?>
    <form method="GET" action="">
        <input type="text" name="num1"><br>
        <input type="text" name="num2"><br>
        <!-- type can be the type of input such as button(type is submit), dropdown etc -->
        <!--name is the name of the attribute that will be used in php-->
        <!-- value is the name that will be displayed on the button or input -->
        <input type="submit" name="add" value="Add">
        <input type="submit" name="sub" value="Subtract">
        <input type="submit" name="mul" value="Multiply">
        <input type="submit" name="div" value="Divide">

    </form>


</body>
</html>