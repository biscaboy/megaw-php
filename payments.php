<?php include "header.php" ?>
<div id="main">
    <div id="maincol">
		<h1>Payments</h1>
        <div id="centertext">
            For your convenience, payments for workshops and private coaching can be made by personal check payable to "Megaw Actors Studio, Inc." or with one of the PayPal links below.<br><br>Thank you!<br /><br />

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="98M5GLC8MS3SE">
            <table>
            <tr><td><input type="hidden" name="on0" value="Select Payment Option">Select Payment Option</td></tr><tr><td><select name="os0">
                <option value="Single Workshop">Single Workshop $45.00 USD</option>
                <option value="Private Coaching">Private Coaching $45.00 USD</option>
                <option value="Workshop - 1 Month">Workshop - 1 Month $145.00 USD</option>
                <option value="Ignite Your Career Registration">Ignite Your Career Registration $45.00 USD</option>
                <option value="Ignite Your Career Workshop">Ignite Your Career Workshop $195.00 USD</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <br>
            Pay Custom Amount
            <div style="margin-left: 20px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AB8EFVJBMF2LU">
            <input type="image" src="http://megawtheatreinc.com/images/custom-pay3.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <!--
			<br  /><br />Payments may also be made by check remitted to:<br/>
            <br />The MEGAW Theatre, Inc.*
            <br />Check Memo Note: Megaw Actors Studio
            <br />Mailing Address: TBA
			-->
            <br /><br /><br  />
            *The Megaw Actors Studio, Inc. is a division of the Megaw Theatre, Inc.
	   </div>
    </div>
</div>
<?php include "footer.php" ?>
