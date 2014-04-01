<?php
header('Content-Type: text/html; charset=utf-8');

$path = explode("|",$this->getValue("path").$this->getValue("article_id")."|");

$path1 = $path[1];
$path2 = $path[2];
$path3 = $path[3];

$sa = OOArticle::getSiteStartArticle();
$article = OOArticle::getArticleById($this->getValue('article_id'));
$isIndexPage = $this->article_id == $sa->getId();

// load header images
$headerbild = $this->getValue("art_headerbild", 0);
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <base href="<?php echo seo42::getBaseUrl(); ?>" />
        <title><?php echo seo42::getTitle(); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="description" content="<?php echo seo42::getDescription(); ?>" />
        <meta name="keywords" content="<?php echo seo42::getKeywords(); ?>" />
        <meta name="robots" content="<?php echo seo42::getRobotRules();?>" />
        <link rel="canonical" href="<?php echo seo42::getCanonicalUrl(); ?>" />
        <meta name="viewport" content="width=900" />
        <link href="slimbox/slimbox2.css" rel="stylesheet">
        <link href="<?php echo seo42::getCSSFile("main.css"); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="files/favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="container">