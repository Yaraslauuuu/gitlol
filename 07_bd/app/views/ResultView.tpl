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
        <table id="tab_result" class="pure-table pure-table-bordered">
            <thead>
            <tr>
                <th>kwota</th>
                <th>lata</th>
                <th>procent</th>
                <th>miesięczna rata</th>
                <th>data</th>
            </tr>
            </thead>
            <tbody>
            {foreach $result as $r}
                {strip}
                    <tr>
                        <td>{$r["kwota"]}</td>
                        <td>{$r["lata"]}</td>
                        <td>{$r["procent"]}</td>
                        <td>{$r["miesieczna_rata"]}</td>
                        <td>{$r["data"]}</td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
    </article>
{/block}