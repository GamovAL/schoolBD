<form method="post">
  <label>
    Фамилия: <input type="text" name="last_name" value="<?=$last_name?>">
  </label>
  <label>
    Имя: <input type="text" name="name" value="<?=$name?>">
  </label>
  <label>
    Отчество: <input type="text" name="otch" value="<?=$otch?>">
  </label>
    <input type="hidden" name="id" value="<?=$teacher_id?>">
  <button type="submit" class="btn btn-success">Сохранить</button>
</form>