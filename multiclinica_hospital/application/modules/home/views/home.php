<!--sidebar end-->
<!--main content start-->
<script type="text/javascript" src="common/js/google-loader.js"></script>
<section id="main-content">
    <section class="wrapper site-min-height">
        <!--state overview start-->

  

        <?php if ($this->ion_auth->in_group(array('Doctor'))) { ?>
            <div class="state-overview col-md-5" style="padding: 23px 0px;">
                <header class="panel-heading">
                    <i class="fa fa-user"></i>  <?php echo lang('todays_appointments'); ?>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-samplee">
                            <thead>
                                <tr>
                                    <th> <?php echo lang('patient_id'); ?></th>
                                    <th> <?php echo lang('name'); ?></th>
                                    <th> <?php echo lang('date-time'); ?></th>
                                    <th> <?php echo lang('status'); ?></th>
                                    <th> <?php echo lang('options'); ?></th>
                                </tr>
                            </thead>
                            <tbody>

                            <style>

                                .img_url{
                                    height:20px;
                                    width:20px;
                                    background-size: contain; 
                                    max-height:20px;
                                    border-radius: 100px;
                                }

                            </style>

                            <?php
                            foreach ($appointments as $appointment) {
                                if ($appointment->date == strtotime(date('Y-m-d'))) {
                                    ?>
                                    <tr class="">
                                        <td> <?php echo $this->db->get_where('patient', array('id' => $appointment->patient))->row()->id; ?></td>
                                        <td> <?php echo $this->db->get_where('patient', array('id' => $appointment->patient))->row()->name; ?></td>

                                        <td class="center"> <strong> <?php echo $appointment->s_time; ?> </strong></td>
                                        <td>
                                            <?php echo $appointment->status; ?>
                                        </td>
                                        <td>

                                            <a class="btn detailsbutton" title="<?php lang('history') ?>" style="color: #fff;" href="patient/medicalHistory?id=<?php echo $appointment->patient ?>"><i class="fa fa-stethoscope"></i> <?php echo lang('history'); ?></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        <?php } ?>





        <?php if (!$this->ion_auth->in_group('Doctor')) { ?>

            <div class="state-overview col-md-12" style="padding: 23px 0px;">
                <div class="clearfix">
                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="doctor">
                            <?php } ?>
                            <section class="panel home_sec_green">
                                <div class="symbol terques">
                                    <i class="fa fa-stethoscope"></i>
                                </div>
                                <div class="value"> 
                                    <h3 class="">
                                        <?php echo $this->db->count_all('doctor'); ?>
                                    </h3>
                                    <p><?php echo lang('doctor'); ?></p>
                                </div>
                            </section>
                            <?php if (!$this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="patient">
                            <?php } ?>
                            <section class="panel home_sec_blue">
                                <div class="symbol blue">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('patient'); ?>
                                    </h3>
                                    <p><?php echo lang('patient'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="appointment">
                            <?php } ?>
                            <section class="panel home_sec_yellow">
                                <div class="symbol yellow">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('appointment'); ?>
                                    </h3>
                                    <p><?php echo lang('appointment'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="prescription/all">
                            <?php } ?>
                            <section class="panel home_sec_green">
                                <div class="symbol terques">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('prescription'); ?>
                                    </h3>
                                    <p><?php echo lang('prescription'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="patient/caseList">
                            <?php } ?>
                            <section class="panel home_sec_blue">
                                <div class="symbol blue">
                                    <i class="fa fa-medkit"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('medical_history'); ?>
                                    </h3>
                                    <p><?php echo lang('case_history'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="lab">
                            <?php } ?>
                            <section class="panel home_sec_green">
                                <div class="symbol terques">
                                    <i class="fa fa-medkit"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('lab'); ?>
                                    </h3>
                                    <p><?php echo lang('lab_report'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>




                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="patient/documents">
                            <?php } ?>
                            <section class="panel home_sec_blue">
                                <div class="symbol blue">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('patient_material'); ?>
                                    </h3>
                                    <p><?php echo lang('documents'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <a href="finance/payment">
                            <?php } ?>
                            <section class="panel home_sec_yellow">
                                <div class="symbol yellow">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="value">
                                    <h3 class="">
                                        <?php echo $this->db->count_all('payment'); ?>
                                    </h3>
                                    <p><?php echo lang('payment'); ?> <?php echo lang('invoice'); ?></p>
                                </div>
                            </section>
                            <?php if ($this->ion_auth->in_group('admin')) { ?>
                            </a>
                        <?php } ?>
                    </div>


                  

                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>

                        <div class="col-lg-8 col-sm-12">
                            <div id="chart_div" class="panel" style=""></div>

                        </div>
                        <div class="col-lg-4 col-sm-6">

                            <div id="piechart_3d" class="panel" style=""></div>
                        </div>




                    <?php } ?>



                </div>





                <?php if ($this->ion_auth->in_group(array('admin'))) { ?>


                   

                   



                    <?php if (!$this->ion_auth->in_group('Doctor')) { ?>
                        <div class="col-md-8">
                            <aside class="calendar_ui col-md-12 panel calendar_ui">
                                <section class="">
                                    <div class="">
                                        <div id="calendar" class="has-toolbar calendar_view"></div>
                                    </div>
                                </section>
                            </aside>
                        </div>


                    <?php } else { ?>
                        <div class="state-overview col-md-7 panel row">
                            <aside class="calendar_ui">
                                <section class="">
                                    <div class="">
                                        <div id="calendar" class="has-toolbar calendar_view"></div>
                                    </div>
                                </section>
                            </aside>
                        </div>
                    <?php } ?>





                    <div class="col-md-4">
                        <section class="panel">
                            <header class="panel-heading">
                                <?php echo date('D d F, Y'); ?>
                            </header>
                            <div class="panel-body">
                                <div class="home_section">
                                    <?php echo lang('income'); ?> : <?php echo number_format($this_day['payment'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('expense'); ?> : <?php echo number_format($this_day['expense'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('appointment'); ?> : <?php echo $this_day['appointment']; ?><hr>
                                </div>
                            </div>
                        </section>

                        <section class="panel">
                            <header class="panel-heading">
                                <?php echo date('F, Y'); ?>
                            </header>
                            <div class="panel-body">
                                <div class="home_section">
                                    <?php echo lang('income'); ?> : <?php echo number_format($this_month['payment'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('expense'); ?> : <?php echo number_format($this_month['expense'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('appointment'); ?> : <?php echo $this_month['appointment']; ?> <hr>
                                </div>
                            </div>
                        </section>


                        <section class="panel">
                            <header class="panel-heading">
                                <?php echo date('Y'); ?>
                            </header>
                            <div class="panel-body">
                                <div class="home_section">
                                    <?php echo lang('income'); ?> : <?php echo number_format($this_year['payment'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('expense'); ?> : <?php echo number_format($this_year['expense'], 2, '.', ','); ?> <hr>
                                </div>
                                <div class="home_section">
                                    <?php echo lang('appointment'); ?> : <?php echo $this_year['appointment']; ?> <hr>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php } ?>



            </div>








        <?php } ?>


















        <style>

            table{
                box-shadow: none;
            }

            .fc-head{

                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);

            }

            .panel-body{
                background: #fff;
            }

            thead{
                background: #fff;
            }

            .panel-body {
                background: #fff;
            }

            .panel-heading {
                border-radius: 0px;
                background: #fff !important;
                color: #000;
                padding-left: 10px;
                font-size: 13px !important;
                margin-top: 3px;
                text-align: center;
            }

            .add_patient{
                background: #009988;
            }

            .add_appointment{
                background: #f8d347;
            }

            .add_prescription{
                background: blue;
            }

            .add_lab_report{

            }

            .y-axis li span {
                display: block;
                margin: -20px 0 0 -25px;
                padding: 0 20px;
                width: 40px;
            }

            .sale_color{
                background: #69D2E7 !important;
                padding: 10px !important;
                font-size: 5px;
                margin-right: 10px;
            }

            .expense_color{
                background: #F38630 !important;
                padding: 10px !important;
                font-size: 5px;
                margin-right: 10px;
            }

            audio, canvas, progress, video {
                display: inline-block;
                vertical-align: baseline;
                width: 100% !important;
                height: 101% !important;
                margin-bottom: 18%;
            }  


            .panel-heading{
                margin-top: 0px;
            }


        </style>


        <!--state overview end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->







<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var months = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        var d = new Date();
        var selectedMonthName = months[d.getMonth()] + ', ' + d.getFullYear();


        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Income', <?php
        if (!empty($this_month['payment'])) {
            echo $this_month['payment'];
        } else {
            echo '0';
        }
        ?>],
            ['Expense', <?php
        if (!empty($this_month['expense'])) {
            echo $this_month['expense'];
        } else {
            echo '0';
        }
        ?>],
        ]);

        var options = {
            title: selectedMonthName,
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>




<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var months = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        var d = new Date();
        var selectedMonthName = months[d.getMonth()] + ', ' + d.getFullYear();

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Treated', <?php
        if (!empty($this_month['appointment_treated'])) {
            echo $this_month['appointment_treated'];
        } else {
            echo '0';
        }
        ?>],
            ['cancelled', <?php
        if (!empty($this_month['appointment_cancelled'])) {
            echo $this_month['appointment_cancelled'];
        } else {
            echo '0';
        }
        ?>],
        ]);

        var options = {
            title: selectedMonthName + ' Appointment',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>



<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Income', 'Expense'],
            ['Jan', <?php echo $this_year['payment_per_month']['january']; ?>, <?php echo $this_year['expense_per_month']['january']; ?>],
            ['Feb', <?php echo $this_year['payment_per_month']['february']; ?>, <?php echo $this_year['expense_per_month']['february']; ?>],
            ['Mar', <?php echo $this_year['payment_per_month']['march']; ?>, <?php echo $this_year['expense_per_month']['march']; ?>],
            ['Apr', <?php echo $this_year['payment_per_month']['april']; ?>, <?php echo $this_year['expense_per_month']['april']; ?>],
            ['May', <?php echo $this_year['payment_per_month']['may']; ?>, <?php echo $this_year['expense_per_month']['may']; ?>],
            ['June', <?php echo $this_year['payment_per_month']['june']; ?>, <?php echo $this_year['expense_per_month']['june']; ?>],
            ['July', <?php echo $this_year['payment_per_month']['july']; ?>, <?php echo $this_year['expense_per_month']['july']; ?>],
            ['Aug', <?php echo $this_year['payment_per_month']['august']; ?>, <?php echo $this_year['expense_per_month']['august']; ?>],
            ['Sep', <?php echo $this_year['payment_per_month']['september']; ?>, <?php echo $this_year['expense_per_month']['september']; ?>],
            ['Oct', <?php echo $this_year['payment_per_month']['october']; ?>, <?php echo $this_year['expense_per_month']['october']; ?>],
            ['Nov', <?php echo $this_year['payment_per_month']['november']; ?>, <?php echo $this_year['expense_per_month']['november']; ?>],
            ['Dec', <?php echo $this_year['payment_per_month']['december']; ?>, <?php echo $this_year['expense_per_month']['december']; ?>],
        ]);

        var options = {
            title: new Date().getFullYear() + ' <?php echo lang('per_month_income_expense'); ?>',
            vAxis: {title: '<?php echo $settings->currency; ?>'},
            hAxis: {title: '<?php echo lang('months'); ?>'},
            seriesType: 'bars',
            series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>









