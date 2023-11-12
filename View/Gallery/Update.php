<div>Update Gallery</div>
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
            <td><input type = "text" name = "name" value = "<?php echo $row['title']?>"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type = "text" name = "author_id" value = "<?php echo $row['author_id']?>"></td>
        </tr>
        <tr>
            <td>Length</td>
            <td><input type = "text" name = "length" value = "<?php echo $row['length']?>"></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><input type = "text" name = "year" value = "<?php echo $row['year']?>"></td>
        </tr>
        <tr>
            <td>Rate</td>
            <td><input type = "text" name = "rate" value = "<?php echo $row['rate']?>"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td><input type = "text" name = "genre_id" value = "<?php echo $row['genre_id']?>"></td>
        </tr>
        <tr>
            <td>Album</td>
            <td><input type = "text" name = "album_id" value = "<?php echo $row['album_id']?>"></td>
        </tr>
    </table>
    <button type = "submit">Update</button>
</form>



