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
<form action="makeres.php" method="post">
    SELECT THE TYPE OF ROOM:<select name="select"><option>SINGLE</option><option>DOUBLE</option><option>TRIPLE</option></select>
    <input type="submit" name="ok1" value="ok">
</form>    

<form action="viewres.php" method="post">

<?php
if (isset($_POST['ok1'])) {

    echo"<table border=1>";
    echo"<tr><th>ID</th><th>FLOOR</th><th>PRICEPD</th><th>SELECT</th></tr>";
    
   foreach ($box->listroom as $key => $value) {
    
    if ($value->type==$_POST['select']) {
        
        echo"<tr><td>".$value->id."</td>";
        echo"<td>".$value->floor."</td>";
        echo"<td>".$value->pricepd."</td>";
        echo'<td><input type="radio" name="radio" value="'.$value->id.'"></td></tr>';
    }

   }

echo"</table>";
echo'<input type="submit" name="ok2" value="ok">';
}
?>

<input type="hidden" name="typeo" value="<?php echo $_POST['select'];?>">
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
    height: 100vh;
    text-align: center;
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
}

</style>