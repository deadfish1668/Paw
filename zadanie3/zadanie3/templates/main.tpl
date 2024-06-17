<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$page_description|default:'Opis domyślny'}">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <link rel="stylesheet" href="{$app_url}/assets/css/main.css">
    <link rel="icon" type="image" href="https://cdn.pixabay.com/photo/2023/03/06/04/26/calculator-7832583_1280.png">
</head>
<body>

<div id = "wrapper">

    <div id = "main">
        <div class = "inner">
            {block name=header} Domyślna treść headera {/block}
            {block name=beforeContent} Domyślna treść {/block}
            {block name=content} Domyślna treść zawartości {/block}
        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                {block name=menu}
                    Domyślna zawartości menu
                {/block}
                </div>

                <div class= "miniPost">
                {block name=miniPost}
                    Domyślna zawartości mini-postow
                {/block}
                </div>
                
                <div class= "kontakt">
                {block name=kontakt}
                    Domyślna zawartość kontaktu
                {/block}
                </div>

                {block name=footer} Domyślna treść stopki {/block}
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
