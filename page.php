<?php require_once('header.php'); ?>

<?php
  $args = explode("/",$_GET["q"]);
  $file = file_get_contents('pages/'.$args[0].'.md');
  require_once('Parsedown.php');
  $Parsedown = new Parsedown();
?>

<article>
  <?php echo $Parsedown->text($file); ?>
</article>

<?php require_once('footer.php'); ?>
