<?php
  include_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], join(DIRECTORY_SEPARATOR, ['util', 'util.php'])]);

  component('layouts.base', ['tabTitle' => 'apresentação']);
  component('components.nav', ['brandTitle' => 'Callitest', 'brandLogo' => 'images.Logo UFRN.png', 'navItems' => [['label' => 'Entrar', 'path' => 'login.php'], ['label' => 'Cadastro', 'path' => 'signup.php']]]);
  component('components.carousel', ['carouselItems' => [['img' => 'images.carousel.background.jpg', 'title' => 'A', 'description' => 'aaa'], ['img' => 'images.carousel.background.jpg', 'title' => 'B', 'description' => 'bbb'], ['img' => 'images.carousel.background.jpg', 'title' => 'C', 'description' => 'ccc']]]);
  component('components.timeline', ['marks' => [['icon' => 'images.statistics.svg', 'title' => 'A'], ['icon' => 'images.calendar.svg', 'title' => 'B']]]);
  component('components.footer');
  component('layouts.eof');
?>
