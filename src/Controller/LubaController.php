<?php

namespace Drupal\Luba\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class LubaController extends ControllerBase {
  public function content() {
    return new Response(
      '<h1>Luba is my happy place</h1>'
    );
  }
}
