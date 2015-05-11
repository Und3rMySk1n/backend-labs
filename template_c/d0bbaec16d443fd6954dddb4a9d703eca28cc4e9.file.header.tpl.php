<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 19:51:07
         compiled from "Z:\home\repo1\www\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281015550cf05578c51-60191517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bbaec16d443fd6954dddb4a9d703eca28cc4e9' => 
    array (
      0 => 'Z:\\home\\repo1\\www\\template\\header.tpl',
      1 => 1431359466,
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
			  <input type="text" id="search_field" placeholder="Поиск по сайту"><input type="image" src="template/images/find.png" alt="Найти" class="find">
			</form>
		</header>
		
		<div class="layout">
		  <aside>
		    <div id="block-28" class="block">
			  <div class="block_content">
			    <form action="http://htmlbook.ru/sites/search/" id="filter">
                  <input type="search" name="left_search" id="left_search_field"  placeholder="Тег HTML или св-во CSS">
				  <input type="image" src="template/images/find.png" alt="Найти" class="find">
                </form>		
			  </div>
			</div>
			
		<!-- блоки со ссылками -->
        
		<div id="menu-menu-html" class="block">
		  <h2 class="block_title">Теги HTML</h2>		
		  
		  <div class="block_content scroll">
			<ul class="menu">
			  <li class="first leaf"><a href="#">Все теги</a></li>
              <li class="leaf"><a href="#">Валидация тегов</a></li>
              <li class="leaf"><a href="#">&lt;!-- --&gt;</a></li>
              <li class="leaf"><a href="#">&lt;!DOCTYPE&gt;</a></li>
              <li class="collapsed"><a href="#">&lt;a&gt;</a></li>
              <li class="collapsed"><a href="#">&lt;abbr&gt;</a></li>
              <li class="leaf"><a href="#">&lt;acronym&gt;</a></li>
              <li class="leaf"><a href="#">&lt;address&gt;</a></li>
              <li class="collapsed"><a href="#">&lt;applet&gt;</a></li>
              <li class="collapsed"><a href="#" title="">&lt;area&gt;</a></li>
              <li class="leaf"><a href="#" title="">&lt;article&gt;</a></li>
              <li class="leaf"><a href="#">&lt;aside&gt;</a></li>
              <li class="collapsed"><a href="#">&lt;audio&gt;</a></li>
              <li class="leaf"><a href="#">&lt;b&gt;</a></li>
              <li class="collapsed"><a href="#" title="">&lt;base&gt;</a></li>
			  <li class="collapsed"><a href="#">&lt;basefont&gt;</a></li>
			  <li class="leaf"><a href="#" title="Тег ">&lt;bdi&gt;</a></li>
            </ul>		
		  </div>
		  
	    </div>
	
	    <div id="menu-menu-css" class="block">
		  <h2 class="block_title">Справочник CSS</h2>		
		  <div class="block_content scroll">
			<ul class="menu"><li class="first leaf"><a href="#">Как пользоваться справочником</a></li>
              <li class="leaf"><a href="#" title="">!important</a></li>
              <li class="leaf"><a href="#">-moz-border-bottom-colors</a></li>
              <li class="leaf"><a href="#">-moz-border-left-colors</a></li>
              <li class="leaf"><a href="#">-moz-border-right-colors</a></li>
              <li class="leaf"><a href="#">-moz-border-top-colors</a></li>
              <li class="leaf"><a href="#">-moz-linear-gradient</a></li>
              <li class="leaf"><a href="#">-moz-orient</a></li>
              <li class="leaf"><a href="#">-moz-radial-gradient</a></li>
              <li class="leaf"><a href="#" title="">-moz-user-select</a></li>
              <li class="leaf"><a href="#">-ms-interpolation-mode</a></li>
			  <li class="leaf"><a href="#">-ms-radial-gradient</a></li>
              <li class="leaf"><a href="#">-o-linear-gradient</a></li>
              <li class="leaf"><a href="#">-o-object-fit</a></li>
			  <li class="leaf"><a href="#">-o-radial-gradient</a></li>
              <li class="leaf"><a href="#">-webkit-linear-gradient</a></li>
			  <li class="leaf"><a href="#">-webkit-radial-gradient</a></li>
            </ul>		
		  </div>
	    </div>
		
        <!-- конец блоков со ссылками -->		
			
		  </aside>
				
		<div class="content">	
			<?php }} ?>
