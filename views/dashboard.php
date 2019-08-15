<?php
  include_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], join(DIRECTORY_SEPARATOR, ['util', 'util.php'])]);

  component('layouts.base', ['tabTitle' => 'dashboard']);
?>
  <main class="flex">
<?php
  component('components.sidenav', ['admName' => 'Pesquisador', 'menuItems' => [['path' => 'pesquisas.php', 'label' => 'Pesquisas'], ['path' => 'animais.php', 'label' => 'Animais'], ['path' => 'membros.php', 'label' => 'Membros'], ['path' => '/', 'label' => 'Sair', 'logout' => '']]]);
  // component('components.profile-dashboard', []);
?>
  </main>
<?php
  component('layouts.eof');
?>