@include('layout.header')

@include('layout.navbar')

@include('layout.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add user Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" style="margin-left:150px;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/saveuser')}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label for="id">User id</label>
                    <input type="text" class="form-control"  placeholder="id" name="id">
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  placeholder="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control"  placeholder="city" name="city">
                  </div>
                  <div class="form-group">
                    <label for="mobile number">Mobile Number</label>
                    <input type="text" class="form-control"  placeholder="number" name="mob" minlength="10" maxlength="12">
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->