<?php
  function component($path, $variables = [], $print = true) {
    $prefixPath = $_SERVER['DOCUMENT_ROOT'];
    $filePath = join(DIRECTORY_SEPARATOR, [$prefixPath, join(DIRECTORY_SEPARATOR, ['views', str_replace('.', DIRECTORY_SEPARATOR, $path) . (strpos($path, '.php') ? '' : '.php')])]);
    $output = NULL;

    if (file_exists($filePath)) {
      extract($variables);
      ob_start();
      include_once $filePath;
      $output = ob_get_clean();
    }

    if ($print) {
      print $output;
    }

    return $output;
  }

  function asset($path, $print = true) {
    $prefixPath = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'];
    $filePath = join('/', [$prefixPath, join('/', ['assets', preg_replace('/\./', '/', $path, substr_count($path, '.') - 1)])]);

    if ($print) {
      print $filePath;
    }

    return $filePath;
  }
?>
