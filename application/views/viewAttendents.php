<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Attendance
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
                    <label class="control-label col-sm-2" for="studentId">Filter by Faculty</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="faculty" id="faculty">
                            <option value="">Select Faculty</option>
                            <option value="Computing">Computing</option>
                            <option value="Business">Business</option>
                            <option value="Engineering">Engineering</option>

                        </select>
                    </div>
                    <label class="control-label col-sm-2" for="studentId">Filter by Batch</label>
                    <div class="col-sm-2">
                        <input type="text" id="srhbatch" name="srhbatch" class="form-control " placeholder="Batch Search" value=""  >

                    </div>
                    <label class="control-label col-sm-2" for="studentId">Filter by Date</label>
                    <div class="col-sm-2">
                        <input type="date" id="srhdate" name="srhdate" class="form-control" value=""  >

                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success" id="btnsrh" onclick="Adsearch();">Search</button>

                    </div>

                </div>
            </div>

            <div class="box-body">
                <div class="panel panel-default">
                    <table id="tblStudent" class="table table-bordered table table-striped  table-hover ">
                        <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Date</th>
                            <th>Time</th>


                        </tr>
                        </thead>
                        <tbody>
                        <!--                            <tr>-->
                        <!--                                <td>Admission No</td>-->
                        <!--                                <td>Student Name</td>-->
                        <!--                                <td>Date</td>-->
                        <!--                            </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>>
    <!-- /.content -->
</div>
<!--<script src="--><?php //echo base_url(); ?><!--assets/plugins/socket/socket.io.js"></script>-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/viewattendance.js"></script>
<!--<script type="text/javascript" language="javascript" src="--><?php //echo base_url(); ?><!--assets/js/notify.js"></script>-->

<!-- /.content-wrapper -->
