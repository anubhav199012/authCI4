<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="../assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $user->name ; ?></a>
                      </div>
                      <div class="author-box-job">Web Developer</div>
                    </div>
                    <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $user->mobile ; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          <a href="#" data-cfemail="c2b6a7b1b682a7baa3afb2aea7eca1adaf"><?php echo $user->email ; ?></a>
                        </span>
                      </p>
                      <?php if(session('role_type')==1){ ?>
                        <p class="clearfix">
                          <span class="float-left">
                            Referral Link
                          </span>
                          <span class="float-right text-muted">
                            <a href="#"><?php echo (isset($user->referral_link)) ? base_url('portal').'/'.$user->referral_link : ''; ?></a>
                          </span>
                        </p>
                      <?php }?>
                    </div>
                  </div>
                  </div>
                </div>
                <!--<div class="card">
                  <div class="card-header">
                    <h4>Skills</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-green" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>-->
              </div>
              <div class="col-12 col-md-12 col-lg-8">
              <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      
                      <li class="nav-item">
                        <a class="nav-link active" id="profile-tab2" data-bs-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Edit Profile</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " id="home-tab2" data-bs-toggle="tab" href="#bankdetails" role="tab"
                          aria-selected="true">Bank Details</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " id="home-tab3" data-bs-toggle="tab" href="#changepassword" role="tab"
                          aria-selected="true">Change Password</a>
                      </li>

                    </ul>
                    <!--Start Tab for Bank Details-->
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade" id="bankdetails" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                        <form method="post" class="needs-validation">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">
                                  Please fill in the first name
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>IFSC Code</label>
                                <input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">
                                  Please fill in the last name
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Account Number</label>
                                <input type="email" class="form-control" value="test@example.com">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Account Holde Name</label>
                                <input type="tel" class="form-control" value="">
                              </div>
                            </div>
                         
                            
                          </div>
                          <div class="card-footer text-end">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                        </div>
                      </div>
                      <!--End Tab for Bank Details-->
                      <!--Start of Tab for Edit Profile-->
                      <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                      <form action="javascript:void(0)" name="ajax_edit_form" id="ajax_edit_form" method="post" accept-charset="utf-8">  
                      <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />     
                      <input type="hidden" name="userid" class="form-control" id="userid" value="<?php echo $user->user_id ?>">                   
                        <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the full name
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Phone Number</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the phone number
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Select Gender</label>
                                <select class="form-select form-control" name="gender" id="gender">
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                                
                              </select>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" id="country" value="">
                                <div class="invalid-feedback">
                                  Please fill in the country
                                </div>
                              </div>
                             
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                                <label>Address</label>
                                <textarea class="form-control summernote-simple" >

                                </textarea>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-end">
                            <button class="btn btn-primary" id="edit_profile" >Save Changes</button>
                          </div>
                        </form>
                      </div>
                      <!--End of Tab for Edit Profile-->
                      <!--Start Tab for Change Password-->
                      <div class="tab-pane fade" id="changepassword" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>New Password</label>
                                <input type="password" class="form-control" value="">
                                <div class="invalid-feedback">
                                  Please fill in the New Password
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control"  value="">
                                <div class="invalid-feedback">
                                  Please fill in the Confirm Password
                                </div>
                              </div>
                            </div>
                          
                           
                          </div>
                          <div class="card-footer text-end">
                            <button class="btn btn-primary" id="">Save Changes</button>
                          </div>
                        </form>
                      </div>
                      <!--End Tab for Change Password-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
 <!-- JS Libraies -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- Sweetalert library file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

<script>
    $(function() {

        // Adding form validation

        // Ajax form submission with image
        $('#ajax_edit_form').on('submit', function(e) {
           var csrfName = '<?= csrf_token() ?>';
           var csrfHash = '<?= csrf_hash() ?>'; 

            e.preventDefault();

            var formData = new FormData(this);
            console.log(formData);
            // OR var formData = $(this).serialize();

            //We can add more values to form data
            //formData.append("key", "value");

            $.ajax({
                url: "<?= site_url('home/editprofile') ?>",
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(data) {
                    if (data.success === false) {
                        //Swal.fire('Saved!', '', 'success')
                    } 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  console.log(errorThrown);

                  console.log(textStatus);

                  console.log(jqXHR);

                    //alert('Error at add data', textStatus);
                }
            }); 
        });
    });
</script>