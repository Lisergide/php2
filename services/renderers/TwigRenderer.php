<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 16:22
 */

namespace app\services\renderers;

use app\interfaces\IRenderer;

class TwigRenderer implements IRenderer {

  protected $templater;

  public function __construct() {
    $this->templater = new \Twig_Environment(
      new \Twig_Loader_Filesystem(TEMPLATES_DIR . "twig"),
      ['autoescape' => false]
    );
  }

  public function render($template, $params = []) {
    $template .= ".twig";
    return $this->templater->render($template, $params);
  }
}