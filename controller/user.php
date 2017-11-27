<?php

$model = binding(["user"]);

switch($_GET['user']){
  case 'save':
    if($_POST['id']){
      $model->user->update($_POST);
    }else{
      $model->user->save($_POST);
    }
  case 'delete':
    $model->user->delete($_GET['id']);
  default:
    header('location: ./');
}
