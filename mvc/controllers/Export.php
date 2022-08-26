<?php
class Export extends Controller
{
    public $model;

    public $usermodel;
    public function __construct()
    {
        $this->usermodel = $this->model("UserModel");
        $this->model  = $this->model("UserExport");
    }

    public function ExportUser()
    {
        $model = $this->model;
        if (isset($_POST['btn1'])) {
            $fn = "csv_" . uniqid() . ".csv";
            $file = fopen("./files/" . $fn, "w");
            $rows = $model->Export();
            $result = false;
            foreach ($rows as $row) {
                if (fputcsv($file, $row)) {
                    $result = true;
                };
            }
            $this->view("master", [
                "page" => "activeExport",
                "rs" => $result,

            ]);
            fclose($file);
        }
    }
}
