<?php

    // configuration
    require("../includes/config.php"); 
    
    // dump($_POST);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST["ID"]) ) 
        {
            $posts = CS50::query("SELECT * FROM ". $_POST["table"] ." WHERE id = ?", $_POST["ID"]);
        }
    }
    

    $post = $posts[0];
    
    // render portfolio
    render("postView.php", ["title" => "Post", "post" => $post]);
    
?>