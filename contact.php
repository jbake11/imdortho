
<!--ESpeicher@imdortho.com-->

<?php include("head.php"); ?>
<div class='container'>
    <div class="row">
        <div class="col-lg-12">
            <h1>Contact Us</h1>

            Thank you for your interest in IMD. Please fill out the fields listed below and we will get back with you
            in a timely manner. Please let us know the best way to reach you (email, phone, etc.).
        </div>
    </div>
</div>
<br>

<?php
if (isset($_POST['send'])) {

// Some data for the message
    $mailTo = "espeicher@imdortho.com";
    $mailFrom = $_POST['email'];
    $mailFromName = $_POST['name'];
    $mailSubject = "IMDOrtho.com Contact Page";

    $mailMessage = $_POST['name'] . "\n";
    $mailMessage .= $_POST['email'] . "\n";
    $mailMessage .= $_POST['address'] . "\n";
    $mailMessage .= $_POST['citystate'] . "\n";
    $mailMessage .= $_POST['zip'] . "\n\n";
    if (!empty($_POST['brochure']) == "YES") {
        $mailMessage .= "SEND ME A BROCHURE!\n\n";
    }
    $mailMessage .= $_POST['message'];

// Send mail
    mail($mailTo, $mailSubject, $mailMessage, "From: $mailFromName <$mailFrom>\r\n");
//mail("cbake@livemercial.com, sjgraphics@kconline.com", $mailSubject, $mailMessage, "From: $mailFromName <$mailFrom>\r\n") or die("couldn't mail");

    echo "<br /><br /><b>Thanks for contacting us. We'll get in touch with you as soon as possible.</b>";
} else {
    ?>
    <br />



    <script type='text/javascript'>
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

    <div class='container'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 address'>
                <b>INSTRUMENTAL MACHINE & DEVELOPMENT</b><br />
                2098 N. Pound Drive, West<br />
                Warsaw, Indiana 46582<br />
                574-267-7713
            </div>


            <div class='col-lg-6 col-md-6'>
                <form action="contact.php" method='POST' class='form'>
                    <fieldset>
                        <legend>Email Us For More Information</legend>

                        <div class="form-group">
                            <label>Name</label>
                            <input name='name' type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>@Email</label>
                            <input name='email' type="text" class="form-control" placeholder="address@domain.com">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Address</label>
                            <input name='address' type="text" class="form-control" placeholder="Your Address">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>City, State</label>
                            <input name='citystate' type="text" class="form-control" placeholder="City, State">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Zipcode</label>
                            <input name='zip' type="text" class="form-control" placeholder="xxxxx">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class='form-control' name='message' rows='15' cols='40'>

                            </textarea>
                        </div>
                        <div class='col-sm-6'>
                            <input type="checkbox" name="brochure" value="1"> Please send me a company brochure<br>
                        </div>
                        <div class='col-sm-6'>
                            <button name='send' type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php
}

include("foot.php");
?>
