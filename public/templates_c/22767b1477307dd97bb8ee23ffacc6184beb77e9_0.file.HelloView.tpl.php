<?php
/* Smarty version 3.1.34-dev-7, created on 2022-02-02 13:23:24
  from 'C:\xampp\htdocs\ASZAL\app\views\HelloView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61fa77bc7cbbb1_81155509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22767b1477307dd97bb8ee23ffacc6184beb77e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ASZAL\\app\\views\\HelloView.tpl',
      1 => 1643804598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61fa77bc7cbbb1_81155509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185161213161fa77bc7c5db4_45583359', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_185161213161fa77bc7c5db4_45583359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_185161213161fa77bc7c5db4_45583359',
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
