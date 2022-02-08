<?php include 'header.php'?>


<!-- inner breadcrumb -->
<section class="main-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">testomonial </li>
            </ol>
        </nav>
    </div>
</section>


<section class="student-detail sec-padding side-padding">
    <div class="container">
        <div class="sec-title">
            <h3>student details</h3>
            <h2>Please enter your following details</h2>
            <h6>we respect your privacy! Your information <span>will not be shared.</span> we will advise you based on
                your details</h6>
        </div>
        <div class="student-detail-form">
            <div class="form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*Enter your full name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*Enter your email address">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*Enter your phone number">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="book-language">
            <div class="sec-title disp-sb">
                <h2>Book Language class</h2>
                <i id="toggle-btn" class="fas fa-plus-circle"></i>
            </div>
            <div class="book-class">
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

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            ...</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-appointment-form">
            <div class="sec-title disp-sb">
                <h2>Book appointment</h2>
                <i id="toggle-btn-0" class="fas fa-plus-circle"></i>
            </div>
            <div class="student-detail-form vevent">
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
        <div class="country_document">
            <div class="sec-title">
                <h2>Apply online - document checklist</h2>
                <h6>Please send us your documents at company@email.com</h6>
            </div>
            <div class="navigation-tab-language">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Australia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">United kingdom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Canada</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="document-checklist-single">
                            <div class="dcs-title">
                                <h6>document checklist of Australia</h6>
                            </div>
                            <div class="dcs-single">
                                <div class="dcss-title">
                                    <h6>Documents required for the application of offer letter</h6>
                                </div>
                                <ul>
                                    <li>Academic documents till date
                                    </li>
                                    <li>IELTS/TOEFL Score
                                    </li>
                                    <li>Work Experience (If any)
                                    </li>
                                    <li>Work Experience (If any)
                                    </li>
                                    <li>University/College Application form
                                    </li>
                                    <li>Skype/phone interview may be conducted by university for offer letter (Offer
                                        letter processing time 1 to 6 week)
                                    </li>
                                </ul>
                            </div>
                            <div class="dcs-single">
                                <div class="dcss-title">
                                    <h6>Documents required for the VISA</h6>
                                </div>
                                <ul>
                                    <li>Academic documents till date</li>
                                    <li>IELTS/TOEFL Score</li>
                                    <li>Work Experience (If any</li>
                                    <li>University/College Application form</li>
                                    <li>Skype/phone interview may be conducted by university for offer letter (Offer
                                        letter processing time 1 to 6 week</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>

        <!-- final submit button -->
        <div class="row">
            <div class="col-md-12">
                <div class="learn_more">
                    <a href="get_started_menu.php">next</a>
                </div>
                <div class="learn_more return ">
                    <a href="index.php">return</a>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include 'footer.php'?>