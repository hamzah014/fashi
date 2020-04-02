
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>My Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item text-white">
                            <a class="nav-link active in" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#addpro" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Info</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#loginpro" role="tab" aria-controls="pills-profile" aria-selected="false">Login Info</a>
                        </li>
                    </ul>
                    <form action="user/update_profile.php" method="post">
                    <input type="text" id="userid" name="userid"  class="form-control" value="<?php echo $_SESSION['userid']; ?>" hidden>
                        <div class="tab-content" id="pills-tabContent" style="border:1px solid grey;padding:10px;">
                            <div class="tab-pane active in" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4>Basic Information</h4><br>
                                <div class="row form-group">
                                    <div class="col-md-2"><label for="text-input" class=" form-control-label">Name</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="text" id="name" name="name" placeholder="Enter your name." class="form-control" value="<?php echo $fullname; ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2"><label for="text-input" class=" form-control-label">Birthdate</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="date" id="birthdate" name="birthdate" placeholder="Enter your birthdate." class="form-control" value="<?php echo $birthdate; ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2"><label for="text-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="text" id="email" name="email" placeholder="Enter your email." class="form-control" value="<?php echo $email; ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addpro" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4>Additional Information</h4><br>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Number</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="text" id="phone" name="phone" placeholder="Enter your phone." class="form-control" value="<?php echo $contactno; ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                    <div class="col-12 col-md-6"><textarea style="margin:0px;" name="address" id="address" rows="9" placeholder="Content..." class="form-control"><?php echo $address; ?></textarea></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="loginpro" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <h4>Login Information</h4><br>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="text" id="username" name="username" placeholder="Enter your username." class="form-control" value="<?php echo $_SESSION['username'] ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-6"><input style="margin:0px;" type="password" id="password" name="password" placeholder="Enter your password." class="form-control" value="<?php echo $password; ?>"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-6">
                                </div>
                                <div class="col col-md-6">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i> Update
                                    </button>
                                </div> 
                            </div>

                        </div>
                    </form>
                    


                </div>    
            
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
