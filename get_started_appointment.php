<?php include 'header.php'?>


<!-- inner breadcrumb -->
<section class="main-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Get Started</a></li>
                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
</section>

<!-- appointment -->
<section class="student-detail main-appointment side-padding">
    <div class="container">
        <div class="sec-title">
            <h3>get started</h3>
            <h2>Please enter details to book appointment</h2>
            <h6>We will get back to you via phone call & email after we recieve the confirmation</h6>
        </div>
        <div class="main-appointment-form">
            <div class="student-detail-form">
                <div class="form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <!-- <label for="inputState">*Latest Educational Level</label> -->
                                <select id="inputState" class="form-control">
                                    <option selected="">*preferred mode of counselling</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label for="inputState">*Latest Educational Level</label> -->
                                <select id="inputState" class="form-control">
                                    <option selected="">*preferred Date</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label for="inputState">*Latest Educational Level</label> -->
                                <select id="inputState" class="form-control">
                                    <option selected="">*preferred time</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*write your message for us</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="learn_more">
            <a href="#">Book now</a>
        </div>
        <div class="learn_more return gs-return-custom">
            <a href="get_started_menu.php">return</a>
        </div>
    </div>
</section>


<section class="student-detail side-padding get-started-menu">
    <div class="container">
        <div class="gsm-content">
            <div class="sec-title">

                <h2>navigate to</h2>

            </div>
        </div>
        <ul class="get-started-option">
            <li>
                <a href="get_started_language.php">Book language Test</a>
            </li>
            <li>
                <a href="get_started_appointment.php">Book appointment</a>
            </li>
            <li>
                <a href="#">Apply online with us</a>
            </li>

        </ul>
        <div class="learn_more return gs-return-custom">
            <a href="#">return</a>
        </div>
    </div>
</section>


<!-- side floating content -->
<section class="side-content">
    <ul class="side-content-wrapper">
        <li>
            <div class="scw-title">
                <h6>Call Us</h6>
            </div>
            <a href="#">
                <div class="mc-single">
                    <div class="ms-icon">
                        <img src="./images/tele-icon.png" alt="">
                    </div>

                </div>
            </a>
        </li>
        <li>
            <div class="scw-title">
                <h6>Check Address</h6>
            </div>
            <a href="#">
                <div class="mc-single">
                    <div class="ms-icon">
                        <img src="./images/address.png" alt="">
                    </div>

                </div>
            </a>
        </li>
    </ul>
</section>


<?php include 'footer.php'?>