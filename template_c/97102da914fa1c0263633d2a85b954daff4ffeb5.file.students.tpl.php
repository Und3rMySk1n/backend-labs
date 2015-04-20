<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 21:49:32
         compiled from "Z:\home\web\www\template\students.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2893055353c2c444e81-64607850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97102da914fa1c0263633d2a85b954daff4ffeb5' => 
    array (
      0 => 'Z:\\home\\web\\www\\template\\students.tpl',
      1 => 1429513262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2893055353c2c444e81-64607850',
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
  'unifunc' => 'content_55353c2c559e82_21037523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55353c2c559e82_21037523')) {function content_55353c2c559e82_21037523($_smarty_tpl) {?><h1>Students</h1>
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
