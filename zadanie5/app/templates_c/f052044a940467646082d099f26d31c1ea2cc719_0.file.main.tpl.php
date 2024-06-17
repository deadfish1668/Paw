<?php
/* Smarty version 4.5.1, created on 2024-04-13 19:27:07
  from 'C:\xampp\htdocs\PAW_Project\credit_calc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ac06b7aec29_49133649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f052044a940467646082d099f26d31c1ea2cc719' => 
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
function content_661ac06b7aec29_49133649 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1514363465661ac06b7ac348_72405538', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1194616787661ac06b7aca85_39406763', 'beforeContent');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144892331661ac06b7ad063_18008873', 'content');
?>

        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_713556448661ac06b7ad604_34699684', 'menu');
?>

                </div>

                <div class= "miniPost">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_735087487661ac06b7adb96_51558208', 'miniPost');
?>

                </div>
                
                <div class= "kontakt">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140360833661ac06b7ae110_24715299', 'kontakt');
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109108697661ac06b7ae671_76356288', 'footer');
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
class Block_1514363465661ac06b7ac348_72405538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1514363465661ac06b7ac348_72405538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść headera <?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_1194616787661ac06b7aca85_39406763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_1194616787661ac06b7aca85_39406763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść <?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_144892331661ac06b7ad063_18008873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_144892331661ac06b7ad063_18008873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_713556448661ac06b7ad604_34699684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_713556448661ac06b7ad604_34699684',
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
class Block_735087487661ac06b7adb96_51558208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_735087487661ac06b7adb96_51558208',
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
class Block_140360833661ac06b7ae110_24715299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_140360833661ac06b7ae110_24715299',
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
class Block_2109108697661ac06b7ae671_76356288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2109108697661ac06b7ae671_76356288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'footer'} */
}
