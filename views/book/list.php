<?php include '../layout/header.php';?>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
    </tr>
    <?php foreach ($books as $book): ?>
    <tr>
        <td><?=$book->title?></td>
        <td><?=$book->description?></td>
    </tr>
    <?php endforeach;?>
</table>