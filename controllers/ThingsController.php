<?php

require_once(LIBRARY_PATH . DS . 'Template.php');

class ThingsController {

  public function __construct() {
    $this->template = new Template;
    $this->template->template_dir = APP_PATH . DS . 'views' . DS . 'things' . DS;

    $this->template->title = 'Things';
  }

  public function index() {
    $this->template->display('index.html.php');
  }

  public function show($id) {
    $this->template->id = $id;

    $this->template->display('show.html.php');
  }

}
