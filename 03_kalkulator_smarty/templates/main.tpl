<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$app_url}/css/main.css" />
</head>
<body class="is-preload">

<!-- Nav -->
<nav id="nav">
    <ul class="container">
        <li><a href="#top">Góra strony</a></li>
        <li><a href="#form">Formularz</a></li>
    </ul>
</nav>
{block name=result} Domyślna treść zawartości .... {/block}
<!-- top -->
<article id="top" class="wrapper style2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-large col-12-medium">
                <header>
                    <h1>To jest <strong>{$page_header|default:"Tekst domyślny"}</strong>.</h1>
                </header>
                <p>{$page_description|default:"Opis domyślny"}</p>
            </div>
        </div>
    </div>
</article>

<article id="bg-image" class="wrapper style1"></article>

{block name=content} Domyślna treść zawartości .... {/block}

<article id="footer" class="wrapper style4 footer">
    {block name=footer} Domyślna treść stopki .... {/block}
</article>

<!-- Scripts -->
<script src="{$app_url}/js/jquery.min.js"></script>
<script src="{$app_url}/js/jquery.scrolly.min.js"></script>
<script src="{$app_url}/js/browser.min.js"></script>
<script src="{$app_url}/js/breakpoints.min.js"></script>
<script src="{$app_url}/js/util.js"></script>
<script src="{$app_url}/js/main.js"></script>

</body>
</html>