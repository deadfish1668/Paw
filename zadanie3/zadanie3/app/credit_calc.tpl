{{extends file="../templates/main.tpl"}}

{block name = header}
    <header id="header">
</header>
{/block}

{block name=beforeContent}
    <header class="main">
        <h1>Kalkulator kredytu hipotecznego</h1>
        <h2 id="content">Założenia</h2>
            <p>Prosty kalkulator umożliwiający obliczać ratę miesięczną kredytu hipotecznego.</p>

    </header>

{/block}

{block name=content}
<body>
<hr class="major" />	
    <div class="row gtr-200">
        <div class="col-6 col-12-medium">
                <form action="{$app_url}/app/credit_calc.php" method="post" class="pure-form pure-form-stacked">
                    <div class="row gtr-uniform">
                        <fieldset>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_years">Liczba lat: </label>
                            <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="{$form['years']}"><br>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_cost">Kwota kredytu: </label>
                            <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="{$form['cost']}"><br>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <label for="id_percent">Oprocentowanie: </label>
                            <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="{$form['percent']}"><br>
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

        {if isset($messages) }
            {if count($messages) > 0 }
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                {foreach $messages as $msg}
                {strip}
                    <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
            {/if}
        {/if}

        {if isset($infos) }
            {if count($infos) > 0 }
                <h4>Informacje: </h4>
                <ol class="inf">
                {foreach $infos as $msg}
                {strip}
                    <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
            {/if}
        {/if}
        
        {if isset($result)} 
            <h4>Wynik</h4>
            <p class="res">
            <u>
            {$result}
            </u>
            </p>
        {/if}
        
        </div>
</body>
{/block}
            {block name = menu}
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <!--<li><a href="index.html">Strona główna</a></li>-->
                        <li><a href="#">Kalkulator</a></li>
                    </ul>
                </nav>
            {/block}

            

            
                {block name=footer}
                
                <footer id="footer">
                    <p class="copyright">&copy; Mikolaj Waliszewski. All rights reserved.</p>
                    <p><a href="https://html5up.net/">Design: HTML5 UP</p>
                </footer> 
            
                {/block}