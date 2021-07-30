// JavaScript Document

<script type="text/javascript">
    function fixPngs(){
    // Loops through all img tags   
        for (i = 0; i < document.images.length; i++){
            var s = document.images[i].src;
            if (s.indexOf('.png') > 0)  // Checks for the .png extension
                fixPng(s, document.images[i]);
        }
    }

    function fixPng(u, o){
        // u = url of the image
        // o = image object 
        o.src = 'images/spacer.gif';  // Need to give it an image so we don't get the red x
        o.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + u + "', sizingMethod='scale')";
    }   
</script>