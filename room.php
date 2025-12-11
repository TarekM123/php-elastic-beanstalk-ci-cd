<?php
include('save.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="room.php" method="post">

    <h1>ADD A ROOM</h1>

<table>

<tr>
    <th>ID</th>
    <td><input type="text" name="id"></td>
</tr>

<tr>
    <th>FLOOR</th>
    <td><input type="text" name="floor"></td>
</tr>
<tr>
    <th>TYPE</th>
    <td><select name="type"><option >SINGLE</option><option>DOUBLE</option><option>TRIPLE</option></select></td>
</tr>
<tr>
    <th>PRICE PER DAY</th>
    <td><input type="text" name="pricepd"></td>
</tr>
</table>

<input type="submit" name="ok" value="OK">

<a href="main.php"><input type="button" value="BACK"></a>
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
    height: 100vh;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}


form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
}

table {
    width: 100%;
    margin-bottom: 20px;
    border-spacing: 10px;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    width: 30%;
    background-color: #f2f2f2;
}

input[type="text"], select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"], input[type="button"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    margin-top: 10px;
}

input[type="submit"]:hover, input[type="button"]:hover {
    background-color: #45a049;
}

a {
    text-decoration: none;
}

@media (max-width: 600px) {
    form {
        width: 90%;
    }
    
    h1 {
        font-size: 20px;
    }
    
    input[type="text"], select, input[type="submit"], input[type="button"] {
        font-size: 14px;
        padding: 8px;
    }
}

</style>