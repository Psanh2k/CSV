<?php
class UserExport extends DB
{
    public function Users()
    {
        $qr = "SELECT * FROM users";
        return mysqli_query($this->conn, $qr);
    }

    public function User($id)
    {
        $qr = "SELECT * FROM users WHERE id='$id'";
        return mysqli_query($this->conn, $qr);
    }
    public function Export()
    {
        $qr = "SELECT * FROM users";
        $run = mysqli_query($this->conn, $qr);
        $arr = [];
        if (mysqli_num_rows($run) > 0) {
            while ($row = $run->fetch_array(MYSQLI_NUM)) {
                $arr[] = $row;
            }
            return $arr;
        }
    }
}
