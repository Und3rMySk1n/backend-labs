<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-13 22:47:27
         compiled from "Z:\home\repo1\www\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281015550cf05578c51-60191517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bbaec16d443fd6954dddb4a9d703eca28cc4e9' => 
    array (
      0 => 'Z:\\home\\repo1\\www\\template\\header.tpl',
      1 => 1431542718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281015550cf05578c51-60191517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550cf056627c5_53817431',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550cf056627c5_53817431')) {function content_5550cf056627c5_53817431($_smarty_tpl) {?><!DOCTYPE html>
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
	    <input type="text" id="search_field" placeholder="Поиск по сайту">
		<input type="image" src="template/images/find.png" alt="Найти" class="find">
	  </form>
	</header>	<?php }} ?>
