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
            $filename = 'export.csv';
            //output the headers for the CSV file
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header('Content-Description: File Transfer');
            header("Content-type: text/csv");
            header("Content-Disposition: attachment; filename={$filename}");
            header("Expires: 0");
            header("Pragma: public");

            //open the file stream
            $fh = fopen('php://output', 'w');
            $arr = $model->Export();
            foreach ($arr as $item) {
                fputcsv($fh, $item);
            }
            // Close the file stream
            fclose($fh);
        }
    }
}
