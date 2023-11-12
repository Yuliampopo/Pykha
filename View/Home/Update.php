<div>Update User</div>
<form method = "post">
        <?php $row = array_shift($data);
        ?>
        <table>
            <tr style = "display: none">
                <td>id</td>
                <td><input type = "hidden" name = "id"></td>
            </tr>
        <tr>
            <td>Name</td>
            <td><input type = "text" name = "first_name" value = "<?php echo $row['first_name']?>"></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input type = "text" name = "second_name" value = "<?php echo $row['second_name']?>"></td>
        </tr>
        <tr>
            <td>Login</td>
            <td><input type = "text" name = "login" value = "<?php echo $row['login']?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type = "text" name = "password" value = "<?php echo $row['password']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type = "text" name = "email" value = "<?php echo $row['email']?>"></td>
        </tr>
    </table>
    <button type = "submit">Confirm</button>
</form>




