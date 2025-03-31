<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('menu.php');
    include('mymethods.php');
    ?>
<form class="login" action="" method="post">
        <fieldset style="border:none">
            <h1><center><b><u>ADD-QUESTIONS</u></b></center></h1>

            <br><textarea rows=3 cols="50" placeholder=" Enter Question" name="question"></textarea><br>
            <br><textarea rows=2 cols="30" placeholder="Enter 1st Option" name="option1"></textarea><br>
            <br><textarea rows=2 cols="30" placeholder="Enter 2nd Option"name="option2"></textarea><br>
            <br><textarea rows=2 cols="30" placeholder=" Enter 3rd Option"name="option3"></textarea><br>
            <br><textarea rows=2 cols="30" placeholder="Enter 4th Option"name="option4"></textarea><br>
           
           Select Right Answer: <br>
            <select name="answer">
                <option> Choose the right answer </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>
            </select>
          
           <br><br> <input type="Submit" class="loginbtn" value="ADD QUESTION" name="add"><br><br><br>
           <br><textarea rows=3 cols="50" placeholder=" Enter explanation" name="explanation"></textarea><br>
        </fieldset>
    </form>
<?php

    if(isset($_POST['add']))
    {
        $res= questionanswer($_POST);
        
        if($res == 1)
        {
            echo "question added successfully";
        }
        else
            header('location:dashboard.php');
    }
?>
</body>
</html>