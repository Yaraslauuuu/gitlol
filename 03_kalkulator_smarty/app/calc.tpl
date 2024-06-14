{extends file="../templates/main.tpl"}

{block name=footer}
<footer>
    <ul id="copyright">
        <li>Tekst w stópce itp</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>
{/block}
{block name=result}
<!--errors-->
    {if isset($messages)}
        {if count($messages) > 0}
        <div class="wrapper style5">
            {foreach  $messages as $msg}
            {strip}
                <h4>{$msg}</h4>
            {/strip}
            {/foreach}
        </div>
        {/if}
    {/if}
<!--result-->
    {if isset($result)}
        <div class="wrapper style3">
            <h3>Miesięczna rata: {$result} zł</h3>
        </div>
    {/if}
{/block}
{block name=content}
<article id="form" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Oblicz miesięczną ratę kredytu</h2>
        </header>
        <div class="row">
            <div class="col-12">
                <form action="{$app_url}/app/calc.php" method="post">
                    <div class="row">
                        <div class="col-6 col-12-small">
                            <input type="text" name="amount" id="id_amount" placeholder="Kwota [zł]" />
                        </div>
                        <div class="col-6 col-12-small">
                            <input type="text" name="years" id="id_years" placeholder="Ilość lat" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="percent" id="id_percent" placeholder="Oprocentowanie w skali roku [%]" />
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Oblicz ratę" /></li>
                                <li><input type="reset" value="Wyczyść" class="alt" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</article>
{/block}



