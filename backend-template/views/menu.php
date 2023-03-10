<?php
  $userListing = selectTable('users');
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý menu trang giao diện
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <a href="add-menu.html" class="btn btn-success">+Thêm mới Menu</a>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <?php 
                    foreach ($userListing as $key => $value) {
                  ?>
                  <td><?=$key+1?></td>
                  <td><?=$value['name']?></td>
                  <td><?=$value['phone']?></td>
                  <td><?=$value['email']?></td>
                  <td><?=$value['status']?></td>
                  <td><?=$value['role']?></td>
                  <td>
                  <a href="site=edit.php&id=<?=$key?>" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                    <?php } ?>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->