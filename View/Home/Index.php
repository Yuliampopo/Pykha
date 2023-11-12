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
            <?php foreach ($row as $sth) : ?>
                <td><?= $sth ?></td>
            <?php endforeach; ?>
            <td><a href = '/home/update?id=<?= $row['id'] ?>'>Update</a></td>
            <td><a href = '/home/delete?id=<?= $row['id'] ?>'>Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
