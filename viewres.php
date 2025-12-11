<?php
include('save.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>YOU HAVE LOOKED A ROOM OF:</h1>

<h2>ID:<?php echo $_POST['radio'] ;?></h2>
<h2>TYPE:<?php  echo $_POST['typeo'] ;  ?></h2>    
<br>



<form action='viewall.php' method="POST">
    
<input type="hidden" name="ido" value="<?php echo $_POST['radio'];?>">

<h1>PLEASE GIVE THE NUMBER OF DAYS AND THE DATE.</h1>

<h2>NUMBER OF DAYS<input type='text' name='nbdays'></h2>

<h2>From:<input type='date' name='date'></h2>

<input type='submit' name='viewres' value='ok'>

</form>
</body>
</html>
<style>
   
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    height: 100vh;
}

h1, h2 {
    color: #333;
}


form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    margin-top: 30px;
}

h1 {
    margin-bottom: 20px;
}

h2 {
    margin: 10px 0;
}


input[type="text"], input[type="date"], input[type="submit"] {
    padding: 10px;
    margin-top: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

input[type="text"], input[type="date"] {
    width: 200px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    width: auto;
    margin-top: 15px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


@media (max-width: 600px) {
    form {
        width: 90%;
    }

    h1, h2 {
        font-size: 18px;
    }

    input[type="text"], input[type="date"], input[type="submit"] {
        width: 100%;
        font-size: 14px;
        padding: 8px;
    }
}

</style>