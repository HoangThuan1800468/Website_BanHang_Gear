<?php
class Controller{

    public function model($model){
        require_once "./mvc/Models/".$model.".php";
        return new $model;
    }
    public function view($view, $data=[]){
        require_once "./mvc/Views/".$view.".php";
    }
}
?>