
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Attendance Student
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
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="studentId">Admission No</label>
                    <div class="col-sm-5">
                        <input type="text" id="StudentId" name="StudentId" class="form-control " placeholder="Student ID" value=""  >
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-primary" id="ac0">
            <div class="box-body">
                <div class="form-group text-center">
                    <h1 class="control-label col-sm-12 glow" for="studentId" id="sname"></h1>
                    <h2 class="control-label col-sm-12 text-success" for="studentId">Today Attendance Marked </h2>

                </div>
            </div>
        </div>
        <div class="box box-primary" id="ac1">
            <div class="box-body">
                <div class="form-group text-center">
                    <h1 class="control-label col-sm-12 glow" for="studentId" id="sname1"> </h1>
                    <h2 class="control-label col-sm-12 text-info" for="studentId">Today Attendance Already Marked..!</h2>

                </div>
            </div>
        </div>
        <div class="box box-primary" id="ac2">
            <div class="box-body">
                <div class="form-group text-center">
                    <h1 class="control-label col-sm-12 text-warning" for="studentId"> Error</h1>
                    <h2 class="control-label col-sm-12 text-info" for="studentId">Student ID Can't Identify</h2>

                </div>
            </div>
        </div>

    </section>>
    <!-- /.content -->
</div>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/attendance.js"></script>
<!-- /.content-wrapper -->
