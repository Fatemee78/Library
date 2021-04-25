
<!-- include header file -->
<?php
    require_once'include/header.php';
?>    
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="content-header">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3>
                پرداخت جدید
            </h3>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> صفحه اصلی</a></li>
            <li class=""><a href="all_payment.php">راپور کلی</a></li>
            <li class="active"><a href="new_pay.php"> پرداخت جدید</a></li>
        </ol>
        </div>
       
    </div>
    <!-- /top tiles -->

    <!-- start of first row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جست و جو برای...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button">برو!</button>
                        </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class=" table-responsive">
                        <table id="example1" class="table table-responsive  table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    <th>نام</th>
                                    <th>تخلص</th>
                                    <th>مقدار</th>
                                    <th>تاریخ آخرین پرداخت</th>
                                    <th>عملیه</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $today = Date("Y-m-d");
                                    $credits = $objClub->fetch_credit_sum();
                                    $i=1;
                                    while($row=$credits->fetch_assoc()):
                                        $member_id = Control::hash($row['member_id']);
                                        $photo = $row['photo'];
                                        $last_pay_date = $row['last_pay_date'];
                                        $warnning_date = Control::mk_warnning($last_pay_date);
                                    ?>
                                
                                <tr class="text-center <?php
                                    if($last_pay_date<=$today){
                                        echo"danger";
                                       
                                    }elseif($warnning_date<=$today&&$today<$last_pay_date){
                                        echo"warning";
                                        
                                    }elseif($today<$warnning_date){
                                        echo"success";
                                       
                                    }
                                
                                
                                ?>">
                                    <td><?=$i;?></td>
                                    <td id="photo<?=$member_id?>"><img src="assets/imageMember/<?= $row['photo'];?>" class="img-responsive" width="50px;" height="50px"></td>
                                    <td id="name<?=$member_id?>"><?=$row['name'];?></td>
                                    <td id="lastname<?=$member_id?>"><?=$row['lastname'];?></td>
                                    <td id="total<?=$member_id?>"><?= $row['total'];?></td>
                                    <td id="last_pay_date<?=$member_id?>"><?= Control::ch_to_jalali($last_pay_date);?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href='payments_info.php?id=<?=$member_id?>' >	
                                                <button class="btn btn-xs btn-primary"  type="button" data-toggle="tooltip" title="جزییات">
                                                    جزییات<i class="fa fa-list-ul text-white"></i>
                                                </button>
                                            <a/>		
                                        <a href="new_pay.php?id=<?=$member_id?>">
                                            <button class="btn btn-xs btn-warning" type="button"   data-toggle="tooltip" title="پرداخت">
                                                پرداخت<i class="fa fa-dollar text-white"></i>
                                            </button>
                                        <a/>	
                                        </div>
                                    </td>
                                    
                                </tr>
                                <?php $i++; endwhile;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    <th>نام</th>
                                    <th>تخلص</th>
                                    <th>مقدار</th>
                                    <th>تاریخ آخرین پرداخت</th>
                                    <th>عملیه</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>
<!-- /page content -->

<!-- include footer file-->
<?php
    include_once'include/footer.php';
?> 