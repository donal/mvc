<?php

require_once(LIBRARY_PATH . DS . 'Template.php');
require_once(APP_PATH . DS . 'models/Thing.php');

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

    // get the thing with id = $id
    $things = Thing::retrieve(array('id' => $id));
    if (count($things) == 1) {
      $this->template->thing = $things[0];
    }
    $this->template->id = $id;

    $this->template->display('show.html.php');
  }

}
