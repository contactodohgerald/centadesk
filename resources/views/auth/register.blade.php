<!DOCTYPE html>
<html lang="en">

@include('layouts.head_auth')

<body>
<!-- Signup Start -->
<div class="sign_in_up_bg">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="index.html"><img src="images/logo.svg" alt=""></a>
                    <a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <div class="main-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a href="#instructor-signup-tab" id="instructor-tab" class="nav-link active" data-toggle="tab">Instructor Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a href="#student-signup-tab" id="student-tab" class="nav-link" data-toggle="tab">Student Sign Up</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="instructor-signup-tab" role="tabpanel" aria-labelledby="instructor-tab">
                            <p>Sign Up and Create Course!</p>
                            <form>
                                <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                    <option value="">Select Category</option>
                                    <option value="1">Development</option>
                                    <option value="2">Business</option>
                                    <option value="3">Finance & Accounting</option>
                                    <option value="4">IT & Software</option>
                                    <option value="5">Office Productivity</option>
                                    <option value="6">Personal Development</option>
                                    <option value="7">Design</option>
                                    <option value="8">Marketing</option>
                                    <option value="9">Lifestyle</option>
                                    <option value="10">Photography</option>
                                    <option value="11">Health & Fitness</option>
                                    <option value="12">Music</option>
                                    <option value="13">Teaching & Academics</option>
                                </select>
                                <div class="ui search focus mt-15">
                                    <div class="ui form swdh30">
                                        <div class="field">
                                            <textarea rows="3" name="description" id="id_about" placeholder="Write a little description about you..."></textarea>
                                        </div>
                                    </div>
                                    <div class="help-block">Your biography should have at least 12000 characters.</div>
                                </div>
                                <button class="login-btn" type="submit">Instructor Sign Up Now</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="student-signup-tab" role="tabpanel" aria-labelledby="student-tab">
                            <p>Sign Up and Start Learning!</p>
                            <form>
                                <div class="ui search focus mt-15">
                                    <div class="ui form swdh30">
                                        <div class="field">
                                            <textarea rows="3" name="description" id="id_about1" placeholder="Write a little description about you..."></textarea>
                                        </div>
                                    </div>
                                    <div class="help-block">Your biography should have at least 12000 characters.</div>
                                </div>
                                <button class="login-btn" type="submit">Student Sign Up Now</button>
                            </form>
                        </div>
                    </div>
                    <p class="mb-0 mt-30">Already have an account? <a href="sign_in.html">Log In</a></p>
                </div>
                <div class="sign_footer"><img src="images/sign_logo.png" alt="">© 2020 <strong>Cursus</strong>. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
<!-- Signup End -->

@include('layouts.e_script_auth')

</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_up_steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Aug 2020 17:44:37 GMT -->
</html>