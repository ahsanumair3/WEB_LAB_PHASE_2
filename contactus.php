<?php
include('header.php');
?>

    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone no:</label>
                        <input type="text" class="form-control" id="phn">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select City:</label>
                        <select class="form-control" id="sel1">
                            <option>Lahore</option>
                            <option>Islamabad</option>
                            <option>Karachi</option>
                            <option>Multan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Message:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
                <div class="col-md-4 ">
                    <div id="address pt-5">
                        <h2>Address</h2>
                        <p>Hafeez Center Gulberg Lahore Cantt </p>
                    </div>
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27195.854406286155!2d74.34660895315363!3d31.565833172618788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191ab43100bd61%3A0x6fca2c2899c49c9d!2sMughalpura%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1604239156472!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include ('footer.php');
?>