<?php
include "functions.php";
include "users.php";
//$background = "#fff";
//if(isset($_POST)){
////    var_dump($_POST);
//    $background = select_bg_color($_POST['background']);
//}
$users = get_users();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test php</title>
      <style>
          table,tr,th,td{
              border: 1px solid #ddd;
          }
      </style>
  </head>
  <body style="background-color: <?php echo $background;?>">
<!--  <form action="" method="post">-->
<!--      <input type="radio" name="background" value="red">RED-->
<!--      <input type="radio" name="background" value="green">GREEN-->
<!--      <input type="radio" name="background" value="blue">BLUE-->
<!---->
<!--      <input type="submit" name="send" value="send">-->
<!--  </form>-->
<!--  </body>-->

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>links</th>
    </tr>
  <?php if ($users && count($users)>0):?>
    <?php foreach ($users as $user):?>
        <tr>

            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['age'] ?></td>
            <td>
                <a href="#">delete</a>
                <a href="#">approve</a>
                <a href="#">save</a>
            </td>

        </tr>
    <?php endforeach?>
  <?php else:?>
      <tr>
          <td colspan="4">هیچ اطلاعاتی برای نمایش وجود ندارد.</td>
      </tr>
<?php endif;?>


</table>

<!--  --><?php //foreach ($users as $user):?>
<!--    <p>--><?php //echo $user['id'];?><!--</p>-->
<!--  --><?php //endforeach;?>

<!--  <table>-->
<!--      --><?php //for ($i = 1 ;$i<11 ; $i++):?>
<!--        <tr>-->
<!--            --><?php //for ($j = 1;$j<11 ;$j++ ):?>
<!--                --><?php
//                    $red = mt_rand(0,255);
//                    $green = mt_rand(0,255);
//                    $blue = mt_rand(0,255);
//                ?>
<!--                <td style="background-color: rgb(--><?php //echo $red.','.$green.','.$blue;?>/*)">*/<?php //echo $i*$j;?><!--</td>-->
<!--            --><?php //endfor;?>
<!--        </tr>-->
<!--      --><?php //endfor;?>
<!--  </table>-->

<?php foreach ($users as $user):?>
    <?php
    $post = "Hello Dear #name#.{email} ";
    ?>
    <?php
    $post = str_replace('#name#',$user['name'],$post);
    ?>
  <p><?php echo $post;?></p>

<?php endforeach;?>
  <input type="text" value="<?php echo set_numbers(35,98); ?>">
  <input type="text" value="<?php echo greater_than(); ?>">


</html>
