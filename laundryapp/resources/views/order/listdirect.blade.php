@include('layout.header')

@include('layout.navbar')

@include('layout.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">



<!---view session--->

      
          <div class="col-sm-6">
            <h1>View direct order</h1>
          </div>
          
       
     
 <!-- Main content -->
  
    
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">View order</h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>USER ID</th>
                    <th>END TIME</th>
                    <th>QUANTITY</th>
                    <th>START TIME</th>
                    <th>DATE</th>
                   <th>STATUS</th>
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($directorder as $u)
            <tr>
               <td>{{ $i }}</td>
               <td>{{ $u->user_id }}</td>
               <td>{{ $u->endtime }}</td>
                <td>{{ $u->quantity}}</td>
                <td>{{ $u->starttime}}</td>
                <td>{{ $u->date}}</td>
                <td>{{ $u->status }}</td>
                
                <td>
                    <a href="{{url('statusdirectorder',$u->id)}}" class="btn btn-block btn-info btn-flat">status</a>
                    <a href="{{url('deletedirectorder',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>
