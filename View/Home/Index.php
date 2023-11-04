<div>Home</div>
<table>
    <tr>
        <th>First_name</th>
        <th>Second_name</th>
        <th>Login</th>
        <th>Email</th>
    </tr>
    <?php foreach ($data as $row) :?>
        <tr>
            <td><?= $row['first_name']?></td>
            <td><?= $row['second_name']?></td>
            <td><?= $row['login']?></td>
            <td><?= $row['email']?></td>
        </tr>
    <?php endforeach; ?>
</table>
