<?php

namespace Drupal\helloworld\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function HelloWorld() {
    return [
      '#title' => 'Test title',
      '#markup' => 'Test markup',
    ];
  }
}
