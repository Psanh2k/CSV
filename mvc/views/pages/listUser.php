<div class="div">
    <a class="btn_href" href="./Adduser">AddUser</a>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Username</th>
                <th>PassWord</th>
                <th>Email</th>
                <th>Creat_at</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $data['data']->fetch_assoc()) {
                echo    "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['password'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['Creat_at'] . "</td>
                        <td><a class='btn_href' href='./Updateuser/Update/" . $row['id'] . "'>Update</a></td>
                    ";
            }


            ?>
        </tbody>
    </table>
</div>
<form action="" method="POST">
    <input style="background-color: red; margin-top:10px;" type="submit" name="btn1" id="btn1" value="Export Users">
</form>
<?php
if ($data['exp']) {
    if (isset($_POST['btn1'])) {
        $fn = "csv_" . uniqid() . ".csv";
        $file = fopen("./files/" . $fn, "w");
        $rows = $data['exp'];
        $result = false;
        foreach ($rows as $row) {
            if (fputcsv($file, $row)) {
                $result = true;
            };
        }
        if ($result) {
            echo "<div style='text-align:center; margin-top:20px; font-weight:bold;'>EXPORT THANH CONG<div>";
        } else {
            echo "<div style='text-align:center; margin-top:20px; font-weight:bold;'>EXPORT THAT BAI<div>";
        }
        fclose($file);
    }
}

?>