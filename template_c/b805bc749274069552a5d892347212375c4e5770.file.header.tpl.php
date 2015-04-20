<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 22:38:20
         compiled from "Z:\home\web\www\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:468555353c2c20fd83-90906881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b805bc749274069552a5d892347212375c4e5770' => 
    array (
      0 => 'Z:\\home\\web\\www\\template\\header.tpl',
      1 => 1429555098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468555353c2c20fd83-90906881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55353c2c4005a6_70213978',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55353c2c4005a6_70213978')) {function content_55353c2c4005a6_70213978($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>HTML-справочник</title>
	<link rel="stylesheet" href="template/css/style.css" media="all">
  </head>
  <body>
		<header>
			<a href="#"><img src="template/images/logo.png" alt="htmlbook" class="logo"></a>
			<nav>
			<ul id="topmenu">
				<li class="show"><a href="#"><i class="icon icon-main"></i><br>Основное</a></li>
				<li class="hide"><a href="#"><i class="icon icon-html"></i><br>HTML</a></li>
				<li class="hide"><a href="#"><i class="icon icon-css"></i><br>CSS</a></li>
				<li class="hide"><a href="#"><i class="icon icon-site"></i><br>Сайт</a></li>
			</ul>

			<div id="main" class="tile show">
				<ul>
					<li><a href="#" >Статьи</a></li>
					<li><a href="#" >Блог</a></li>
					<li><a href="#" >Практикум</a></li>
					<li><a href="#" >Тесты</a></li>
					<li><a href="#">Форум</a></li>
				</ul>
			</div>			
			</nav>
			
			
			<form id="search-box">
				<input type="text" id="search_field" placeholder="Поиск по сайту"><input type="image" src="template/images/find.png" alt="Найти" class="find">
			</form>
		</header>
			<?php }} ?>
