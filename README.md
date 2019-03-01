# Simple PHP Template System

This is a very simple PHP class that you can use to generate clean template files without hassle.

## INCLUDE THE PHP CLASS
    require("core/Template.class.php");

## INSTANTIATE THE TEMPLATE CLASS
    $template = new Template();

## OPEN THEME FILE
    $template->file("demo.tpl");

## ASSIGN PHP VARIABLES
    $template->assign("title", "My Page Title");

## RENDER THE TEMPLATE FILE
    $template->render();

### Disclaimer
This is not meant for big projects. You can use for small projects such your own website. 
