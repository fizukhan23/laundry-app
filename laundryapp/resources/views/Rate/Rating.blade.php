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
            <h1> CREATE Rating</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rating Form</li>
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
                <h3 class="card-title">Rating</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/saveRating')}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                 <div class="form-group">
                <label for="Username">Username</label>
                    <input type="text" class="form-control"  placeholder="username" name="username">
                  </div>
              <div class="form-group">
               <label for="Rating">Rating</label>
                    <input type="text" class="form-control"  placeholder="rating" name="rating">
                  </div>
                   <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control"  placeholder="Description" name="Description">
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
            <h1>View Rating</h1>
          </div>
          </div>
   <!-- Main content -->
   <div class="row">
          <!-- left column -->
          <div class="col-md-6"  style="margin-left:30px;">
            <!-- general form elements -->
            <div class="card card-primary" style="width:30rem;">
              <div class="card-header">
                <h3 class="card-title">View </h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>USERNAME</th>
                    <th>RATING</th>
                    <th>DESCRIPTION</th>
                     <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($Rating as $u)
            <tr>
              
                <td>{{ $i }}</td>
                <td>{{ $u->username }}</td>
                <td>{{ $u->rating }}</td>
                <td>{{ $u->Description }}</td>
               <td>
                    <a href="{{url('/editRating',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('/deleteRating',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>

