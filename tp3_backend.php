<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print "<p>Ejercicio 1</p>\n";
for ($i=1; $i <=100 ; $i++) {
    print "<p>$i</p>\n";
}
print "<p>Ejercicio 2</p>\n";
for ($i=100 ; $i >= 1 ; $i-- ) {
    print "<p>$i</p>\n";
}
print "<p>Ejercicio 3</p>\n";
for ($i=0;$i<=100;$i++) {
    if($i%2==0){
        print "<p>$i</p>\n";
    }
};
print "<p>Ejercicio 4</p>\n";
for ($i = 1; $i <= 100; $i += 2) {
    print "<p>$i</p>\n";
}
print "<p>Ejercicio 5</p>\n";
$acumulador=0;
    for ($i=1;$i<=20;$i++) {
      $acumulador+=$i;
      print "<p>$acumulador</p>";
}
    print "<p>Ejercicio 6</p>\n";
    $acumulador=0;
    for ($i=1;$i<=20;$i++) {
        if($i%2==0){
            $acumulador+=$i;
            print "<p>$acumulador</p>";
        }
}








?>


</body>
</html>