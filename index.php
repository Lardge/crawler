<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<?php include 'php-include/page-head.php'; ?>
<?php include 'mysql/mysql-get.php'; ?>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">

    <?php include 'php-include/page-header.php'; ?>

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <?php include 'php-include/page-sidebar.php'; ?>

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div id="home" class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Dashboard
                            <small>Senaste offertförfrågningarnan och kunderna</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" data-display-range="0" class="pull-right tooltips btn btn-fit-height green" data-placement="left" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp;
                            <span class="thin uppercase hidden-xs"></span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 bordered">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value="34">0</span>
                                    </h3>
                                    <small>Aktiva offertförfrågningar</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-like"></i>
                                </div>
                            </div>
                            <!--<div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 85% </div>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 bordered">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="55"></span>
                                    </h3>
                                    <small>Snart utgående offerter</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-basket"></i>
                                </div>
                            </div>
                            <!--<div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 bordered">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-purple-soft">
                                        <span data-counter="counterup" data-value="12"></span>
                                    </h3>
                                    <small>Förnyade offerter</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <!--<div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                </div>
                <!--QUOTES-->
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-sm-12">
                        <div class="portlet-body dashboard-stat2 bordered">
                            <div class="table-container">
                                <div class="table-actions-wrapper">
                                    <span> </span>
                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                                <option value="">Select...</option>
                                                <option value="Cancel">Cancel</option>
                                                <option value="Cancel">Hold</option>
                                                <option value="Cancel">On Hold</option>
                                                <option value="Close">Close</option>
                                            </select>
                                    <button class="btn btn-sm btn-default table-group-action-submit">
                                                <i class="fa fa-check"></i> Submit</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable">
                                    <!--id="datatable_orders"-->
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="2.5%">
                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                            </th>
                                            <th width="2.5%"> Order&nbsp;# </th>
                                            <th width="20%"> Purchased&nbsp;On </th>
                                            <th width="15%"> Customer </th>
                                            <!--<th width="10%"> Ship&nbsp;To </th-->
                                            <!--<th width="7.5%"> Base&nbsp;Price </th>-->
                                            <th width="7.5%"> Purchased&nbsp;Price </th>
                                            <th width="7.5%"> Status </th>
                                            <th width="17.5%"> Actions </th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td> </td>
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
                                            <td>
                                                <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" class="form-control form-filter input-sm" readonly name="order_date_to" placeholder="To">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter input-sm" name="order_customer_name"> </td>
                                            <!--<td>
                                                <input type="text" class="form-control form-filter input-sm" name="order_ship_to"> </td>
                                            <td>
                                                <div class="margin-bottom-5">
                                                    <input type="text" class="form-control form-filter input-sm col-xs-6" name="order_base_price_from" placeholder="From" />
                                                    <input type="text" class="form-control form-filter input-sm col-xs-6" name="order_base_price_to" placeholder="To" />
                                                </div>
                                            </td>-->
                                            <td>
                                                <div class="margin-bottom-5">
                                                    <input type="text" class="form-control form-filter input-sm margin-bottom-5 clearfix col-xs-6" name="order_purchase_price_from" placeholder="From" />
                                                    <input type="text" class="form-control form-filter input-sm col-xs-6" name="order_purchase_price_to" placeholder="To" />
                                                </div>
                                            </td>
                                            <td>
                                                <select name="order_status" class="form-control form-filter input-sm">
                                                    <option value="">Select...</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="hold">On Hold</option>
                                                    <option value="fraud">Fraud</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="margin-bottom-5">
                                                    <button class="btn btn-sm btn-success filter-submit margin-bottom">
                                                                <i class="fa fa-search"></i> Search</button>
                                                    <button class="btn btn-sm btn-default filter-cancel">
                                                            <i class="fa fa-times"></i> Reset</button>
                                                </div>

                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($quoteList->num_rows > 0) {
                                                // output data of each row
                                                while($row = $quoteList->fetch_assoc()) { ?>

                                            <tr>
                                                <td>
                                                    <?php echo $row["quoteId"] ?> </td>
                                                <td>
                                                    <?php echo $row["quoteId"] ?> </td>
                                                <td>
                                                    <?php echo $row["createdDate"] ?> </td>
                                                <td>
                                                    <?php echo $row["expirationDate"] ?> </td>
                                                <td>
                                                    <?php echo $row["price"] ?> </td>
                                                <td>
                                                    <?php echo $row["status"] ?> </td>
                                                <td>
                                                    <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                </td>
                                            </tr>

                                            <?php }
                                        } ?>
                                    </tbody>
                                    <!--<tbody> </tbody>-->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--QUOTES-->
                <!--CUSTOMERS-->
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-sm-12">
                        <div class="tab-content dashboard-stat2 bordered">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">

                                    <div class="col-md-12">
                                        <!--end row-->
                                        <div class="tabbable-line tabbable-custom-profile">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_11" data-toggle="tab"> Senaste kunderna </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_22" data-toggle="tab"> Alla kunder </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_11">
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-briefcase"></i> Företag </th>
                                                                    <th class="hidden-xs">
                                                                        <i class="fa fa-info-circle"></i> Bransch </th>
                                                                    <th>
                                                                        <i class="fa fa-dollar"></i> Försäkringsvärde </th>
                                                                    <th> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                            if ($result->num_rows > 0) {
                                                                // output data of each row
                                                                while($row = $result->fetch_assoc()) { ?>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;">
                                                                                <?php echo $row["customerName"] ?>
                                                                            </a>
                                                                        </td>
                                                                        <td class="hidden-xs">
                                                                            <?php echo $row["address"] ?> </td>
                                                                        <td>
                                                                            <?php echo $row["address"] ?> </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                        </td>
                                                                    </tr>

                                                                    <?php }
                                                            } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--tab-pane-->
                                                <div class="tab-pane" id="tab_1_22">
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-briefcase"></i> Company2 </th>
                                                                    <th class="hidden-xs">
                                                                        <i class="fa fa-info-circle"></i> Descrition </th>
                                                                    <th>
                                                                        <i class="fa fa-dollar"></i> Amount </th>
                                                                    <th> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> Pixel Ltd2 </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Server hardware purchase </td>
                                                                    <td> 52560.10$
                                                                        <span class="label label-success label-sm"> Paid </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> Smart House2 </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Office furniture purchase </td>
                                                                    <td> 5760.00$
                                                                        <span class="label label-warning label-sm"> Pending </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> FoodMaster Ltd </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                    <td> 12400.00$
                                                                        <span class="label label-success label-sm"> Paid </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> WaterPure Ltd </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Payment for Jan 2013 </td>
                                                                    <td> 610.50$
                                                                        <span class="label label-danger label-sm"> Overdue </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> Pixel Ltd </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Server hardware purchase </td>
                                                                    <td> 52560.10$
                                                                        <span class="label label-success label-sm"> Paid </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> Smart House </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Office furniture purchase </td>
                                                                    <td> 5760.00$
                                                                        <span class="label label-warning label-sm"> Pending </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:;"> FoodMaster Ltd </a>
                                                                    </td>
                                                                    <td class="hidden-xs"> Company Anual Dinner Catering </td>
                                                                    <td> 12400.00$
                                                                        <span class="label label-success label-sm"> Paid </span>
                                                                    </td>
                                                                    <td>
                                                                        <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab_1_2-->
                        </div>
                    </div>
                </div>
                <!--CUSTOMERS-->
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php include 'php-include/page-footer.php'; ?>
    <!-- END FOOTER -->
</body>

</html>