<header class="topbar">
  <a class="brand" href="/"><?php echo $brandTitle; ?></a> 

  <a href="/">
    <img class="header-brand-logo" src="<?php asset($brandLogo); ?>"/>
  </a>

  <nav class="navbar">
  <?php foreach ($navItems as $navItem): ?>
    <a href="<?php echo $navItem['path']?>"><?php echo $navItem['label']?></a>
  <?php endforeach; ?>
  </nav>
</header>
