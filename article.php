<?php require_once('header.php'); ?>

<?php
  $args = explode("/",$_GET["q"]);
  $file = file_get_contents('feed/'.$args[0].'/'.$args[1].'/'.$args[2].'-'.$args[3].'.md');
  require_once('Parsedown.php');
  $Parsedown = new Parsedown();
?>

<article>
  <?php echo $Parsedown->text($file); ?>
</article>

<?php require_once('footer.php'); ?>
