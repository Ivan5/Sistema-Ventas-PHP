<?php

class Controller
{
  public function __construct()
  {
    $this->loadClassModels();
  }

  public function loadClassModels()
  {
    $model = get_class($this) . '_model';
    $path = 'Models/' . $model . '.php';
    if (file_exists(($path))) {
      require $path;
      $this->model = new $model();
    }
  }
}
