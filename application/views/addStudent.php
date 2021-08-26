
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student
            <!--<small>Optional description</small>-->
        </h1>
        <div class="datetime">
            <b>
                <p>
                    <span id="sysDate"></span>
                    <span id="clock"></span>
                </p>
            </b>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!--<section>-->
        <form class="form-horizontal" role="form" method="POST" id="formStudent" name="formStudent" enctype="multipart/form-data">

            <input type="hidden" id="action" name="action" value="insert">

            <div class="nav-tabs-custom">

                <div class="tab-content">
                    <div class="tab-pane active" id="company">
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for=""></label>
                            <div class="col-sm-4">
                                <input type="checkbox" id="status" name="status" checked><b> Active</b>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="studentId">Admission No</label>
                            <div class="col-sm-5">
                                <input type="text" id="StudentId" name="StudentId" class="form-control " onblur="validateText(name)" placeholder="Student ID" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="StudentName">Student Name</label>
                            <div class="col-sm-5">
                                <input type="text" id="StudentName" name="StudentName" class="form-control " onblur="validateText(name)" placeholder="Student Name" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="StudentNIC">NIC</label>
                            <div class="col-sm-5">
                                <input type="text" id="StudentNIC" name="StudentNIC" class="form-control " onblur="validateText(name)" placeholder="Student NIC" value=""  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address1" class="control-label col-sm-4">Address</label>
                            <div class=" col-sm-4" style="margin-bottom: 5px">
                                <input type="text" class="form-control" name="address1" id="address1" placeholder="Address line 1" onblur="validateRequired(name);" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address2" class="control-label col-sm-4"></label>
                            <div class=" col-sm-4" style="margin-bottom: 5px">
                                <input type="text" class="form-control" name="address2" id="address2" placeholder="Address line 2" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address3" class="control-label col-sm-4"></label>
                            <div class=" col-sm-4" style="margin-bottom: 5px">
                                <input type="text" class="form-control" name="address3" id="address3" placeholder="Address line 3" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4"for="faculty">Faculty of Student</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="faculty" id="faculty">
                                    <option value=""></option>
                                    <option value="Computing">Computing</option>
                                    <option value="Business">Business</option>
                                    <option value="Engineering">Engineering</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="batch" class="control-label col-sm-4">Batch</label>
                            <div class="col-sm-2" style="margin-bottom: 5px" >
                                <input type="text" class="form-control" name="batch" id="batch" maxlength="10" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="control-label col-sm-4">Telephone</label>
                            <div class="col-sm-2" style="margin-bottom: 5px" >
                                <input type="text" class="form-control" name="telephone" id="telephone" maxlength="10" placeholder="Telephone" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="control-label col-sm-4">Email</label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Company Email" onblur="validateEmail(name);" value="" >
                            </div>
                        </div>

                    </div>
                    <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
            </div>
            <div class="form-group">
                <label for="" class="control-label col-sm-9"></label>
                <div class=" col-sm-3" style="margin-bottom: 5px">
                    <button type="button" class="btn btn-success" id="btnSave" onclick="validate();">Submit</button>
                    <button type="button"  class="btn btn-warning" onclick="resetform();">Clear</button>
                    <button type="button" onclick="printStudentSticker();" class="btn btn-primary">Print Label</button>
                </div>
            </div>
        </form>

        <script type="text/javascript">
            function validate() {
                var sid = document.getElementById("StudentId");
                var sName = document.getElementById("StudentName");
                var nic = document.getElementById("StudentNIC");
                var address1 = document.getElementById("address1");
                var address2 = document.getElementById("address2");
                var address3 = document.getElementById("address3");
                var address3 = document.getElementById("address3");
                var faculty = document.getElementById("faculty");
                var batch = document.getElementById("batch");
                var telephone = document.getElementById("telephone");
                var email = document.getElementById("email");
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;




                if(sid.value == "" || sName.value=="" || nic.value == "" || address1.value == "" || address2.value == "" || address3.value == "" || faculty.value == "" || batch.value == "" || telephone.value == "" || email.value == ""  )
                {
                    alertify.error("Please fill all the blanks!")

                }
                else if (!filter.test(email.value)) {
                    alertify.error('Please provide a valid email address!');
                    email.focus;

                }

                else {
                    submitStudent();
                }

            }

        </script>




        <!--</section>-->
    </section>
    <!-- /.content -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/addStudent.js"></script>
</div>
<!-- /.content-wrapper -->
