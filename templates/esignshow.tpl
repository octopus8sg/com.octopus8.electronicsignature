{*template to show Signature pad*}

<div id="signaturepad">
    <h4>Signature Pad</h4>
    <div class="wrapper-1">
        <canvas id="signature-pad-1" class="signature-pad" data-disabled="true"></canvas>
    </div>
    <div class="crm-submit-buttons">
        <button id="save-png" class="crm-button">Download PNG</button>
        <button id="save-jpeg" class="crm-button">Download JPEG</button>
        <button id="save-svg" class="crm-button">Download SVG</button>
    </div>
    <div>
        <div id="signature" style="display: none;">{$signature_val}</div>
        <div id="contactid" style="display: none;">{$contactid}</div>
        <div id="customfield" style="display: none;">{$customfield}</div>
        <div id="customfieldjpg" style="display: none;">{$customfieldjpg}</div>
        <div id="customfieldpng" style="display: none;">{$customfieldpng}</div>
        <div id="customfieldjpgbase" style="display: none;">{$customfieldjpgbase}</div>
        <div id="customfieldpngbase" style="display: none;">{$customfieldpngbase}</div>
    </div>
</div>
{*{debug}*}
{literal}
    <script type="text/javascript">

    </script>
{/literal}
