<!DOCTYPE html>
<head>  
    <title>PHP login system</title>  
    <?php include "include/header.php";?>
    <link rel = "stylesheet"  href = "main.css">   
</head>  
<body>  
    <nav>
        hai
    </nav>
<div id = "frm">  
        <h1>Profile</h1>  
        <form name="f1" action = "update.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> OLD PASSWORD :</label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>
            <label> New PASSWORD: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>
            <p>     
                <input type =  "submit" id = "btn" value = "update" />  
            </p>  
        </form>  
    </div>  
      
</body>
<?php include "include/footer.php";?>
</html>