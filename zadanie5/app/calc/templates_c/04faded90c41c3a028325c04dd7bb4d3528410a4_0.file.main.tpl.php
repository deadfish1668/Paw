<?php
/* Smarty version 4.5.1, created on 2024-04-13 19:19:58
  from 'C:\xampp\htdocs\PAW_Project\credit_calc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661abebe808dc7_77814651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04faded90c41c3a028325c04dd7bb4d3528410a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW_Project\\credit_calc\\templates\\main.tpl',
      1 => 1711921461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661abebe808dc7_77814651 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1096378785661abebe8064a9_20171887', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1012495753661abebe806bc1_06959430', 'beforeContent');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1087559706661abebe807194_65019372', 'content');
?>

        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1452386134661abebe807726_86601317', 'menu');
?>

                </div>

                <div class= "miniPost">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2074913842661abebe807ca9_49468091', 'miniPost');
?>

                </div>
                
                <div class= "kontakt">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1422126114661abebe808208_62479333', 'kontakt');
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572106843661abebe8087e4_45309665', 'footer');
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
class Block_1096378785661abebe8064a9_20171887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1096378785661abebe8064a9_20171887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść headera <?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_1012495753661abebe806bc1_06959430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_1012495753661abebe806bc1_06959430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść <?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_1087559706661abebe807194_65019372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1087559706661abebe807194_65019372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_1452386134661abebe807726_86601317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1452386134661abebe807726_86601317',
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
class Block_2074913842661abebe807ca9_49468091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_2074913842661abebe807ca9_49468091',
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
class Block_1422126114661abebe808208_62479333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_1422126114661abebe808208_62479333',
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
class Block_572106843661abebe8087e4_45309665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_572106843661abebe8087e4_45309665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'footer'} */
}
