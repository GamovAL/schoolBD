<?php
class QueryFunction
{
    function __construct($host, $user, $password, $base)
    {
        $this->connect = new mysqli($host, $user, $password, $base);
    }

    function sentQuery($query)
    {
        $result = $this->connect->query($query);
        return $result;
    }
    function addTeacher($last_name, $name, $otch)
    {
        $this->sentQuery("INSERT INTO teacher (last_name, name, otch) VALUES ('$last_name', '$name', '$otch');");
    }
    function getTeacher()
    {
        $result = $this->sentQuery('SELECT * FROM teacher');
        $outResult = [];
        for ($i = 0, $count = $result->num_rows; $i < $count; $i++) {
            $result->data_seek($i);
            $outResult[] = $result->fetch_assoc();
        }
        return $outResult;
    }

    function addClass($parallel, $letter, $teacher='NULL')
    {
        $this->sentQuery("INSERT INTO class (parallel, letter) VALUES ('$parallel', '$letter');");
    }
}