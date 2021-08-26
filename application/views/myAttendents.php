
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    #calendar {
        margin-top: 40px;
    }

    .event a {
        background-color: #42B373 !important;
        background-image :none !important;
        color: #ffffff !important;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         My Attendance History
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
                    <div class="panel panel-default">
                        <table id="tblStudent" class="table table-bordered table table-striped  table-hover ">
                            <thead>
                            <tr>
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
        <div class="box box-primary">
                <div class="box-body">
                    <div class="panel panel-default">
                        <h3> My Attendance Dates</h3>

                        <div id="calendar" > </div>
                    </div>
                </div>
        </div>

    </section>

    <!-- /.content -->
</div>
<!--    <script type="text/javascript" language="javascript" src="--><?php //echo base_url(); ?><!--assets/js/searchstudent.js"></script>-->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/myattendance.js"></script>
<!-- /.content-wrapper -->
