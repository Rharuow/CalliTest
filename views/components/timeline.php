<section class="timeline">
  <hr />

  <?php foreach ($marks as $index => $mark) : ?>
  <div class="mark <?php echo $index % 2 === 0 ? 'even' : 'odd'; ?>">
    <div class="mark-icon">
      <img src="<?php asset($mark['icon']); ?>" alt="<?php echo $mark['title']; ?>">
    </div>
    <div class="mark-title">
      <?php echo $mark['title']; ?>
    </div>
  </div>
  <?php endforeach; ?>
</section>
