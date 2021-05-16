
{include file="header.tpl"}

<h1>DETALLES</h1>

{foreach from=$botin item=bot}
                            <ul>
                            <li> Modelo: {$bot->modelo}</li>
                            <li> Talle: {$bot->talle}</li>
                            <li> Tipo: {$bot->tipo}</li> 

                            {foreach from=$marcas item=marca}
                            {if $bot->id eq $marca->id_marca}
                            <li> Marca: {$marca->nombre}</li>
                        {/if}
                            
                            {/foreach}

                            </ul>
                {/foreach}
