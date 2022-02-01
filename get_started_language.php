<?php include 'header.php'?>


<!-- inner breadcrumb -->
<section class="main-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Get started </li>
            </ol>
        </nav>
    </div>
</section>

<section class="get_started_language  side-padding">
    <div class="container">
        <div class="notice">
            <h3>Notice</h3>
            <span>We are about to go online fully from 3rd Feburary, till the next notice</span>
        </div>
        <div class="sec-title">
            <h2>language class schedule & availability</h2>
        </div>
        <div class="navigation-tab-language">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">IELTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">TOEFL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">PTE</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="nav-content-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Days</th>
                                    <th scope="col">Shift</th>
                                    <th scope="col">Physical Class</th>
                                    <th scope="col">Virtual Class</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><input type="checkbox" aria-label="Checkbox for following text input">
                                    </th>
                                    <th scope="row">Sun - Fri</th>
                                    <td>6 AM - 8 AM</td>
                                    <td><img src="./images/tick-green.png" alt=""></td>
                                    <td><img src="./images/cross-red.png" alt=""></td>

                                </tr>
                                <tr>
                                    <th><input type="checkbox" aria-label="Checkbox for following text input">
                                    </th>
                                    <th scope="row">Sun - Fri</th>
                                    <td>6 AM - 8 AM</td>
                                    <td><img src="./images/tick-green.png" alt=""></td>
                                    <td><img src="./images/cross-red.png" alt=""></td>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" aria-label="Checkbox for following text input">
                                    </th>
                                    <th scope="row">Sun - Fri</th>
                                    <td>6 AM - 8 AM</td>
                                    <td><img src="./images/tick-green.png" alt=""></td>
                                    <td><img src="./images/cross-red.png" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="learn_more">
                            <a href="#">Book now</a>
                        </div>
                        <div class="learn_more return ">
                            <a href="get_started_menu.php">return</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
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

<section class="side-content">
    <ul class="side-content-wrapper">
        <li>
            <div class="scw-title">
                <h6>watch our class</h6>
            </div>
            <a href="#">
                <div class="mc-single">
                    <div class="ms-icon">
                        <img src="./images/video-play.png" alt="">
                    </div>

                </div>
            </a>
        </li>
        <li>
            <div class="scw-title">
                <h6>Enquiry now</h6>
            </div>
            <a href="#">
                <div class="mc-single">
                    <div class="ms-icon">
                        <img src="./images/tele-icon.png" alt="">
                    </div>

                </div>
            </a>
        </li>
    </ul>
</section>

<?php include 'footer.php'?>