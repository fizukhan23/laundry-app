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
            <h1>SUB CATEGORY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">sub category Form</li>
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
    
          <form action="{{url('/savesubcategory')}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Select category</label>
         <select name="category1" class="form-control">
            <option selected disabled >please select</option>
                         @foreach($category1 as $add) 
                    <option value="{{ $add->id }}" class="text-capitalize">
                         {{ $add->name }}</option>
                   @endforeach
                                                
            </select> 
</div>


<div class="form-group">
       <label for="name">Name</label>
                    <input type="text" class="form-control"  placeholder="name" name="name">
                  </div>
                <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" class="form-control"  placeholder="status" name="status">
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
            <h1>View subCategory</h1>
          </div>
          </div>
   <!-- Main content -->
   <div class="row">
          <!-- left column -->
          <div class="col-md-24">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">View Subcategory</h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">#</th>

                    <th>CATEGORY NAME</th>
                    <th>SUB CATEGORY NAME</th>
                    <th>STATUS</th>
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($datas as $u)
            <tr>
              
                <td>{{ $i }}</td>
                <td>{{ $u->catname }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->status }}</td>
                
                <td>
                    <a href="{{url('/editsubcategory',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('/deletesubcategory',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>
