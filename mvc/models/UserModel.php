<?php
class UserModel extends DB
{
    public function AddUser($username, $password, $email)
    {
        $qr = "INSERT INTO user  (username, password, email)  VALUES ('$username','$password','$email')";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return $result;
    }
    public function UpdateUser($username, $password, $email, $id)
    {
        $qr = "UPDATE user SET username = '$username', password = '$password', email = '$email' WHERE id = $id ";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return $result;
    }

    public function CheckUsername($un)
    {
        $qr = "SELECT id FROM users WHERE username = '$un'";
        $row = mysqli_query($this->conn, $qr);
        $kq = false;
        if (mysqli_num_rows($row) > 0) {
            $kq = true;
        }

        if ($kq) {
            echo "Tên đã bị trùng.Vui lòng nhập tên khác";
        }
        return json_encode($kq);
    }
}