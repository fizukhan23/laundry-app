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
            <h1> EDIT CATEGORY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">category Form</li>
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
                <h3 class="card-title">category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          
        <form action="{{url('/updatecategory',$data->id)}}" method="post">
           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  placeholder="name" name="name" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif">
                  </div>
                <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" class="form-control"  placeholder="status" name="status" value="@if (!empty($data)){{ $data->status }}@else{{ old('status') }}@endif">
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
