<?php
/* Smarty version 4.5.1, created on 2024-04-13 19:27:07
  from 'C:\xampp\htdocs\PAW_Project\credit_calc\app\calc\credit_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ac06b775c30_28988176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '744ea009363605241bd210721bd04824a43e4b7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW_Project\\credit_calc\\app\\calc\\credit_calc.tpl',
      1 => 1713028241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ac06b775c30_28988176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1456710007661ac06b75fea4_31726098', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1293586311661ac06b760e43_71590616', 'beforeContent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400284682661ac06b761523_18112115', 'content');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_932918251661ac06b774355_81423804', 'menu');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467575860661ac06b7749f6_37975685', 'miniPost');
?>

            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_414137890661ac06b775046_76040357', 'kontakt');
?>

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956600339661ac06b775689_91971176', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'header'} */
class Block_1456710007661ac06b75fea4_31726098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1456710007661ac06b75fea4_31726098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="header">
    <a href="#" class="logo"><strong>Strona</strong> by Bartosz Adamek</a>
    <ul class="icons">
        <li><a href="https://github.com/BavteqDoIT" class="icon brands fa-github"><span class="label">Github</span></a></li>
        <li><a href="https://pl-pl.facebook.com/Bartek.adamekehe" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="https://www.instagram.com/bavteq/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>
</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_1293586311661ac06b760e43_71590616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_1293586311661ac06b760e43_71590616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="main">
        <h1>Kalkulator kredytu hipotecznego</h1>
        <h2 id="content">Założenia</h2>
            <p>Prosty kalkulator umożliwiający obliczać ratę miesięczną kredytu hipotecznego.</p>

    </header>

<?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_1400284682661ac06b761523_18112115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1400284682661ac06b761523_18112115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
<hr class="major" />	
    <div class="row gtr-200">
        <div class="col-6 col-12-medium">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
                    <div class="row gtr-uniform">
                        <fieldset>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_years">Liczba lat: </label>
                            <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"><br>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_cost">Kwota kredytu: </label>
                            <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cost;?>
"><br>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_percent">Oprocentowanie: </label>
                            <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"><br>
                        </div>

                        </fieldset>
                        <div class="col-12">
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                                    <li><input type="reset" value="Zresetuj" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    

        <div class="messages">

        <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
      

        <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
                <h4>Informacje: </h4>
                <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
        <?php }?>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
            <h4>Wynik</h4>
            <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

            </p>
        <?php }?>
        
        </div>
</body>
<?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_932918251661ac06b774355_81423804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_932918251661ac06b774355_81423804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="#">Kalkulator</a></li>
                    </ul>
                </nav>
            <?php
}
}
/* {/block 'menu'} */
/* {block 'miniPost'} */
class Block_467575860661ac06b7749f6_37975685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_467575860661ac06b7749f6_37975685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section>
                    <header class="major">
                        <h2>Mini posty</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="https://cdn.pixabay.com/photo/2017/06/26/02/47/man-2442565_640.jpg" alt="" /></a>
                            <p>To ja jeśli udało się spełnić wszystkie założenia, oraz oddać pracę w terminie.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="https://cdn.pixabay.com/photo/2019/12/03/19/21/crying-african-man-4670799_640.jpg" alt="" /></a>
                            <p>To natomiast ja jeśli założenia nie będą spełnione.</p>
                        </article>
                    </div>
                </section>
            <?php
}
}
/* {/block 'miniPost'} */
/* {block 'kontakt'} */
class Block_414137890661ac06b775046_76040357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_414137890661ac06b775046_76040357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section>
                    <header class="major">
                        <h2>Kontakt</h2>
                    </header>
                    <p>Jeśli moja praca jest niekompletna, lub jakiś jej element jest wykonany w nieprawidłowy sposób proszę o kontakt!</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">bartek.adamek@onet.pl</a></li>
                    </ul>
                </section>
            <?php
}
}
/* {/block 'kontakt'} */
/* {block 'footer'} */
class Block_956600339661ac06b775689_91971176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_956600339661ac06b775689_91971176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
                <footer id="footer">
                    <p class="copyright">&copy; BavteqDoIT. All rights reserved.</p>
                    <p><a href="https://html5up.net/">Design: HTML5 UP</p>
                </footer> 
            
                <?php
}
}
/* {/block 'footer'} */
}
