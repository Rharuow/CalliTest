<?php
  include_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], join(DIRECTORY_SEPARATOR, ['util', 'util.php'])]);

  component('layouts.base', ['tabTitle' => 'login']);
  component('components.login-form');
  component('layouts.eof');
?>
