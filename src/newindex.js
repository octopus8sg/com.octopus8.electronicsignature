import SignaturePad from "signature_pad/dist/signature_pad.js";

import css from "./style.css"


CRM.$(function ($) {
    let c1 = $('#signature-pad-1').get(0);
    let c0 = $('#signature-pad-1');
    //canvas
    let s1 = new SignaturePad(c1, {
        // Necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        backgroundColor: '#ffffff'
    });
    let sigstr = "";
    let customfield = "";
    let customfieldjpg = "";
    let customfieldpng = "";
    let contactid = 0;
    $(document).ready(function () {

        sigstr = $("#signature").text();
        //signature data
        contactid = parseInt($("#contactid").text());
        //contact id for saving
        customfield = $("#customfield").text();
        customfieldjpg = $("#customfieldjpg").text();
        customfieldpng = $("#customfieldpng").text();
        //custom field id for saving
        try{
            let sigdata = JSON.parse(sigstr);
            // drowing from database
            s1.fromData(sigdata);
        }catch(e){
            console.log(e.message);
        }
        if ('true' === c0.attr('data-disabled')) {
            s1.off()
        }
        ;

    });


// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
    function resizeCanvas(canvas, c0, s1) {
        // When zoomed out to less than 100%, for some very strange reason,
        // some browsers report devicePixelRatio as less than 1
        // and only part of the canvas is cleared then.
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        // c0.getContext("2d").scale(ratio, ratio);
    }

    window.onresize = (c1, c0, s1) => {
        resizeCanvas(c1, c0, s1);
    }
    resizeCanvas(c1, c0, s1);

    function download(dataURL, filename) {
        var blob = dataURLToBlob(dataURL);
        var url = window.URL.createObjectURL(blob);

        var a = document.createElement("a");
        a.style = "display: none";
        a.href = url;
        a.download = filename;

        document.body.appendChild(a);
        a.click();

        window.URL.revokeObjectURL(url);
    }

// One could simply use Canvas#toBlob method instead, but it's just to show
// that it can be done using result of SignaturePad#toDataURL.
    function dataURLToBlob(dataURL) {
        // Code taken from https://github.com/ebidel/filer.js
        var parts = dataURL.split(';base64,');
        var contentType = parts[0].split(":")[1];
        var raw = window.atob(parts[1]);
        var rawLength = raw.length;
        var uInt8Array = new Uint8Array(rawLength);

        for (var i = 0; i < rawLength; ++i) {
            uInt8Array[i] = raw.charCodeAt(i);
        }

        return new Blob([uInt8Array], {type: contentType});
    }

    $('#save-png').click(function (event) {
        event.preventDefault();
        if (s1.isEmpty()) {
            return alert("Please provide a signature first.");
        }
        let data = s1.toDataURL('image/png');
        download(data, "signature.png");
    });

    $('#save-jpeg').click(function (event) {
        event.preventDefault();
        if (s1.isEmpty()) {
            return alert("Please provide a signature first.");
        }
        let ctx = c1.getContext('2d');
        ctx.globalCompositeOperation = 'destination-over'
        ctx.fillStyle = 'white'
        ctx.fillRect(0, 0, c1.width, c1.height);
        let data = c1.toDataURL('image/jpeg');
        download(data, "signature.jpg");
    });

    $('#save-svg').click(function (event) {
        event.preventDefault();
        if (s1.isEmpty()) {
            return alert("Please provide a signature first.");
        }

        var data = s1.toDataURL('image/svg+xml');
        console.log(atob(data.split(',')[1]));
        download(data, "signature.svg");
    });

    $('#save-all').click(function (event) {
        event.preventDefault();
        if (s1.isEmpty()) {
            return alert("Please provide a signature first.");
        }

        let data = s1.toData();
        let dj = JSON.stringify(data);
        console.log(contactid);
        $("#" + customfield).val(dj);
        let data1 = s1.toDataURL('image/png');
        console.log(data1);
        $("#tcustomfieldpng").val(data1);
        // $("#tcustomfieldpng").hide();
        let data2 = s1.toDataURL('image/jpeg');
        console.log(data2);
        $("#tcustomfieldjpg").val(data2);
        // $("#tcustomfieldjpg").hide();
    });
    $('#clear').click(function (event) {
        event.preventDefault();
        s1.clear();
        CRM.alert('Signature Cleared');
    });
});

