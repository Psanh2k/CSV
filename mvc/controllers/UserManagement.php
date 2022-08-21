<?php
class UserManagement extends Controller
{
    public $model;


    function __construct()
    {
        $this->model  = $this->model("SinhVienModel");
    }

    function Start()
    {
        $listAll = $this->model;
        $this->view("master", [
            "page" => "listUser",
            "data" => $listAll->Users(),
            'exp' => $listAll->Export()
        ]);
    }
   
}
