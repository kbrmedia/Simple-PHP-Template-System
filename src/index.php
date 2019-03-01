<?php

include("Template.class.php");

$template = new Template();

$template->file("test.tpl");

$template->assign("title", "This is my page title");

$template->render();
