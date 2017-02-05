<?php

    // configuration
    require("../includes/config.php"); 
    

    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST["title"]) && isset($_POST["post"]) && isset($_POST["tabs"])) 
        {
            CS50::query("INSERT INTO ".$_POST["tabs"]." (Title,Post,Images) VALUES(?,?,?)", $_POST["title"], nl2br($_POST["post"]),
                $_POST["images"]);
        }
    }
    
    $comments = CS50::query("SELECT * FROM Comments");
?>
    <form action="submitpost.php" method="POST">
<center><table>
<tr><td>Title: <br><input type="text" name="title"/></td></tr>
<tr><td colspan="2">Post: </td></tr>
<tr><td colspan="5"><textarea name="post" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2">Images: </td></tr>
<tr><td colspan="5"><textarea name="images" rows="10" cols="50"></textarea></td></tr>

<tr><td><select name="tabs">
  <option value="Eat">Eat</option>
</select></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Post"></td></tr>
</table></center>
</form>
    
    
