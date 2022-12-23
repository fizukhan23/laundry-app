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
            <h1> CREATE DISCOUNT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Discount Form</li>
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
                <h3 class="card-title">Discount</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/savediscount')}}" method="post"  enctype="multipart/form-data">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                    <div class="form-group">
                <label for="title">Title</label>
                    <input type="text" class="form-control"  placeholder="title" name="title">
                  </div>
                 <div class="form-group">
                <label for="code">Code</label>
                    <input type="text" class="form-control"  placeholder="code" name="code">
                  </div>
              <div class="form-group">
               <label for="time">Expiry Date</label>
                    <input type="date" class="form-control"  placeholder="time" name="time">
                  </div>
                   <div class="form-group">
                    <label for="limit">Discount</label>
                    <input type="text" class="form-control"  placeholder="discount" name="discount">
                  </div>
                  <div class="form-group">
                    <label for="discount_type">discount type</label>
                    <select name="discount_type" class="form-control">
            <option selected disabled >please select</option>
              <option>Rupees</option>          
               <option>Percent</option>    
              
                </select>
                  </div>
                <div class="form-group">
                    <label for="limit">Limit</label>
                    <input type="text" class="form-control"  placeholder="limit" value="1" name="limit" >
                  </div>
                   <div class="form-group">
                    <label for="image">Banner</label>
                    <input type="file"   name="image" id="photo">
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
            <h1>View Discount</h1>
          </div>
          </div>
   <!-- Main content -->
 
         <div class="row">
          <!-- left column -->
          <div class="col-md-6"  style="margin-left:30px;">
            <!-- general form elements -->
            <div class="card card-primary" style="width:50rem;">
              <div class="card-header">
                <h3 class="card-title">View Discount</h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>TITLE</th>
                    <th>CODE</th>
                    <th>EXPIRY DATE</th>
                    <th>DISCOUNT</th>
                    <th>DISCOUNT TYPE</th>
                    <th>LIMIT</th>
                    <th>BANNER</th>
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($discount as $u)
            <tr>
              
                <td>{{ $i }}</td>
                <td>{{ $u->title }}</td> 
                <td>{{ $u->code }}</td>
                <td>{{ $u->time }}</td>
                <td>{{ $u->discount }}</td>
                 <td>{{ $u->discount_type }}</td>
                <td>{{ $u->limit }}</td>
                    <td>
                        <embed type="image/jpg" src="{{asset('images/icons/'.$u->image)}}" width="80" height="80">  
                    </td>
               <td>
                    <a href="{{url('/editdiscount',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('/deletediscount',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>

