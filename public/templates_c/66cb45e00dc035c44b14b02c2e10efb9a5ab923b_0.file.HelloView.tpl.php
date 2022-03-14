<?php
/* Smarty version 3.1.34-dev-7, created on 2022-03-13 20:16:13
  from 'C:\xampp\htdocs\PSS\app\views\HelloView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_622e42fdd87c17_90776071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cb45e00dc035c44b14b02c2e10efb9a5ab923b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\app\\views\\HelloView.tpl',
      1 => 1643804598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e42fdd87c17_90776071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830338887622e42fdd83049_95270751', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_830338887622e42fdd83049_95270751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_830338887622e42fdd83049_95270751',
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
