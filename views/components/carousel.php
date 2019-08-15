<div class="carousel">
  <div class="controls">
    <a href="" class="prev">
      <img src="<?php asset('images.seta anterior.png'); ?>" alt="Anterior">
    </a>
    <a href="" class="next">
      <img src="<?php asset('images.seta próximo.png'); ?>" alt="Próximo">
    </a>
  </div>

  <div class="carousel-items">
    <?php foreach ($carouselItems as $carouselItem) : ?>
    <div class="carousel-item">
      <img class="slide-image" src=<?php asset($carouselItem['img']); ?> alt="<?php echo $carouselItem['title'] ?: 'Slide'; ?>">
      <?php if (isset($carouselItem['title']) && isset($carouselItem['description'])) : ?>
      <div class="caption">
        <h4><?php echo $carouselItem['title']; ?></h4>
        <p><?php echo $carouselItem['description'] ?></p>
      </div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>
