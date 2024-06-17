<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:20:56
  from 'C:\xampp\htdocs\Zadanie_3\credit_calc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660052e8a5ee65_53091196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75536e1c874009aac3b3bd15d3df7098bda1583e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3\\credit_calc\\templates\\main.tpl',
      1 => 1711297240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660052e8a5ee65_53091196 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css">
    <link rel="icon" type="image" href="https://cdn.pixabay.com/photo/2023/03/06/04/26/calculator-7832583_1280.png">
</head>
<body>

<div id = "wrapper">

    <div id = "main">
        <div class = "inner">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780848331660052e8a5cbd6_79757206', 'header');
?>

            <?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62983035660052e8a5d1c9_97103442', 'beforeContent');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_554232029660052e8a5d841_74183951', 'content');
?>

        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175229477660052e8a5dca8_39953140', 'menu');
?>

                </div>

                <div class= "miniPost">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_407658448660052e8a5e102_59560336', 'miniPost');
?>

                </div>
                
                <div class= "kontakt">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1945034898660052e8a5e551_82207127', 'kontakt');
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1461011999660052e8a5e9b1_11158569', 'footer');
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
class Block_1780848331660052e8a5cbd6_79757206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1780848331660052e8a5cbd6_79757206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść headera <?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_62983035660052e8a5d1c9_97103442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_62983035660052e8a5d1c9_97103442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść <?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_554232029660052e8a5d841_74183951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_554232029660052e8a5d841_74183951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_175229477660052e8a5dca8_39953140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_175229477660052e8a5dca8_39953140',
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
class Block_407658448660052e8a5e102_59560336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_407658448660052e8a5e102_59560336',
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
class Block_1945034898660052e8a5e551_82207127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_1945034898660052e8a5e551_82207127',
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
class Block_1461011999660052e8a5e9b1_11158569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1461011999660052e8a5e9b1_11158569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'footer'} */
}
