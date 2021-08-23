<ul>
  <?php foreach($teachers as $teacher): ?>
    <li><?=$teacher['last_name']?> <?=$teacher['name'] ?> <?=$teacher['otch']?></li>
  <?php endforeach ?>
</ul>