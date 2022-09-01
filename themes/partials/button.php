<?php if ($args['align'] == 'right') : ?>
  <div class="button__wrapper is-align-right">
<?php elseif ($args['align'] == 'center') : ?>
  <div class="button__wrapper is-align-center">
<?php else : ?>
<div class="button__wrapper">
<?php endif; ?>
  <a href="<?php echo $args['href']; ?>" class="button"><?php echo $args['text']; ?></a>
</div>