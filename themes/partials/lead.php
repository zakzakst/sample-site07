<?php if ($args['align'] == 'right') : ?>
  <div class="lead is-align-right">
<?php else : ?>
  <div class="lead">
<?php endif; ?>
  <h2 class="lead__heading">
    <span class="lead__shoulder"><?php echo $args['shoulder']; ?></span><?php echo $args['heading']; ?>
  </h2>
  <p class="lead__text"><?php echo $args['text']; ?></p>
</div>