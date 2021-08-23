<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
$queryF = new QueryFunction($db_host, $db_user, $db_password, $db_base);
if (isset($_POST['last_name']) &&
    isset($_POST['name']) &&
    isset($_POST['otch'])) {
    $queryF->addTeacher($_POST['last_name'], $_POST['name'], $_POST['otch']);
}

getForms('teacher');
template('teachers.php', ['teachers' => $queryF->getTeacher()]);

require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';