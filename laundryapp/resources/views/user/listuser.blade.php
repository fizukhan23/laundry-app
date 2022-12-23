@include('layout.header')

@include('layout.navbar')

@include('layout.sidebar')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View user</h1>
          </div>
          
          <input id="myInput" type="text" placeholder="Search.." style="margin:left;">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View user </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>








    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" style="margin-left:150px;">
            <!-- general form elements -->
            <div class="card card-primary"  style="width:50rem;">
              <div class="card-header">
                <h3 class="card-title">View User</h3>
              </div>
              <!-- /.card-header -->
<!--               <div class="form-outline mb-4">-->
<!--  <input type="search" class="form-control" id="myInput">-->
<!--  <label class="form-label" for="datatable-search-input">Search</label>-->
<!--</div>-->
<!--<div id="myInput">-->
<!--</div>-->

                <table class="table table-bordered" id="myTable">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>USER ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CITY</th>
                    <th>MOBILE NUMBER</th>
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($user as $u)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->city }}</td>
                <td>{{ $u->number }}</td>
                <td>
                    <a href="{{url('edituser',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('deleteuser',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>


              