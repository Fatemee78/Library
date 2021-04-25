
<!-- include header file -->
<?php
    require_once'include/header.php';
?>    
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="content-header">
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <h3>
                کاربران
            </h3>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> صفحه اصلی</a></li>
            <li class="active"><a href="user.php">کاربران</a></li>
        </ol>
        </div>
       
    </div>
    <!-- /top tiles -->

    <!-- start of first row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>
                    <?php
                        //     $weeknumber=date('W');
                        //     var_dump($weeknumer);
                        // $startOfWeek = date("Y-m-d", strtotime("this week"));
                        // var_dump($startOfWeek);
                        
                    $date = date("Y-m-d", strtotime("Monday this week"));
                        // var_dump($startOfWeek);
                       // $date = new DateTime('2000-01-20');
                       $datetime = new DateTime($date);
                       
                       
                        $wfday= $datetime->sub(new DateInterval('P1D'));
                        echo "start date".$wfday->format('Y-m-d') . "<br />";
                        $wlday= $datetime->add(new DateInterval('P6D'));
                        
                        echo"end date". $wlday->format('Y-m-d') . "<br />";

                    // for ($i=0; $i<7;$i++){
                    //     echo date(" strtotime($startOfWeek . " + $i day"))."<br />";
                    // }


                         $users=$objClub->fetch_users();
                                    $i=1;
                                    while($row=$users->fetch_assoc()):
                                        $admin_id =Control::hash($row['id']);
                                        $photo = $row['photo'];
                                        $i++; 
                                    endwhile;
                        ?>
                    </h2>
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#insert-modal">
                        کاربر جدید
                        <i class="fa fa-plus"></i>
                    </button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class=" table-responsive">
                        <table id="example1" class="table table-responsive table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    <th>نام</th>
                                    <th>تخلص</th>
                                    <th>نام کاربری</th>
                                    <th>رول</th>
                                    <th>تلفن</th>
                                    <th>ایمیل</th>
                                    <th>تاریخ ثبت</th>
                                    <th>دسترسی</th>
                                    <th>عمل</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                

                                    $users=$objClub->fetch_users();
                                    $i=1;
                                    while($row=$users->fetch_assoc()):
                                        $admin_id =Control::hash($row['id']);
                                        $photo = $row['photo'];
                                ?>
                                
                                <?php $i++; endwhile;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    <th>نام</th>
                                    <th>تخلص</th>
                                    <th>نام کاربری</th>
                                    <th>رول</th>
                                    <th>تلفن</th>
                                    <th>ایمیل</th>
                                    <th>تاریخ ثبت</th>
                                    <th>دسترسی</th>
                                    <th>عمل</th>
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
<!-- insertion modal starts -->                          
    <div class="modal fade bs-example-modal-lg" id="insert-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">            
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">×</span>
                        </button>
                        <ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#user_register" id="user-tab"role="tab" data-toggle="tab"aria-controls="home"aria-expanded="true">مشخصات کاربر جدید</a>
                            </li>
                            <!-- <li role="presentation" class="">
                                <a href="#role_register" role="tab" id="role-tab"data-toggle="tab" aria-controls="profile"aria-expanded="false">رول جدید</a>
                            </li> -->
                        </ul>
                        <!-- <h4 class="modal-title" id="myModalLabel">عنوان مدال</h4> -->
                    </div>
                    <div class="modal-body">
                        <div id="myTabContent1" class="tab-content">
                            <!-- tab1 -->
                            <div role="tabpanel" class="tab-pane fade active in" id="user_register"aria-labelledby="user-tab">  
                                <form id="user_insert" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="post" value="reg-user" readonly>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="name">نام</label>
                                            <input type="text" id="name" autocomplete="off" name="name" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="lastname">تخلص</label>
                                            <input type="text" id="lastname" autocomplete="off" name="lastname" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="username">نام کاربری</label>
                                            <input type="text" autocomplete="off" id="username" name="username" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="password">رمز عبور</label>
                                            <input type="text" name="password" id="password" autocomplete="off" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="email">ایمیل</label>
                                            <input type="text" id="email" name="email" autocomplete="off" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="phone">تلفن</label>
                                            <input type="text" id="phone" name="phone" autocomplete="off" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="photo">عکس</label>
                                            <input type="file" class="form-control" name="photo" capture="camera" id="photo">
                                        </div>
                                        
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="role">رول</label>
                                            <select class="form-control " id="role" name="role" style="padding-top: 0px;">
                                            <?php 
                                                $admin = $objClub->fetch_user_types();
                                                while($row=$admin->fetch_assoc()):
                                            ?>
                                                <option value="<?=Control::hash($row['id'])?>"><?= $row['types'];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="pages">دسترسی</label>
                                            <textarea class="form-control" id="pages" name="pages" rows="4" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                        <button type="button" class="btn btn-primary"onclick="reg_users()">ثبت</button>
                                    </div>          
                                </form>
                            </div>
                            <!-- tab2 -->
                            <!-- <div role="tabpanel" class="tab-pane fade" id="role_register"aria-labelledby="role-tab">  
                                <form id="admin_type_insert" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="post" value="admin_type_insert" readonly>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="name">نام رول</label>
                                            <input type="text" id="" autocomplete="off" name="type-name" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="pages">دسترسی</label>
                                            <br/>
                                            <p>
                                                ثبت عضو:
                                                <input type="checkbox" name="member_add"  value="member.php" class="flat"/>
                                                ثبت کاربر:
                                                <input type="checkbox" name="user_add"  value="user.php" class="flat"/>
                                                ثبت رول:
                                                <input type="checkbox" name="role_add"  value="role.php" class="flat"/>
                                                گزارش پرداخت ها :
                                                <input type="checkbox" name="payment_report"  value="payment_report.php" class="flat"/>
                                            </p>  
            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                        <button type="button" class="btn btn-primary"onclick="reg_admin_type()">ثبت</button>
                                    </div>        
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- update modal starts -->
    <div class="modal fade bs-example-modal-lg" id="update-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">            
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">×</span>
                        </button>
                        <ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#user_edit" id="user-tab"role="tab" data-toggle="tab"aria-controls="home"aria-expanded="true">مشخصات کاربر</a>
                            </li>
                        </ul>
                        <!-- <h4 class="modal-title" id="myModalLabel">عنوان مدال</h4> -->
                    </div>

                    <div class="modal-body">
                        <div id="myTabContent1" class="tab-content">
                            <!-- tab1 -->
                            <div role="tabpanel" class="tab-pane fade active in" id="user_editt"aria-labelledby="user-tab">  
                                <form id="user_edit" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="post" value="user_edit" readonly>
                                    <input type="hidden" name="edit_rowId" id="edit_rowId" readonly>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="name">نام</label>
                                            <input type="text" id="edit_name" autocomplete="off" name="edit_name" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="lastname">تخلص</label>
                                            <input type="text" id="edit_lastname" autocomplete="off" name="edit_lastname" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="username">نام کاربری</label>
                                            <input type="text" autocomplete="off" id="edit_username" name="edit_username" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="email">ایمیل</label>
                                            <input type="text" id="edit_email" name="edit_email" autocomplete="off" class="form-control" placeholder="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="phone">تلفن</label>
                                            <input type="text" id="edit_phone" name="edit_phone" autocomplete="off" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="photo">عکس</label>
                                            <input type="file" class="form-control" name="photo" id="edit_photo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="edit_role">رول</label>
                                            <select class="form-control" id="edit_role" name="edit_role" style="padding-top: 0px;" >
                                            <?php 
                                            ///fetch types
                                                $admin = $objClub->fetch_user_types();
                                                while($row=$admin->fetch_assoc()):
                                            ?>
                                                <option value="<?=Control::hash($row['id'])?>">
                                                    <?= $row['types'];?>
                                                </option>
                                                <?php endwhile;?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="pages">دسترسی</label>
                                            <textarea class="form-control" id="edit_pages" name="edit_pages" rows="4" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                        <button type="button" class="btn btn-primary"onclick="update_users()">ثبت</button>
                                    </div>          
                                </form>
                            </div>
                            <!--/ tab1 -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- delete modal confirmation-->
    <div class="modal fade bs-example-modal-sm"  id="delete-modal"tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">حذف کاربر</h4>
                </div>
                <div class="modal-body">
                    <form id="user_delete" class="form-horizontal" method="post" enctype="multipart/form-data">
					<input type="hidden" name="post" value="user_delete" readonly>
					<input type="hidden" name="rowId" id="delete_rowId" readonly>
					<div class="form-group">
						<p class="">آیا مطمئن هستید کاربر مورد نظر حذف شود؟</p>
					</div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                        <button type="button" class="btn btn-primary" onclick="dlt_users()">حذف</button>
                    </div>
				</form>  
                </div>
            </div>
        </div>
    </div>
<!-- delete modal end -->
<script type="text/javascript">
//users registeration
	function reg_users() {
		let form_data = new FormData(document.getElementById('user_insert'));
		$.ajax({
			url: 'scripts.php',
			type: 'post',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			success: function(response) {                
				if (response == 200) {
					$("#alertbox").removeClass("alert-warning");
                    $("#alertbox").addClass("alert-info");
					$("#alertTitle").text("عالیست!");
					$("#alertbody").text("عضو جدید ثبت گردید!");
					$("#alertbox").fadeIn();
					$("#user_insert").trigger("reset");
					
					setTimeout(function() {
					$("#alertbox").fadeOut();
					 window.location.reload();
				}, 2000);
				} else {
					$("#alertbox").removeClass("alert-info");
                    $("#alertbox").addClass("alert-warning");
					$("#alertTitle").text("توجه!");
					$("#alertbody").text(response);
					$("#alertbox").fadeIn();

					setTimeout(function() {
					$("#alertbox").fadeOut();
					 }, 2000);
				}
			}
		});
	}
//users delete confirmation
	function dlt_confirm(admin_id){
		//get the user id that want to delete
		$('#delete_rowId').val(admin_id);
		//showing modal
		$('#delete-modal').modal('show');

	}	
//user deleting
	function dlt_users(){
		let form_data = new FormData(document.getElementById('user_delete'));
		$.ajax({
			url: 'scripts.php',
			type:'post',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response == 200) {
                    $("#alertbox").removeClass("alert-warning");
                    $("#alertbox").addClass("alert-info");
					$("#alertTitle").text("عالیست!");
                    $('#alertbody').text("موفقانـــه حذف شد.");
                    $('#alertbox').fadeIn();
                } else {
                    $("#alertbox").removeClass("alert-info");
                    $("#alertbox").addClass("alert-warning");
					$("#alertTitle").text("توجه!");
                    $('#alertbody').text(response);
                    $('#alertbox').fadeIn();
                }
                setTimeout(function () {
                    $('#alertbox').fadeOut();
                    window.location.reload();
                }, 2000);
			}
		});
	}
//users editing
	function edit_users(admin_id){
		$('#edit_rowId').val(admin_id);
		$('#edit_name').val($('#name'+admin_id).text());
		$('#edit_lastname').val($('#lastname'+admin_id).text());
		$('#edit_username').val($('#username'+admin_id).text());
		$('#edit_email').val($('#email'+admin_id).text());
		$('#edit_phone').val($('#mobile'+admin_id).text());
		$('#edit_photo').val($('#photo'+admin_id).text());
		$('#edit_role').val($('#role-id'+admin_id).val());
		$('#edit_pages').val($('#pages'+admin_id).text());
		//showing modal
		$('#update-modal').modal('show');
			
	}
//users updating
	function update_users(){
		let form_data = new FormData(document.getElementById('user_edit'));
		$.ajax({
			url:'scripts.php',
			type:'post',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response == 200) {
                    $("#alertbox").removeClass("alert-warning");
                    $("#alertbox").addClass("alert-info");
                    $("#alertTitle").text("عالیست!");
                    $('#alertbody').text("موفقانــه بروزرسانی شد!");
                    $('#alertbox').fadeIn();

					setTimeout(function () {
                        $('#alertbox').fadeOut();
                        window.location.reload();    
                    }, 2000);
                } else {
                    $("#alertbox").removeClass("alert-info");
                    $("#alertbox").addClass("alert-warning");
                    $('#alertTitle').text("توجــــه!");
                    $('#alertbody').text(response);
					$('#alertbox').fadeIn();

					setTimeout(function () {
                        $('#alertbox').fadeOut();
                    }, 2000);
                }
                
			}
		});
	}
	
//users types registeration
	function reg_admin_type() {
		let form_data = new FormData(document.getElementById('admin_type_insert'));
		$.ajax({
			url: 'scripts.php',
			type: 'post',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			success: function(response) {                
				if (response == 200) {
					$("#alertbox").removeClass("alert-warning");
                    $("#alertbox").addClass("alert-info");
                    $("#alertTitle").text("عالیست!");
					$("#alertbody").text("نوعیت جدید ثبت گردید!");
					$("#alertbox").fadeIn();
					$("#user_insert").trigger("reset");
					
					setTimeout(function() {
						$("#alertbox").fadeOut();
						window.location.reload();
				    }, 2000);
				} else {
					$("#alertbox").removeClass("alert-info");
                    $("#alertbox").addClass("alert-warning");
					$("#alertTitle").text("توجه!");
					$("#alertbody").text(response);
					$("#alertbox").fadeIn();

					setTimeout(function() {
						$("#alertbox").fadeOut();
					}, 2000);
				}
			}
		});
	}
	
</script>
<!-- include footer file-->
<?php
    include_once'include/footer.php';
?> 