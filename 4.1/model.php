<?php
## MVC. Модель.

function LoadBook($fname)
{
    if (!file_exists($fname)) {
        return array();
    }

    $Book = unserialize(file_get_contents($fname));
    if (is_array($Book)) {
        return $Book;
    } else {
        return [];
    }
}

function SaveBook($fname, $Book)
{
    file_put_contents($fname, serialize($Book));
}

function AddRecord($Book, $newRecord)
{
    $Book = array(time() => $newRecord) + $Book;
    return $Book;
}