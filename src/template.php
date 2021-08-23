<?php
function template($template, $params=[])
{
    extract($params);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $template;
}