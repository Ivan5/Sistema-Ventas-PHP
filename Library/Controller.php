<?php

class Controller
{
  public function __construct()
  {
    echo "Sistema de Ventas";
  }

  public function loadClassModels()
  {
    $model = get_class($this) . '_model';
    $path = 'Model/' . $model . '.php';
    if (file_exists(($path))) {
      require $path;
      $this->model = new $model();
    }
  }
}
