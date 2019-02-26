<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 13:30
 */

namespace app\controllers;

use app\interfaces\IRenderer;


abstract class Controller {


    protected $action;
    protected $defaultAction = 'index';
    protected $layout = 'main';
    protected $useLayout = true;

    protected $renderer;

    public function __construct(IRenderer $renderer) {
        $this->renderer = $renderer;
    }

    public function runAction($action = null) {
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);

        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "Ошибка 404";
        }
    }

    protected function render($template, $params = []) {
        if ($this->useLayout) {
            return $this->renderTemplate(
                "{$this->layout}", ['content' => $content = $this->renderTemplate($template, $params)]);
        }
        return $this->renderTemplate($template, $params);
    }

    protected function renderTemplate($template, $params = []) {
        return $this->renderer->render($template, $params);
    }
}