<?php
function getForms($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/forms/' . $name . '.html';
}