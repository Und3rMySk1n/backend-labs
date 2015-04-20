<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 23:30:13
         compiled from "C:\WebServers\home\localhost\www\template\students.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760552c17df72b224-20819837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4f5be6215232481a5ecd73c19309185248b250' => 
    array (
      0 => 'C:\\WebServers\\home\\localhost\\www\\template\\students.tpl',
      1 => 1428953412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760552c17df72b224-20819837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552c17df7472d8_75466224',
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552c17df7472d8_75466224')) {function content_552c17df7472d8_75466224($_smarty_tpl) {?><h1>Students</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['age'];?>
</li>
  <?php } ?>
</ul><?php }} ?>
