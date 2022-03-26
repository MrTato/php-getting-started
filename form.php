<?php
    if (isset($_POST['searchterm'])) {
        echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
    }
?>

<form action="" method="post">
    User name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f"> female
        <input type="radio" name="gender" value="m"> male <br>
    Favorite color:
        <select name="color">
            <option value="">Please select</option>
            <option value="#f00">red</option>
            <option value="#0f0">green</option>
            <option value="#00f">blue</option>
        </select><br>
    Languages spoken:
        <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br>
    Comments:<textarea name="comments"></textarea><br>
    <input type="checkbox" name="tc" value="ok"> I accept the T&amp;C<br>
    <input type="submit" value="Search">
</form>