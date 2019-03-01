<?php

include("core/Template.class.php");

$template = new Template();

$template->file("demo.tpl");

$template->assign("title", "This is my page title");

$template->render();
