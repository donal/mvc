<?php

class Template {
  public $template_dir;

  public function display($file) {
    $template = $this;
    $path = $this->template_dir . $file;
    // include("$this->template_dir$file");
    include($this->template_dir . $file);
  }
}
