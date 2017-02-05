<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/alignHorizontal.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/hoverVariableSize.css" rel="stylesheet"/>
        
        

        

    </head>

    <body>

            <div id="top">
                <!--<div  >-->
                <!--    <a href="/"><img class="imgbanner" alt="Andrea's Blog" src="/img/andrea antonetti banner2.jpg"/></a>-->
                <!--</div>-->
                
                    <!--<ul class="nav nav-pills">-->
                    <!--    <li><a href="home.php">Home</a></li>-->
                    <!--    <li><a href="about.php">About Us</a></li>-->
                    <!--    <li><a href="contact.php">Contact Us</a></li>-->
                        
                    <!--</ul>-->
                
                <img class="logo-img" alt="Andrea's Blog" src="/img/logoAndrea.jpg">
                     
                <ul class="topnav" id="myTopnav">
                      <li><a href="/">Home</a></li>
                      <li><a href="/photography.php">Photography</a></li>
                      <li><a href="#contact">Lifestyle</a></li>
                      <li><a href="#about">About</a></li>
                      
                      <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                      </li>
                </ul>
                    
                <script>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
                </script>
                    
                    
            </div>

            <div id="middle">
           
