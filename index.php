<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
<?php
function sentence($firstname, $age)
{
$sentence = $firstname . ', ' . $age;
return $sentence;
}
$sentence = sentence('Cédric', 34);
echo $sentence;
 ?>
    </p>
  </body>
</html>
