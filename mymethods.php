<?php
    function loginadmin($data)
    {
        $admin_id=$data['admin_id'];
        $password=$data['password'];

        $conn=mysqli_connect("localhost", "root" , "" ,"question");
        $sql="SELECT * FROM admin WHERE admin_id='$admin_id' and password='$password'";
        $res=mysqli_query($conn, $sql);
        return $res;

    }
    
    function questionanswer($data)
    {
        $question=$data['question'];
        $option1=$data['option1'];
        $option2=$data['option2'];
        $option3=$data['option3'];
        $option4=$data['option4'];
        $answer=$data['answer'];
        $explanation=$data['explanation'];

        $conn=mysqli_connect("localhost", "root","" ,"question");
        $sql="INSERT INTO question_answer(question, option1, option2, option3, option4, answer, explanation) 
        VALUES('$question', '$option1', '$option2','$option3','$option4','$answer', '$explanation')";
        $res=mysqli_query($conn, $sql);
        return $res;
        
    }
    


?>