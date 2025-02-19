<?php
## MVC. Контролер.
define("GBook", "gbook.dat");
require_once "model.php";

$Book = LoadBook(GBook);

if (!empty($_REQUEST['doAdd'])) {
    $Book = AddRecord($Book, $_REQUEST['new']);
    SaveBook(GBook, $Book);
}

include "view.php";
