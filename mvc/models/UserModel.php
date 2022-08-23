<?php
class UserModel extends DB
{
    public function AddUser($username, $password, $email)
    {
        $qr = "INSERT INTO users  (username, password, email)  VALUES ('$username','$password','$email')";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return $result;
    }
    public function UpdateUser($username, $password, $email, $id)
    {
        $qr = "UPDATE users SET username = '$username', password = '$password', email = '$email' WHERE id = $id ";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return $result;
    }
    public function DeleteUser($id)
    {
        $qr = "DELETE FROM users WHERE id = $id ";
        $result = false;
        if (mysqli_query($this->conn, $qr)) {
            $result = true;
        }
        return $result;
    }
    public function CheckUsername($un)
    {
        $qr = "SELECT * FROM users WHERE username = '$un'";
        $row = mysqli_query($this->conn, $qr);
        $kq = false;
        if (mysqli_num_rows($row) > 0) {
            $kq = true;
        }
        return $kq;
    }
    public function CheckUsernameUpdate($un, $id)
    {
        $qr = "SELECT * FROM users WHERE username = '$un' AND id != $id";
        $row = mysqli_query($this->conn, $qr);
        $kq = false;
        if (mysqli_num_rows($row) > 0) {
            $kq = true;
        }
        return $kq;
    }
}
