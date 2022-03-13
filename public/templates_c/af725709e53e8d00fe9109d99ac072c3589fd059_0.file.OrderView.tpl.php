<?php
/* Smarty version 3.1.34-dev-7, created on 2022-02-02 22:29:00
  from 'C:\xampp\htdocs\ASZAL\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61faf79c03e7e8_47586207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af725709e53e8d00fe9109d99ac072c3589fd059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ASZAL\\app\\views\\OrderView.tpl',
      1 => 1643837330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61faf79c03e7e8_47586207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207882960561faf79c0342e9_32289215', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_207882960561faf79c0342e9_32289215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_207882960561faf79c0342e9_32289215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="pure-g">
	<div class="pure-u-1-5"></div>
	<div class="pure-u-3-5">
        <table cellpadding="5">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
        <tr>
          <td>
              <label for="aligned-foo"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value['name'];?>
</label>
              <input class="item" type="number" min="0" max="9" value="0" name="<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['id'];?>
" required/>
          </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ordered" type="submit" class="pure-menu-heading pure-menu-link">Potwierdź zamówienie</a>
        </div>
	<div class="pure-u-1-5"></div>
        </div>
<?php
}
}
/* {/block 'top'} */
}
