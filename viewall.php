<?php
include("save.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>VIEW ALL CLIENT RESERVATIONS</h1>
<BR>
<form action="viewall.php" method="POST">
SELECT A CLIENT:<select name='nameselect'>
    <?php 
    $tmparry=array();
    foreach ($box->listclient as $value) {
        if (!in_array($value->name,$tmparry)) {
     echo "<option>".$value->name."</option>";
     array_push($tmparry,$value->name);
}  }?>
</select>

<input type="submit" name="ok6" value="OK">

</form>

<?php


if (isset($_POST['ok6'])) {
    
    echo "<table border=1>";
    echo "<tr><th>ROOM ID</th><th>TYPE</th><th>FLOOR</th><th>NB OF DAYS</th><th>FROM</th></tr>";

    foreach ($box->listres as $key=>$value) {
      
        if ($key==$_POST["nameselect"]) { 

        foreach($value as $key1=>$val){

                echo "<tr><td>".$val['roomId']."</td>";

                foreach($box->listroom as $value1){

                    if($value1->id == $val['roomId']){

                echo "<td>".$value1->type."</td>";
                   
                echo "<td>".$value1->floor."</td>";
                    }
                }
                echo "<td>".$val['nbOfDays']."</td>";
                echo "<td>".$val['date']."</td></tr>";
                }
    }
}
}
echo "</table>";
?>

<a href="client.php"><button> ADD NEW CLIENT</button></a>
<a href="main.php"><button> MAIN PAGE</button></a>

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

h1 {
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
    margin-bottom: 30px;
}

select, input[type="submit"] {
    padding: 10px;
    margin-top: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

select {
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


table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

input[type="radio"] {
    margin: 0;
}


button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    margin: 10px;
    width: auto;
}

button:hover {
    background-color: #45a049;
}


@media (max-width: 600px) {
    form {
        width: 90%;
    }

    h1 {
        font-size: 20px;
    }

    select, input[type="submit"], button {
        width: 100%;
        font-size: 14px;
        padding: 8px;
    }

    table th, table td {
        font-size: 14px;
        padding: 8px;
    }
}

</style>