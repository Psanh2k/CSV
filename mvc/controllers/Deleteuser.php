<?php
class Deleteuser extends Controller
{
    public $model;
    public $usermodel;

    function __construct()
    {
        $this->model  = $this->model("UserExport");
        $this->usermodel = $this->model("UserModel");
    }
    public function Delete_customers($id)
    {
        $kq = $this->usermodel;
        $delete = $kq->DeleteUser($id);
        $rs = false;
        if ($delete) {
            $rs = true;
        }
        if ($rs) {

            $this->view("master", [
                "page" => "activeDelete",
                "rs" => $rs 
            ]);
        }
    }
}
