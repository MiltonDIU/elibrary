<?php $__env->startSection('content'); ?>
    <div class="row widget-row">

        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Total Users</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-green icon-users"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count" data-counter="counterup"><?php echo e($users); ?></span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Total Items</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-red icon-layers"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count" data-counter="counterup"><?php echo e($items); ?></span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Departments</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count"><?php echo e($department); ?></span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Services</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count"><?php echo e($categories); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Downloads</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-purple icon-cloud-download"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count"><?php echo e($downloads); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Views</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-yellow fa fa-eye"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count"><?php echo e($views); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <h4 class="widget-thumb-heading">Concern</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-green icon-bar-chart"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-body-stat count"><?php echo e($concern); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div id="chartdiv"></div>
            </div>
            <div class="col-md-12">
                <div id="department"></div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h4>Today Upload</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless file-upload">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Count</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $itemToday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->displayName); ?></td>
                                    <td><?php echo e($user->item_count); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <h4>Total Upload</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless file-upload">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Count</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $itemUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->displayName); ?></td>
                                    <td><?php echo e($user->item_count); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-5 ">
            <div class="card">
                <div class="card-body">
                    <h4>Current Month Upload</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless file-upload">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Count</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $itemCurrentMonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->displayName); ?></td>
                                    <td><?php echo e($user->item_count); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <h4>Previous Month Upload</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless file-upload">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Count</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $itemPreviousMonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->displayName); ?></td>
                                    <td><?php echo e($user->item_count); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style_plugins'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/plugins/export/export.css')); ?>"
          type="text/css" media="all"/>
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
            font-size: 11px;
        }

        #department {
            width: 100%;
            height: 500px;
            font-size: 11px;
        }

    </style>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/datatable/css/material.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/datatable/css/dataTables.material.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/datatable/css/buttons.dataTables.min.css')); ?>"/>
     <style>
        .dataTables_filter{text-align: left!important}
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts_plugins'); ?>
    <script src="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/amcharts.js')); ?>"></script>
    <script src="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/pie.js')); ?>"></script>
    <script src="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/serial.js')); ?>"></script>
    <script src="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/plugins/export/export.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/admin/amcharts_3.21.13/amcharts/themes/light.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/datatables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/dataTables.material.min.js')); ?>"></script>


    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/datatables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/dataTables.material.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/dataTables.buttons.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/buttons.flash.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/jszip.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/pdfmake.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/vfs_fonts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/buttons.html5.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('assets/datatable/js/buttons.print.min.js')); ?>"></script>


    <script>
        $(document).ready(function() {
            $('.file-upload').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            } );
        } );

        var visitor = <?php echo $visitor; ?>;
        var departments = <?php echo $departments; ?>;


        var chart = AmCharts.makeChart("chartdiv", {

            "type": "pie",
            "startDuration": 0,
            "theme": "light",
            "titles": [{
                "text": "Item Download Statistics",
                "size": 16
            }],
            "addClassNames": true,
            "legend": {
                "position": "right",
                "marginRight": 100,
                "autoMargins": false
            },
            "innerRadius": "30%",
            "defs": {
                "filter": [{
                    "id": "shadow",
                    "width": "200%",
                    "height": "200%",
                    "feOffset": {
                        "result": "offOut",
                        "in": "SourceAlpha",
                        "dx": 0,
                        "dy": 0
                    },
                    "feGaussianBlur": {
                        "result": "blurOut",
                        "in": "offOut",
                        "stdDeviation": 5
                    },
                    "feBlend": {
                        "in": "SourceGraphic",
                        "in2": "blurOut",
                        "mode": "normal"
                    }
                }]
            },

            "dataProvider": visitor,
            "valueField": "counts",
            "titleField": "service",
            "startEffect": "elastic",
            "startDuration": 2,
            "labelRadius": 15,
            "innerRadius": "50%",
            "depth3D": 10,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "angle": 15,
            "export": {
                "enabled": true
            }
        });


        var department = AmCharts.makeChart("department", {
            "theme": "light",
            "type": "serial",
            "startDuration": 2,
            "titles": [{
                "text": "Department Item Upload Statistics",
                "size": 16
            }],
            "dataProvider": departments,
            "valueAxes": [{
                "position": "left",
                "axisAlpha": 0,
                "gridAlpha": 0
            }],
            "graphs": [{
                "balloonText": "[[category]]: <br> <b>[[value]]</b>",
                "colorField": "color",
                "fillAlphas": 0.85,
                "lineAlpha": 0.1,
                "type": "column",
                "topRadius": 1.3,
                "valueField": "counts",
                "labelText": "[[value]]"
            }],
            "depth3D": 40,
            "angle": 30,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "departmentName",
            "categoryAxis": {
                "gridPosition": "start",
                "labelRotation": 90

            },
            "export": {
                "enabled": true,
                "title": "Export chart to JPG",
            }

        }, 0);
        //counting
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>