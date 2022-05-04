
	    <div id="footer"> &copy; 2022 - The Megaw Theatre AZ/CA.  All Rights Reserved.  &bull; Website: <a href="http://www.davidjdickinson.com">DJD Creative</a></div>
	    </div>
	</div>
</div>
</body>
<script>
$( document ).ready(function() {

    $( ".cross" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });

});
</script>
</html>