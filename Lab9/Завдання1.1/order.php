<?php
  $product = $_POST["product"];
  $material = $_POST["material"];
  $quantity = $_POST["quantity"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Обробка замовлення</title>
</head>
<body>
  <h2>Ваше замовлення прийнято</h2>
  <p>Замовлено виріб - <?php echo $product; ?></p>
  <p>Матеріал - <?php echo $material; ?></p>
  <p>Кількість - <?php echo $quantity; ?></p>
</body>
</html>