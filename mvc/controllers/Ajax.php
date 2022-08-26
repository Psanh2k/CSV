<?php
class Ajax extends Controller
{
    public $model;
    public $usermodel;
    public function __construct()
    {
        $this->usermodel = $this->model("UserModel");
        $this->model  = $this->model("UserExport");
    }

    public function CheckUsername()
    {
        $un = $_POST['un'];
        $kq = $this->usermodel->CheckUsername($un);
        if ($kq) {
            echo "Ten da ton tai";
        }
    }
}
