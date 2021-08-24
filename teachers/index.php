<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
$queryF = new QueryFunction($db_host, $db_user, $db_password, $db_base);
if (isset($_POST['last_name']) &&
    isset($_POST['name']) &&
    isset($_POST['otch'])) {
    $queryF->addTeacher($_POST['last_name'], $_POST['name'], $_POST['otch']);
} elseif (isset($_GET['action']) && isset($_GET['id'])) {
    if ($_GET['action'] == 'del') {
        $queryF->deleteTeacher($_GET['id']);
    }
}

template('/forms/teacher.php');
template('teachers.php', ['teachers' => $queryF->getTeachers()]);

require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';