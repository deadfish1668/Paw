<?php
/* Smarty version 4.5.1, created on 2024-04-20 14:27:33
  from 'C:\xampp\htdocs\PAW_Project\credit_calc\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6623b4b5d7e244_45923568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56d44c0d98622366e5f57e53e4d5f070519687d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW_Project\\credit_calc\\app\\views\\templates\\main.tpl',
      1 => 1711921461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6623b4b5d7e244_45923568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
    <link rel="icon" type="image" href="https://cdn.pixabay.com/photo/2023/03/06/04/26/calculator-7832583_1280.png">
</head>
<body>

<div id = "wrapper">

    <div id = "main">
        <div class = "inner">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18897875636623b4b5d7b763_94428604', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9170214456623b4b5d7bee8_25476510', 'beforeContent');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7232016006623b4b5d7c4e8_60749278', 'content');
?>

        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20264442816623b4b5d7caa2_64183678', 'menu');
?>

                </div>

                <div class= "miniPost">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20930766106623b4b5d7d048_60028230', 'miniPost');
?>

                </div>
                
                <div class= "kontakt">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420371676623b4b5d7d5e5_11104535', 'kontakt');
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12561160866623b4b5d7db72_21471514', 'footer');
?>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_18897875636623b4b5d7b763_94428604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18897875636623b4b5d7b763_94428604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść headera <?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_9170214456623b4b5d7bee8_25476510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_9170214456623b4b5d7bee8_25476510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść <?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_7232016006623b4b5d7c4e8_60749278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7232016006623b4b5d7c4e8_60749278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_20264442816623b4b5d7caa2_64183678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_20264442816623b4b5d7caa2_64183678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartości menu
                <?php
}
}
/* {/block 'menu'} */
/* {block 'miniPost'} */
class Block_20930766106623b4b5d7d048_60028230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_20930766106623b4b5d7d048_60028230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartości mini-postow
                <?php
}
}
/* {/block 'miniPost'} */
/* {block 'kontakt'} */
class Block_420371676623b4b5d7d5e5_11104535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_420371676623b4b5d7d5e5_11104535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartość kontaktu
                <?php
}
}
/* {/block 'kontakt'} */
/* {block 'footer'} */
class Block_12561160866623b4b5d7db72_21471514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12561160866623b4b5d7db72_21471514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'footer'} */
}
