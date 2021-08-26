<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            My Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="https://wrappixel.com/demos/admin-templates/pixeladmin/plugins/images/users/4.jpg" alt="User profile picture">
                        <a href="#" class="btn btn-primary btn-block"><b>Change Picture</b></a>

                        <h3 class="profile-username text-center" id="myname">Nina Mcintire</h3>

                        <p class="text-muted text-center" id="myrole">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Student ID</b> <a class="pull-right" id="myid">IT17069878</a>
                            </li>
                            <li class="list-group-item">
                                <b>Faculty</b> <a class="pull-right" id="myfaculty">Computing</a>
                            </li>
                            <li class="list-group-item">
                                <b>Batch</b> <a class="pull-right" id="mybatch">2017</a>
                            </li>
                        </ul>

<!--                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-university"></i> University</strong>

                        <p class="text-muted">
                            <?php echo Univercity ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Personal Address</strong>

                        <p class="text-muted" id="myaddress">Malibu, California</p>

                        <hr>
                        <strong><i class="fa fa-phone" ></i> Mobile</strong>

                        <p class="text-muted" id="mymobile">0723423423</p>

                        <hr>

                        <strong><i class="fa fa-envelope"></i> NIC</strong>

                        <p class="text-muted" id="mynic">0723423423</p>

                        <hr>
                        <strong><i class="fa fa-envelope"></i> Email</strong>

                        <p class="text-muted" id="myemail">0723423423</p>

                        <hr>

                        <a href="<?php echo base_url() ?>Newstudent/index/<?php echo $email?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>


                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/myprofile.js"></script>
