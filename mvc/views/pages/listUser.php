<div class="div">
    <h1 style="text-align: center; color:#ac0c0e;font-family:sans-serif;">List User</h1>
    <a class="btn_href" href="./Adduser">AddUser</a>
</div>
<div>
    <table style="margin:auto;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Username</th>
                <th>PassWord</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Update & Delete</th>
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
                        <td>" . $row['Created_at'] . "</td>
                        <td>
                        <a style= 'margin:10px' class='btn_href' href='./Updateuser/Update/" . $row['id'] . "'>Update</a>
                        <a style= 'margin:10px' class='btn_href' href='./Deleteuser/Delete_customers/" . $row['id'] . "'>Delete</a>
                        </td>
                    ";
            }


            ?>
        </tbody>
    </table>
</div>
<form action="./Export/ExportUser" method="POST">
    <input style="background-color: red; margin-top:10px;" type="submit" name="btn1" id="btn1" value="Export Users">    
</form>
<div id="messageUn1"></div>