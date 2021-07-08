{*template to show Signature pad*}

<div id="signaturepad">
    <h4>Signature</h4>
    <div class="wrapper-1">
{*        <canvas id="signature-pad-2" class="signature-pad"></canvas>*}
        {foreach from=$allTabs item=tab}
            {if $tab.title == 'e-Signature'}
                <img src="{$tab.signatureval}"</img>
            {/if}
        {/foreach}

    </div>

</div>
