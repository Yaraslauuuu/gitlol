{extends file="main.tpl"}

{block name=footer}
    <footer>
        <ul id="copyright">
            <li>Tekst w stópce itp</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>
{/block}
{block name=result}
    <!--errors-->
    {if $msgs->isError()}
        <div class="wrapper style5">
            {foreach  $msgs->getErrors() as $msg}
                {strip}
                    <h4>{$msg}</h4>
                {/strip}
            {/foreach}
        </div>
    {/if}

{/block}
{block name=content}
    <article id="form" class="wrapper style4">
        <div class="container medium">
            <header>
                <h2>Okno logowania</h2>
            </header>
            <div class="row">
                <div class="col-12">
                    <form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
                        <legend>Logowanie do systemu</legend>
                        <fieldset>
                            <div class="col-12">
                                <label for="id_login">Login: </label>
                                <input id="id_login" type="text" name="login"/>
                            </div>
                            <div class="col-12">
                                <label for="id_pass">Hasło: </label>
                                <input id="id_pass" type="password" name="pass" /><br />
                            </div>
                            <div class="col-12">
                                <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
    </article>
{/block}



