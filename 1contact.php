
application/x-httpd-php contact-us.php
ASCII C++ program text
<? include("head.php"); ?>
<table align="center" cellpadding="3" cellspacing="3" class="body">
    <tr>
        <td colspan="2"><div class="title">Contact Us</div><br /></td>
    </tr>
    <tr>
        <td>
            <?
            if(isset($_POST['send']))
            {

            // Some data for the message
            $mailTo = "imd@imdortho.com";
            $mailFrom = $_POST['email'];
            $mailFromName = $_POST['name'];
            $mailSubject = "IMDOrtho.com Contact Page";

            $mailMessage = $_POST['name']."\n";
            $mailMessage .= $_POST['email']."\n";
            $mailMessage .= $_POST['citystate']."\n";
            $mailMessage .= $_POST['zip']."\n\n";
            if($_POST['brochure'] == "YES")
            {
            $mailMessage .= "SEND ME A BROCHURE!\n\n";
            }
            $mailMessage .= $_POST['message'];

            // Send mail
            mail($mailTo, $mailSubject, $mailMessage, "From: $mailFromName <$mailFrom>\r\n");
            //mail("cbake@livemercial.com, sjgraphics@kconline.com", $mailSubject, $mailMessage, "From: $mailFromName <$mailFrom>\r\n") or die("couldn't mail");

            echo "<br /><br /><b>Thanks for contacting us. We'll get in touch with you as soon as possible.</b>";

            }else{
            ?>
            <br />
            Thank you for your interest in IMD. Please fill out the fields listed below and we will get back with you<br /> in a
            timely manner. Please let us know the best way to reach you (email, phone, etc.).
            <br /><br />
            <div align="center">
                <b>INSTRUMENTAL MACHINE & DEVELOPMENT</b><br />
                2098 N. Pound Drive, West<br />
                Warsaw, Indiana  46582<br /><br />
                574-267-7713
            </div>

            <br /><br />
            <script>
                function validate()
                {
                    var name = document.getElementById('name').value;
                    var email = document.getElementById('email').value;
                    var city = document.getElementById('city').value;
                    var zip = document.getElementById('zip').value;
                    var address = document.getElementById('address').value;
                    if (name == '' || name == "undefined") {
                        alert("Please Enter Your Name.");
                        return false;
                    }
                    if (email == '' || email == "undefined") {
                        alert("Please Enter Your Email.");
                        return false;
                    }
                    if (city == '' || city == "undefined") {
                        alert("Please Enter Your City.");
                        return false;
                    }
                    if (zip == '' || zip == "undefined") {
                        alert("Please Enter Your ZipCode.");
                        return false;
                    }
                    if (address == '' || address == "undefined") {
                        alert("Please Enter Your Address.");
                        return false;
                    }
                }
            </script>

            <form method="POST" action="contact-us.php" onsubmit="return validate();">
                <table cellpadding="2" cellspacing="4" align="center" class="body">
                    <tr>
                        <td><b>Name:</b></td>
                        <td><input id="name" name="name" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td><input id="email" name="email" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <td><b>City/State:</b></td>
                        <td><input id="city" name="citystate" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <td><b>Zip:</b></td>
                        <td><input id="zip" name="zip" type="text" size="5" /></td>
                    </tr>
                    <tr>
                        <td><b>Address:</b></td>
                        <td><input id="address" name="address" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="brochure" value="YES" /></td>
                        <td>Please send me a company brochure</td>
                    </tr>
                    <tr>
                        <td><b>Message:</b></td>
                        <td>
                            <textarea name="message" rows="5" cols="30"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 align="center"><input type="submit" name="send" value="Send Your Message" /></td>
                    </tr>
                </table>
            </form>
            <? } ?>Thanks,
        </td>
    </tr>
</table>
<? include("foot.php"); ?>