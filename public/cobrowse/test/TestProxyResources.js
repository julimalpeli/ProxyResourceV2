let params = document.getElementById("params")

jQuery("#add-image").click(function (e) {
    jQuery("#added-image").html(`<img src="${params.dataset.relativeimagepath}" />`);
    e.preventDefault();
});

jQuery("#add-image-absoluteurl").click(function (e) {
    jQuery("#added-image-absoluteurl").html(`<img src='https://${params.dataset.otherdomain}/cobrowse/test/images/glance.png'/>`);
    e.preventDefault();
});

jQuery("#add-image-srcset").click(function (e) {
    jQuery("#added-image-srcset").html(`<img srcset='https://${params.dataset.otherdomain}/cobrowse/test/images/glance3.png 2x'/>`);
    e.preventDefault();
});

jQuery("#add-redirecting-iframe").click(function (e) {
    jQuery('<iframe src="/cobrowse/test/proxytest1/ProxyTestRedirectingIframe.php" width="400" height="400"></iframe>').insertAfter("#add-redirecting-iframe");
    e.preventDefault();
});

jQuery("#modifystyleattr").click(function (e) {
    jQuery("#div-with-style-attr").css("background-image", "url('/cobrowse/test/images/glance2.png')");
    e.preventDefault();
});

jQuery("#change-srcset").click(function (e) {
    jQuery("#source1").attr("srcset", "/cobrowse/test/images/glance4.png");
    jQuery("#source2").attr("srcset", "/cobrowse/test/images/glance5.png");
    e.preventDefault();
});

jQuery("#change-src").click(function (e) {
    jQuery("#image1").attr("src", "/cobrowse/test/images/glance3.png")
    e.preventDefault();
});


// Tests addding a link element with integrity tag after page load
jQuery("#add-integrity-style").click(function (e) {
    jQuery(document.head).append("<link rel='stylesheet' href='styles/styles7.css' integrity='sha384-bpbZlfl2gjlHS/ydrRDK7+Vy5l/Ga87kLL/eoL4FayiQ3EE3aW3+hSJFH/eyQZl8' />");
    e.preventDefault();
});

function setImageBlobUrl() {
    // Create an empty canvas element
    let canvas = document.createElement("canvas");
    canvas.width = 200;
    canvas.height = 20;
    var ctx = canvas.getContext("2d");
    let r = 0;
    let g = (window.parent !== window) ? Math.random() * 255 : 0;
    let b = (window.parent === window) ? Math.random() * 255 : 0; // so blob image looks different in iframe
    ctx.fillStyle = `rgb(${r}, ${g}, ${b})`;
    ctx.fillRect(0, 0, 200, 20);

    canvas.toBlob((blob) => {
        const blobimg = document.getElementById("blobimage");
        if (blobimg) {
            const url = URL.createObjectURL(blob);
            blobimg.src = url;
        }
    });
}

// This code demonstrates how it is not possible to get the data for a cross domain image even 
// after copying it to canvas.  toDataURL throws exception.  If the xdomimage is not copied to
// the canvas, no exception is thrown.
jQuery("#capturexdomimage").click(function () {
    var img1 = jQuery("#xdomimage")[0];

    var img2 = jQuery("#absurlimage")[0];
    getImageData(img1, img2);
});

jQuery(window).ready(function () {
    var rnd = Math.floor(Math.random() * 1000);
    jQuery("#random").html(rnd);
    setImageBlobUrl()
});

function getImageData(img1, img2) {
    // Create an empty canvas element
    var canvas = document.createElement("canvas");
    canvas.width = img1.width;
    canvas.height = img1.height;

    // Copy the image contents to the canvas
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img1, 0, 0);
    ctx.drawImage(img2, 0, 0);

    // Get the data-URL formatted image
    // Firefox supports PNG and JPEG. You could check img.src to
    // guess the original format, but be aware the using "image/jpg"
    // will re-encode the image.
    dataURL = canvas.toDataURL("image/png");

    return dataURL;
}

var blob = new Blob([".blobstyle1 {background-color:orange}"], { type: 'text/css' });
var bloburl = URL.createObjectURL(blob);

jQuery("#blobstylesheet").attr("href", bloburl);