
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 10</title>
</head>
<body>
    <H1>Практическая 10 </H1>
    <H2>Задание 1 </H2>
    <form method="post">
Фамилия <input name="l"><br>
Имя <input name="f"><br>
Отчество <input name="m"><br>
<button>OK</button>
</form>
<?php if($_POST){echo "Фамилия: ".htmlspecialchars($_POST['l'])."<br>Имя: ".htmlspecialchars($_POST['f'])."<br>Отчество: ".htmlspecialchars($_POST['m']);}?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Задание 2</h2>
<form method="post">
Число <input name="n" type="number" required> <button>Делители</button>
</form>
<?php if($_POST){
  $n=(int)$_POST['n'];
  if($n>0){
    echo "Делители $n: ";
    for($i=1;$i<=$n;$i++) if($n%$i==0) echo "$i ";
  }
}?>
</body>
</html>


<H2>Задание 3</H2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


