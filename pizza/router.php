<?php
include_once ('Controller.php');
$controller = Controller::getPizza($_POST['pizzaId'],$_POST['sousId'],$_POST['sizeId']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
</head>
<body>
<h3>Чек</h3>
<h3>Pizza:<?php echo " ".$controller['name'] ?></h3>
<h3>Size:<?php echo " ".$controller['size']." "."cm " ?></h3>
<h3>Sous:<?php echo " ".$controller['sous'] ?></h3>
<h3>Price:<?php echo " ".$controller['price']." "."$" ?></h3>
<br><br>
<a href="index.html">Заказать еще</a>
</body>
</html>
