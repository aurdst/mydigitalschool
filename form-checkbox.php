<?php

    var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        Valeur 1 <input type="checkbox" name="checkLot[]" value="value1" ><br />
        Valeur 2 <input type="checkbox" name="checkLot[]" value="value2" ><br />
        Valeur 3 <input type="checkbox" name="checkLot[]" value="value3" ><br />
        Valeur 4 <input type="checkbox" name="checkLot[]" value="value4" ><br />
        <input type="submit" value="envoyer">
    </form>
</body>
</html>