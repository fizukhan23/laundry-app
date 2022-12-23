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
            <h1> CREATE ADVERTISMENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advertisment Form</li>
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
                <h3 class="card-title">Advertisment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/saveads')}}" method="post"  enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                 <div class="form-group">
                <label for="code">Image</label>
                    <input type="file" name="image" id="photo">
                  </div>
              <div class="form-group">
               <label for="time">status</label>
                    <input type="text"class="form-control"  placeholder="text" name="status">
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

<!---view session--->

        <div class="row">
          <div class="col-sm-6">
            <h1>View Advertisment</h1>
          </div>
          </div>
   <!-- Main content -->
   <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">View Advertisment</h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>IMAGE</th>
                    <th>STATUS</th>
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($ads as $u)
            <tr>
              
                <td>{{ $i }}</td>
                <td> 
                <img src="{{asset('images/ads/'.$u->image)}}" width="80" height="80">
                </td>
                <td>{{ $u->status }}</td>
               <td>
                    <a href="{{url('/editads',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('/deleteads',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>

