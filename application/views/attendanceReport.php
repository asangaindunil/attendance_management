
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Attendance History Reports
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
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="faculty">Faculty</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="faculty" id="faculty">
                            <option value="">Select Faculty</option>
                            <option value="Computing">Computing</option>
                            <option value="Business">Business</option>
                            <option value="Engineering">Engineering</option>

                        </select>
                    </div>
                    <label class="control-label col-sm-2" for="studentId">Batch</label>
                    <div class="col-sm-2">
                        <input type="text" id="batch" name="batch" class="form-control " placeholder="Batch Search" value=""  >

                    </div>
                    <label class="control-label col-sm-2" for="studentId">Start Date</label>
                    <div class="col-sm-2">
                        <input type="date" id="stdate" name="stdate" class="form-control" value=""  >

                    </div>
                    <label class="control-label col-sm-2" for="studentId">End Date</label>
                    <div class="col-sm-2">
                        <input type="date" id="enddate" name="enddate" class="form-control" value=""  >

                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success" id="btnsrh" onclick="generateReport();">Genarate Report</button>

                    </div>

                </div>
            </div>

        </div>


    </section>
    <!-- /.content -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/attendancerepo.js"></script>
</div>
<!-- /.content-wrapper -->
