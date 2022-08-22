<?php
class Adduser extends Controller
{
    public $model;
    public $usermodel;


    function __construct()
    {
        $this->model  = $this->model("UserExport");
        $this->usermodel = $this->model("UserModel");
    }

    function Start()
    {
        $this->view("master", [
            "page" => "adduser"
        ]);
    }

    public function KhachHangDangKy()
    {
        // get data khach hang nhap
        if (isset($_POST['btn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST['email'];

            // insert database
            $kq = $this->usermodel->AddUser($username, $password, $email);

            // Hien thi trang thai
            $this->view("master", [
                "page" => "addsuccess",
                "result" => $kq
            ]);
        }
    }
}
