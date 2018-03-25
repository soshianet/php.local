<html>
<?php include_once "functions.php";
    $result;
   if(isset($_POST['numbers'])) {
//       ?var_dump($_POST);
       $result = setNumber($_POST['numbers']);
   }
?>
<head>
    <title>tamrin1</title>
</head>
<body>
<input type="text" value="<?php echo get_number(); ?>">

<form action="index.php" method="post">
<input type="radio" name="numbers" value="number_1">number_1
<input type="radio" name="numbers" value="number_2">number_2
<input type="radio" name="numbers" value="number_3">number_3
    <input type="submit">
</form>
<p>output: <?php $result; ?></p>
<input type="text" value=" <?php $result; ?>">
</body>
</html>