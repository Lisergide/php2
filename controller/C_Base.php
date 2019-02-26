<?php
//
// Базовый контроллер сайта.
//
abstract class C_Base extends C_Controller {
    protected $title;        // заголовок страницы
    protected $content;      // содержание страницы
    protected $msg;          // сообщение


    //
    // Конструктор.
    //
    function __construct() {

    }

    protected function before() {
        $this->title = 'Название сайта';
        $this->content = '';
        $this->msg = '';
    }

    //
    // Генерация базового шаблонаы
    //
    public function render() {
        $vars = array('title' => $this->title, 'content' => $this->content, 'msg' => $this->msg);
        $page = $this->Template('view/v_main.php', $vars);
        echo $page;
    }
}
