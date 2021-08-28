<form method="post">
  <label>
    Параллель: <input type="text", name="parallel">
  </label>
  <label>
    Литера: <input type="text", name="letter">
  </label>
  <label>
    Классный руководитель:
      <select name="teacher">
          <?php foreach ($teachers as $teacher): ?>
          <option value="<?=$teacher['teacher_id']?>"><?=$teacher['last_name'] . ' ' . $teacher['name']?></option>
          <?php endforeach ?>
      </select>
  </label>
  <button type="submit">Добавить</button>
</form>