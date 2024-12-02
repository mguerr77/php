<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello mundo</p>';
    $numA=8;
    echo "El valor de la variable al asignarle valor inicial es:" , $numA;
    echo "<br>";
    echo "Hago un pre incremento:" , ++$numA;
    echo "<br>";
    echo "después del preincremento:" , $numA;
    echo "<br>";
    echo "hago un post incremento" , $numA++;
    echo "<br>";
    echo "después del post incremento:" , $numA;
    echo "<br>";
    ?>

</html>