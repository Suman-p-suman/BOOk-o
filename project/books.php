<!DOCTYPE html>
<html>
<?php include 'header1.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

  <!-- Main Sidebar Container -->
  <?php include 'sidebar&navbar.html' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
                <div class="col-sm-3">
                    <h1>Books</h1>
            </div>
        </div>
          
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-book">
                  Add Book
            </button>
              <?php include 'modals.php'; ?>
          </div>
        <div class="card-body">
          <table id="example3" class="table table-bordered table-striped" style="font-size:12px">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>ISBN</th>
                  <th>Book Title</th>
                  <th>Authors</th>
                  <th>Serial Number</th>
                  <th>Subject ID</th>
                  <th>mDescription</th>
                  <th>Publisher</th>
                  <th>Copyright Year</th>
                  <th>No. of Pages</th>
                  <th>No. Quantity</th>
                  <th>Date Encoded</th>
                  <th>Encoded by</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>01</td>
                  <td>789</td>
                  <td>Algebra</td>
                  <td>Chrome</td>
                  <td>SN: 5487842</td>
                  <td>05</td>
                  <td>Chrome</td>
                  <td>Publisher Inc.</td>
                  <td>1998</td>
                  <td>169</td>
                  <td>50</td>
                  <td>10-11-2019</td>
                  <td>X</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-book"><i class="fa fa-edit"></i></button>
                </td>
                </tr>
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>
    </div>
</body>
</html>

