<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
if (isset($_POST['parallel']) && isset($_POST['letter'])) {
    addClass($_POST['parallel'], $_POST['letter']);
}
?>
<?php getForms('class'); ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';