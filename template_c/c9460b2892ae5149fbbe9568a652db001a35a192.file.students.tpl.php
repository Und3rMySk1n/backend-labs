<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 16:39:45
         compiled from "Z:\home\repo1\www\template\students.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115145550a31179ae63-96178198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9460b2892ae5149fbbe9568a652db001a35a192' => 
    array (
      0 => 'Z:\\home\\repo1\\www\\template\\students.tpl',
      1 => 1429513262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115145550a31179ae63-96178198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550a311c3c2d5_19682038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550a311c3c2d5_19682038')) {function content_5550a311c3c2d5_19682038($_smarty_tpl) {?><h1>Students</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['student']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['age'];?>
</li>
  <?php } ?>
</ul><?php }} ?>
