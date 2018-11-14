<?php
  $classes = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <div class="dominoes">
    <?php for ($i = 0; $i < 100; $i++) : ?>
    <div class="domino">
        <?php for ($j = 0; $j < 2; $j++) : ?>
          <?php $random = rand(0, count($classes)-1); ?>
          <div class="dots <?php echo $classes[$random]; ?>">
              <?php for ($k = 0; $k < $random; $k++) : ?>
                <div class="dot"></div>
              <?php endfor ?>
          </div>
        <?php endfor; ?>
    </div>
    <?php endfor; ?>
  </div>
</body>
</html>