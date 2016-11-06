<?php
namespace w2test\ViewModels;

class Login extends Base {
  public $data = [
    'error_message' => ''
  ];

  public function getSources() {
    return array_merge(parent::getSources(), [
      'username' => $_POST,
      'password' => $_POST
    ]);
  }
}
