<table class="table table-striped">
    <tr>
       <th>ФИО</th>
    </tr>
    <?php foreach($teachers as $teacher): ?>
    <tr>
        <td>
            <?=$teacher['last_name']?> <?=$teacher['name'] ?> <?=$teacher['otch']?>
        </td>
        <td><a href="/edit-teacher?id=<?=$teacher['teacher_id']?>"><button type="button" class="btn btn-primary">Редактировать</button></a></td>
        <td><a href="?id=<?=$teacher['teacher_id']?>&action=del"><button type="button" class="btn btn-danger">Удалить</button></a></td>
    </tr>
    <?php endforeach ?>
</table>