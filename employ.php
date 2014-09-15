
<?php

include("head.php");
?>

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

<div class='container'>
    <div class="row">
        <div class="col-lg-12">
            <h1>Employment</h1>

            IMD is an equal opportunity employer. We seek out candidates that share our vision for excellence and drive for customer satisfaction. If you would like to become part of the IMD family, please contact us for more information on available positions.
        </div>
    </div>
</div>
<br>

<div class='container'>
    <div class='row'>
        <div class='col-lg-6 address'>
            <b>INSTRUMENTAL MACHINE & DEVELOPMENT</b><br />
            2098 N. Pound Drive West,<br />
            Warsaw, Indiana 46582<br />
            574-267-7713
        </div>


        <div class='col-lg-6'>
            <form action="contact.php" method='POST' class='form'>
                <fieldset>
                    <legend>Contact Us</legend>

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
                        <input name='brochure' type="checkbox" name="brochure" value="1"> I would like to fill out an application<br>
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

include("foot.php");

