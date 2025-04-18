<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #333;
            color: aqua;
            align-items: center;
        }
        form{
            background-color: #134;
            width: fit-content;
            display:grid;
            align-items: center;
            border: #134 3px solid;
            border-radius: 10px;
            padding: 5px;
        }
        input{
            background-color: #333;
            color: aqua;
            width: max-content;
        }
    </style>
</head>
<body>
    <h1>enter user details</h1>
    <form method="post">
        name:<input type="text" name="na"><br>
        phone number:<input type="number" name="phno"><br>
        other:<input type="text" name="other"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    $server="SPOORTHI\MSSQL";
    $users=["Datebase"=>"details","Uid"=>"","PWD"=>""];
    $con=sqlsrv_connect($server,$users);
    if($_PUSH(['submit'])){
        $name=$_PUSH['na'];
        $phno=$_PUSH['phno'];
        $others=$_PUSH['other'];
        $query="insert into details values($name,$phno,$others)";
        sqlsrv_query($con,$query);
}
    ?>
</body>
</html>
