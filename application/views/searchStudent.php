
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Search Student
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
                            <label class="control-label col-sm-3" for="studentId">Filter by Faculty</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="faculty" id="faculty">
                                    <option value="">Select Faculty</option>
                                    <option value="Computing">Computing</option>
                                    <option value="Business">Business</option>
                                    <option value="Engineering">Engineering</option>

                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" id="srhbatch" name="srhbatch" class="form-control " placeholder="Batch Search" value=""  >
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-success" id="btnSave" onclick="Adsearch();">Search</button>

                            </div>

                        </div>
                </div>
                <div class="box-body">
                    <div class="panel panel-default">
                        <table id="tblstd" class="table table-bordered table table-striped  table-hover ">
                            <thead>
                            <tr>
                                <th>Admission No</th>
                                <th>Student Name</th>
                                <th>Faculty</th>
                                <th>Batch</th>
                                <th>Mobile</th>
                                <th>NIC</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

    </section>>
    <!-- /.content -->
</div>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/searchstudent.js"></script>
<!-- /.content-wrapper -->
