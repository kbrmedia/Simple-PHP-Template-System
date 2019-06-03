<?php

require_once("core/Template.class.php");

$template = new Template();

$template->file("test.tpl");

$template->assign("title", "This is my page title");

$attr = ["Creative", "Digital", "Professional"];

$template->assign("attr", $attr[array_rand($attr)]);

$template->render();
