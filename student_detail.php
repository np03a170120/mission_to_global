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
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <!-- <label for="inputState">*Latest Educational Level</label> -->
                            <select id="inputState" class="form-control">
                                <option selected>*latest Educational level</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*Enter your CGPA">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-control">
                            <option selected>*preferred Educational level</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>*preferred Intake year</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>*preferred Intake month</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="radio-content">
                            <div class="form-title">
                                <h6>have you taken language test ?</h6>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    No
                                </label>
                            </div>
                        </div> -->
                        <select id="inputState" class="form-control">
                            <option selected>*have you taken language test ?</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*Enter your score (if)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <select id="inputState" class="form-control">
                            <option selected>*Validity of your language test</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>*Preferred Country</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="*your Preferred college/university">
                        </div>
                    </div>
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
        </div>
    </div>
</section>


<?php include 'footer.php'?>