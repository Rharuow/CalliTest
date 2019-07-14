<aside class="sidenav">
  <header>
    <figure class="researcher">
      <img src="<?php asset('images.woman.svg'); ?>" alt="<?php echo $admName; ?>">
      <figcaption><?php echo $admName; ?></figcaption>
    </figure>
  </header>

  <nav class="menu">
    <?php foreach ($menuItems as $menuItem) : ?>
    <a <?php echo isset($menuItem['logout']) ? 'class="logout"' : '' ; ?> href="<?php echo $menuItem['path']; ?>"><?php echo $menuItem['label']; ?></a>
    <?php endforeach; ?>
  </nav>
</aside>
