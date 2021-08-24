<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
$queryF = new QueryFunction($db_host, $db_user, $db_password, $db_base);
if (isset($_POST['last_name']) &&
    isset($_POST['name']) &&
    isset($_POST['otch'])) {
    $queryF->updateTeacher( $_POST['id'], $_POST['last_name'], $_POST['name'], $_POST['otch']);
    header('Location: /teachers/');
}
if (isset($_GET['id'])) {
    $teacher = $queryF->getTeacher($_GET['id']);
    template('forms/editTeacher.php', $teacher);
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';