<?php

while($row = mysqli_fetch_assoc($data['data'])){
    echo '<div style="display:flex; align-items:center; flex-direction: column; margin:auto;" class="container">
    <h1 class="title" style="text-align: center; color:#ac0c0e;font-family: sans-serif;">UPDATE USERS</h1>
    <form action="../../Updateuser/Update_customers/'.$row['id'].'" method="POST">
        <table>

            <tr>
                <th><label for="name">Username *</label></th>
                <th><input type="text" id="name" value="'.$row['username'].'" name="username"></th>
            </tr>
            <tr>
                <th><label for="password" class="password">Password*</label></th>
                <th><input type="password" id="password" value="'.$row['password'].'" name="password"></th>
            </tr>
            <tr>
                <th><label for="email" class="email">Email*</label></th>
                <th><input type="text" id="email" value="'.$row['email'].'" name="email"></th>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2"><button  class="btn_href" style="padding:10px ;" type="submit" id="btn" name="btn">Update </button></td>
            </tr>
        </table>

    </form>


</div>';
}
