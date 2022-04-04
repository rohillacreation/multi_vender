@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="row justify-content-between align-items-center mb-10 mt-30">
            <!-- Page Heading Start-->
            <div class="col-12 col-lg-auto mb-2 pt-4 ">
                <div class="page-heading">
                    <h6>Staff <span>/ Staff Profile</span></h6>
                </div>
            </div>
            <!--Page Heading End -->
        </div>

        <div class="std-prof tech_profile">
            <h2 class="pb-3"> Staff Profile</h2>
            <form action="{{asset('admin/staff/new')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="user" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pone" name="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="user@gmail.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="qualification" name="qual" placeholder="Qualification">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Qualification" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <div class="tech_loc">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn">Search....</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                                    <a href="#about">About</a>
                                    <a href="#base">Base</a>
                                    <a href="#blog">Blog</a>
                                    <a href="#contact">Contact</a>
                                    <a href="#custom">Custom</a>
                                    <a href="#support">Support</a>
                                    <a href="#tools">Tools</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="membership" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Membership" name="role" placeholder="Role">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="NewPassword" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NewPassword" name="new_pwd" placeholder="New Password">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="Re-EnterPassword" class="col-sm-2 col-form-label">Re-Enter Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Re-EnterPassword" name="confirm_password" placeholder="Re-Enter Password">
                    </div>
                </div>

                <div class="form-group" >
                    <div class="btn-primary" id ="addBank" onclick="add_bank_details(1)" style="width: 100px; float:right; padding:14px; cursor:pointer"> Add Bank </div>
                </div>

                <div class="bank_del allstd-page" id="bank_detail">
                    <h3 class="pt-3 pb-2">Account Details</h3>

                    <div class="form-group row">
                        <label for="accholder" class="col-sm-2 col-form-label">Account Holder</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="accholder" name="acc_hol" placeholder="Account Holder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="accnum" class="col-sm-2 col-form-label">Account Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="accnum" name="acc_num" placeholder="Account Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bank" class="col-sm-2 col-form-label">Bank Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bank" name="bank_name" placeholder="Bank Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ifsc" class="col-sm-2 col-form-label">IFSC Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Code" name="ifc_code" placeholder=" IFSC Code">
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <button class="s-btn btn-primary" type="submit">Save</button>
                        <div class="btn-primary" id="hide"  onclick="add_bank_details(0)" style="width: 100px; float:right; padding:14px; cursor:pointer"> Hide bank </div>

                    </div>
                    

            </form>


        </div>


    </div>


</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<script>
    $("#bank_detail").css("display", "none");
    $("#hide").css("display", "none");

    function add_bank_details(val) {
        if (val == 1) {
            $("#bank_detail").css("display", "block");
            $("#hide").css("display", "block");
            $("#addBank").css("display", "none");

            
        } 
        if (val == 0) {
         $("#bank_detail").css("display", "none");
         $("#hide").css("display", "none");
         $("#addBank").css("display", "block");


        }
    }
</script>

@include('admin.layouts.footer')