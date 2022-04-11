<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>7</title>
</head>
<body style="padding: 1%;">
    <p>Voer hieronder een aantal getallen in. Dat doe je als volgt: 4, 55, 22, 4, 34, 65</p>
    <form method="GET" name="form">
        <p>Voer hier de getallen in: <input type="text" name="getallen"></p>
        <button>Submit</button>
    </form>
    

<?php 
if(isset($_GET['getallen'])){
    $arrayGetallen= explode(",",$_GET['getallen']);
    $sum = count($arrayGetallen);

    echo "De gesorteerde getallen: ";
    sort($arrayGetallen);
    $result = "";
    foreach($arrayGetallen as $getal){
        $result = $result.$getal.",";
    }
    echo substr($result, 0, -1);
    echo "<br>"."Dit zijn het aantal elementen: ".$sum;
}

?>
</body>
</html> 
