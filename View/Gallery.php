<div>Gallery</div>
<table>
    <tr>
        <th>Style</th>
        <th>Author</th>
        <th>Title</th>
        <th>Length</th>
    </tr>
    <?php foreach ($data as $row) :?>
        <tr>
            <td><?= $row['style']?></td>
            <td><?= $row['author']?></td>
            <td><?= $row['title']?></td>
            <td><?= $row['length']?></td>
        </tr>
    <?php endforeach; ?>
</table>


