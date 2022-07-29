<?php
/**
 * Created by PhpStorm.
 * User: DANIEL
 * Date: 11/2/2016
 * Time: 1:20 PM
 */
?>

<!-- Page Content Start -->
<!-- ================== -->

<div class="wraper container-fluid">

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-sx-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h2>
                        <?php echo $users_report['total'];
                        ?>
                    </h2>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
            <span class="small-box-footer">
               <?php echo date('F');?>
            </span>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-sm-6 col-sx-12">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h2>
                        <?php echo $users_report['total_stores']; ?>
                    </h2>
                    <p> Total Stores</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            <span class="small-box-footer">
                <?php echo date('F');?>
            </span>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-sm-6 col-sx-12">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h2><?php echo $users_report['partners'] ?></h2>
                    <p>Partners</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            <span class="small-box-footer">
                <?php echo date('F');?>
            </span>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-sm-6 col-sx-12">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h2><?php echo $users_report['customers']; ?></h2>
                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="fa fa-suitcase"></i>
                </div>
            <span class="small-box-footer">
              Cost of All Items Held in Stock
            </span>
            </div>
        </div><!-- ./col -->
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Users
                    </h3>
                </div>
                <div id="portlet2" class="panel-collapse collapse in">
                    <div class="portlet-body" style="height: 400px">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Store</th>

                                    <th>Check in</th>
                                    <th>Check out</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; foreach($users as $user): ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $user->name; ?></td>
                                        <td><?php             switch ($user->flag) {
                                                                 case 1:
                                                                     echo 'Super Admin';
                                                                     break;
                                                                 case 2:
                                                                     echo 'Admin';
                                                                     break;
                                                                 case 3:
                                                                     echo 'Promoter';
                                                                     break;
                                                                 default:
                                                                     echo 'Promoter';
                                                                     break;
                                                             } ?></td>
                                        <td><?php echo $user->store_name; ?></td>
                                        <td><?php echo $user->check_in; ?></td>
                                        <td class="highlight"><strong><?php echo $user->check_out  ?></strong></td>
                                    </tr>
                                    <?php $count++; endforeach; ?>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-md-4">
            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Users Activities Log
                    </h3>
                </div>
                <div id="portlet1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>User</th>
                                    <th>Activity</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; foreach($users_activities as $user_activity): ?>
                                    <tr>

                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $user_activity->name; ?></td>
                                        <td><?php echo $user_activity->action; ?></td>
                                        <td><?php echo $user_activity->date; ?></td>
                                    </tr>
                                    <?php $count++; endforeach; ?>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div>
                </div>
            </div>
            <!-- /Portlet -->

        </div>

    </div>
    <!-- End row -->






</div>
<!-- Page Content Ends -->
<!-- ================== -->

<script>

    $(function () {
        //Bar chart
        Morris.Bar({
            element: 'morris-bar-example',
            data: [
                <?php foreach ($yearly_sales_report as $name => $v_result):
                    $month_name = date('M', strtotime($year . '-' . $name)); // get full name of month by date query
                ?>
                { x: '<?php echo $month_name; ?>',
                    a: <?php
                    if (!empty($v_result)) {
                        foreach($v_result as $result){
                            echo round($result->grand_total);
                        }
                    }
                    ?>,
                    b: <?php echo round($result->profit)?>,
                    c: <?php echo round($result->purchase)?>
                },

                <?php endforeach; ?>

            ],
            xkey: 'x',
            ykeys: ['a', 'b', 'c'],
            labels: ['Revenue', 'Profit', 'Purchase'],
            barColors: ['#3bc0c3', '#1a2942', '#5F5AAB']
        });

    });
</script>
