<?php
class Updateuser extends Controller
{
    public $model;
    public $usermodel;

    function __construct()
    {
        $this->model  = $this->model("SinhVienModel");
        $this->usermodel = $this->model("UserModel");
    }

    function Update($id)
    {
        $teo = $this->model;
        $this->view("master", [
            "page" => "updateuser",
            "data" => $teo->User($id)
        ]);
    }
    public function KhachHangUpdate($id)
    {
        // get data khach hang nhap
        if (isset($_POST['btn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST['email'];

            // insert database
            $kq = $this->usermodel->UpdateUser($username, $password, $email, $id);

            // Hien thi trang thai
            $teo = $this->model;
            $this->view("master", [
                "page" => "updatesuccess",
                "result" => $kq
            ]);
        }
    }
}