<table class="table">
    <tr>
        <th>Параллель</th>
        <th>Литера</th>
        <th>Классный руководитель</th>
    </tr>
    <?php foreach ($classes as $class): ?>
    <tr>
        <td><?=$class['parallel']?></td>
        <td><?=$class['letter']?></td>
        <td><?=$class['teacher_id']?></td>
    </tr>
    <?php endforeach ?>
</table>