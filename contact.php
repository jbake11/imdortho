
<?php
include("head.php");
?>


<div class='container'>
    <div class="row">
        <div class="col-lg-12">
            <h1>Contact Us</h1>

            <p>Thank you for your interest in IMD. Please fill out the fields listed below and we will get back with you
                in a timely manner. Please let us know the best way to reach you (email, phone, etc.). </p>
        </div>
    </div>
</div>
<br>

<div class='container'>
    <div class='row'>
        <div class='col-lg-6'>
            <p><b>INSTRUMENTAL MACHINE & DEVELOPMENT</b></p>
            <p id='textAlignCenter'>2098 N. Pound Drive,</p>
            <p id='textAlignCenter'>West Warsaw, Indiana 46582</p>
            <p id='textAlignCenter'>574-267-7713</p>
        </div>


        <div class='col-lg-6'>
            <form class='form'>
                <legend>Email Us For More Information</legend>

                <div class='col-sm-6'>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">First Name</span>
                        <input name='firstname' type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">Last Name</span>
                        <input name='firstname' type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon">@Email</span>
                    <input name='email' type="text" class="form-control" placeholder="address@domain.com">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Address</span>
                    <input name='address' type="text" class="form-control" placeholder="Address">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">City</span>
                    <input name='city' type="text" class="form-control" placeholder="Your City">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">State</span>
                    <input name='state' type="select" class="form-control" placeholder="State">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Zip</span>
                    <input name='zip' type="text" class="form-control" placeholder="xxxxx">
                </div>



            </form>
        </div>
    </div>
</div>

<?php
include("foot.php");
?>
