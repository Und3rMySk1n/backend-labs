<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 21:20:13
         compiled from "Z:\home\repo1\www\template\example_canvas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319535558cdcd04d6a4-74602234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b565d5e9ff1d7f4a2c77e881350032b8323cb72' => 
    array (
      0 => 'Z:\\home\\repo1\\www\\template\\example_canvas.tpl',
      1 => 1431883166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319535558cdcd04d6a4-74602234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558cdcd05ee34_46442426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558cdcd05ee34_46442426')) {function content_5558cdcd05ee34_46442426($_smarty_tpl) {?><span class="doctype">&lt;!DOCTYPE html&gt;</span> 
 
 <span class="tag">&lt;html&gt;</span>
 <span class="tag">&lt;head&gt;</span>
  <span class="tag">&lt;title&gt;</span>canvas<span class="tag">&lt;/title&gt;</span>
  <span class="tag">&lt;meta <span class="attribute">charset=</span><span class="value">&quot;utf-8&quot;</span>&gt;</span>
  <span class="tag">&lt;script&gt;</span>
   window.onload = <span class="function"><span class="keyword">function</span><span class="params">()</span></span> {
    <span class="keyword">var</span> drawingCanvas = document.getElementById('smile');
    <span class="keyword">if</span>(drawingCanvas &amp;&amp; drawingCanvas.getContext) {
     <span class="keyword">var</span> context = drawingCanvas.getContext('2d');
     <span class="comment">// ������ ����������</span> 
     context.strokeStyle = &quot;#000&quot;;
     context.fillStyle = &quot;#fc0&quot;;
     context.beginPath();
     context.arc(<span class="number">100</span>,<span class="number">100</span>,<span class="number">50</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// ������ ����� ����</span> 
     context.fillStyle = &quot;#fff&quot;;
     context.beginPath();
     context.arc(<span class="number">84</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// ������ ������ ����</span> 
     context.beginPath();
     context.arc(<span class="number">116</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,true);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// ������ ���</span> 
     context.beginPath();
     context.moveTo(<span class="number">70</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">130</span>,<span class="number">130</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">150</span>,<span class="number">70</span>,<span class="number">115</span>); 
     context.closePath();
     context.stroke();
     context.fill();
    }
   }
  <span class="tag">&lt;/script&gt;</span>
 <span class="tag">&lt;/head&gt;</span>
 <span class="tag">&lt;body&gt;</span>
  <span class="tag">&lt;canvas <span class="attribute">id=</span><span class="value">&quot;smile&quot;</span> <span class="attribute">width=</span><span class="value">&quot;200&quot;</span> <span class="attribute">height=</span><span class="value">&quot;200&quot;</span>&gt;</span>
    <span class="tag">&lt;p&gt;</span>��� ������� �� ������������ ���������.<span class="tag">&lt;/p&gt;</span>
  <span class="tag">&lt;/canvas&gt;</span>
 <span class="tag">&lt;/body&gt;</span>
<span class="tag">&lt;/html&gt;</span><?php }} ?>
