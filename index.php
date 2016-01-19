<?php

include_once("connect.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
    <link type="text/css" rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>
<div class="container">
    <div class="row" id="top-logo">
        <h1>Games</h1>
    </div>

</html>

<?php $sql = "SELECT Game_id, Game_name, Game_link, Game_img, Game_score FROM Games";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $loopResult= '<div class="row">
            <div class="col-md-4">
             <h3>' . $row['Game_name'] .'</h3>
            </div>
            <div class="col-md-3">
             <img id="cnc" src='.$row['Game_img'].'>
            </div>
         <div class="col-md-4">
              <a href='.$row['Game_link'].'>'.$row['Game_link'].'</a>
             </div>
             <div class="col-md-1">
             <h3>' . $row['Game_score'] .'</h3>
             <select>
             <option value="5">5</option>
             <option value="4">4</option>
             <option value="3">3</option>
             <option value="2">2</option>
             <option value="1">1</option>
             <input type="submit" value="Submit">
             </select>
            </div>';

        echo $loopResult;
                }

} else {
    echo "0 results";
}
$connection->close();
?>