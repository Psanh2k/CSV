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
        $qr = "SELECT id FROM user WHERE username = '$un'";
        $row = mysqli_query($this->conn, $qr);
        $kq = false;
        if (mysqli_num_rows($row) > 0) {
            $kq = true;
        }
        return $kq;
    }
    public function UpdateExceptID($id)
    {
        $qr = "SELECT * FROM user WHERE id != $id";
        $row = mysqli_query($this->conn, $qr);
        $kq = false;
        if (mysqli_num_rows($row) > 0) {
            $kq = true;
        }
        return $kq;
    }
}
