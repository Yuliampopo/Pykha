<div>Gallery</div>
<table>
    <tr>
        <th>Song ID</th>
        <th>Year</th>
        <th>Author</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Length</th>
    </tr>
    <?php foreach ($data as $row) :?>
        <tr>
            <?php foreach ($row as $sth) : ?>
            <td><?= $sth ?></td>
            <?php endforeach; ?>
            <td><a href = '/gallery/update?id=<?= $row['id'] ?>'>Update</a></td>
            <td><a href = '/gallery/delete?id=<?= $row['id'] ?>'>Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


