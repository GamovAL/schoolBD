<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
$queryF = new QueryFunction($db_host, $db_user, $db_password, $db_base);
if (isset($_POST['parallel']) && isset($_POST['letter'])) {
    $queryF->addClass($_POST['parallel'], $_POST['letter'], $_POST['teacher']);
}
template('forms/class.php', ['teachers' => $queryF->getTeachers()]);
template('classes.php', ['classes' => $queryF->getClasses()]);
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';