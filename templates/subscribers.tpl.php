<?php
/**
 * @file
 * subscribers.tpl.php
 */

if (!count($list)) :
?>
  <p><?php echo t('Selected mailing list has no subscribers.') ?></p>
<?php else : ?>
  <ol>
    <?php foreach ($list as $subscriber) : ?>
      <li><?php echo $subscriber ?></li>
    <?php endforeach ?>
  </ol>
<?php endif;
