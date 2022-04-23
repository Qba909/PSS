<?php
/* Smarty version 3.1.34-dev-7, created on 2022-04-04 15:06:01
  from 'C:\xampp\htdocs\PSS\app\views\HelloView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_624aed39d4ee80_08339224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cb45e00dc035c44b14b02c2e10efb9a5ab923b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\HelloView.tpl',
      1 => 1649077559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624aed39d4ee80_08339224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_985989846624aed39d4b2b7_29721117', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_985989846624aed39d4b2b7_29721117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_985989846624aed39d4b2b7_29721117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
order" class="pure-menu-heading pure-menu-link">Zamów</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manage" class="pure-menu-heading pure-menu-link">Zarządzaj zamówieniami</a>
<?php
}
}
/* {/block 'top'} */
}
