<?php
if ($_SERVER['REQUST_METHOD']=='POST'){
    $name = $_POST["name"];

    //header(CSS: text/css);
}


?>
<!Doctype html>
<html>
    <link rel="stylesheet" href="main.css">
    <form method="POST" action="new.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" ><br>
        <label for="email">Email</label>
        <input type="email" id ="email" name="email"><br>
        <label for=""> User Issue</label>
        <select name="dropdown" id="dropdown">
            <option value="text">Query</option>
            <option value="text">Complaint</option>
            <option value="text"> Feedback</option>
            <option value="text">Other</option>

        </select><br>
        
        <label for="comment">Add a comment</label>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Comment" maxlength="150">

        </textarea>
        
        <input type="submit" value='submit'>
        
    </form>
</html>