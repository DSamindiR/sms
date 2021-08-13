<?php include_once('header.php');  ?>




        <section>
            <div class="container-fluid">
                
                <!-- General Details -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="div-1">
                            <div class="header">
                                
                                    <h2><b>
                                        Genaral Details
                                        </b>
                                    </h2>
                            </div>
                            </div>

                            <div class="body">
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-12">

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                              <select class="form-control" name="title">
                                                 <option>Rev.</option>
                                                 <option>Mr.</option>
                                                 <option>Mrs.</option>
                                                 <option>Miss.</option>
                                              </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Full Name" />
                                                </div>
                                            </div>
                                            
                                        
                                        </div>
                                        
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Address" />
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <h2 class="card-inside-title">Gender</h2>
                                            <div class="demo-radio-button">
                                                <input name="group1" type="radio" class="with-gap" id="male" />
                                                <label for="male">Male</label>
                                                <input name="group1" type="radio" id="female" class="with-gap" />
                                                <label for="female">Female</label>
                                                
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <h2 class="card-inside-title">Civil Status</h2>
                                            <div class="demo-radio-button">
                                                <input name="group1" type="radio" class="with-gap" id="married" />
                                                <label for="married">Married</label>
                                                <input name="group1" type="radio" id="Unmarried" class="with-gap" />
                                                <label for="Unmarried">Unmaried</label>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Telephone Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Whatsapp Telephone Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="NIC Number" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="E-mail Address" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <h2 class="card-inside-title">Profile Picture</h2>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                              <input type="file" class="form-control" placeholder="Add Profile Image" name="p_image">
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Professional Details and Account Details -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="div-1">
                                <div class="header">
                                    
                                        <h2><b>
                                            Professional Details
                                            </b>
                                        </h2>
                                </div>
                            </div>

                                <div class="body">
                                    <div class="row clearfix">

                                        <div class="col-sm-12">
                                         <div class="form-group">   
                                            <div class="col-xs-3">
                                                First Appoinment date
                                            </div>

                                            <div class="col-xs-3">
                                                                                                 
                                                    <div class="form-line" id="bs_datepicker_container">
                                                        <input type="Date" class="form-control" name="fapdate">
                                                    </div>
                                            </div>

                                            <div class="col-xs-1">
                                                
                                            </div>

                                            <div class="col-xs-5">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Appoinment Subject" />
                                                    </div>
                                            </div>
                                         </div>
                                        </div>
                                        
                                        

                                        <div class="col-sm-12">
                                            <h2 class="card-inside-title">Medium</h2>
                                            <div class="demo-checkbox">
                                                <input type="checkbox" id="sin" class="filled-in"  />
                                                <label for="sin">Sinhala</label>
                                                <input type="checkbox" id="tam" class="filled-in"  />
                                                <label for="tam">Tamil</label>
                                                <input type="checkbox" id="eng" class="filled-in"  />
                                                <label for="eng">Engish</label>
                                                <input type="checkbox" id="oth" class="filled-in" />
                                                <label for="oth">Other</label>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Education Qualifications" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Professional Qualifications" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="col-xs-5">
                                                <div class="form-group">
                                                    
                                                    <div class="form-line" id="bs_datepicker_container">
                                                        Appoinment date in this school
                                                        <input type="Date" class="form-control" name="apdate">
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        
                                        </div>

                                        <br><br><br>

                                        <div>


                                            <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Service Grade" />
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="WNoP Number" />
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Paysheet Number" />
                                                </div>
                                            </div>
                                            </div>
                                        </div>



                                   
                                    </div>
                                </div>
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <div class="div-1">
                                <div class="header">
                                    
                                        <h2><b>
                                            Account Details
                                            </b>
                                        </h2>
                                </div>
                            </div>

                                <div class="body">

                                    <br><br>
                                    <div class="row clearfix">

                                                                          
                                        <div class="col-sm-3">
                                        </div>
                                       
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Username" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Confirm Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Email Address" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h2 class="card-inside-title">User Type</h2>
                                                    <div class="demo-radio-button">
                                                        <input name="group1" type="radio" class="with-gap" id="admin" />
                                                        <label for="admin">Admin </label>
                                                        <input name="group1" type="radio" id="moderator" class="with-gap" />
                                                        <label for="moderator">Moderator </label>
                                                        <input name="group1" type="radio" id="teacher" class="with-gap" />
                                                        <label for="teacher">Teacher </label>
                                                        <input name="group1" type="radio" id="student" class="with-gap" />
                                                        <label for="student">Student </label>
                                                        
                                                    </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Extra User Permissions" />
                                                </div>

                                            <br><br>

                                            <p align="right">
                                            <button class="btn btn-warning waves-effect" type="reset">RESET</button>
                                            <button class="btn btn-success waves-effect" type="submit">SUBMIT</button>
                                            </p>
                                            

                                            </div>

                                        </div>

                                        <div class="col-sm-3">
                                        </div>



                                   
                                    </div>
                                </div>
                        </div>
                    </div>



                </div>

                
            </div>
        </section>



<?php include_once('footer.php');  ?>