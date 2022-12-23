@include('layout.header')

@include('layout.navbar')

@include('layout.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Order</h1>
          </div>
          <input id="myInput" type="text" placeholder="Search..">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Order</li>
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
    
         <div class="row">
          <!-- left column -->
          <div class="col-md-24">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">View order</h3>
              </div>
              <!-- /.card-header -->
               
                <table class="table table-bordered" id="myTable">
                <thead>
                    <th style="width: 10px">#</th>
                     <th>USER ID</th>
                     <th>PICK UPDATE</th>
                     <th>CATEGORYNAME</th>
                    <th>SUBCATEGORYNAME</th>
                   <th>ITEM NAME</th>
                   <th>NUMBER</th>
                    <th>QUANTITIES</th>
                     <th>SUBTOTAL</th>
                    <th>CHARGES</th>
                   <th>DELIVARY TYPE</th>
                    <th>ADDRESS</th>
                    <th>COUPEN CODE</th>
                    <th>DISCOUNT</th>
                     <th>TOTAL</th>
                     <th>PICKED UP</th>
                     <th>REACHED TO PLANT</th>
                     <th>REACHED TO WORKSHOP</th>
                     <th>READY TO DELIVARY</th>
                     <th>DELIVARY</th>
                    <!--<th>STATUS</th>-->
                    <th style="width: 40px">ACTION</th>
</thead>
<tbody>
    <?php $i = 0; ?>
        @foreach($detailsorder as $u)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $u->user_id }}</td>
                <td>{{ $u->pickup_date }}</td>
                <td>{{ $u->categoryname}}</td>
                <td>{{ $u->subcategoryname}}</td>
                <td>{{ $u->item_name }}</td>
                <td>{{ $u->number }}</td>
                <td>{{ $u->quantities }}</td>
                <td>{{ $u->subtotal }}</td>
                <td>{{ $u->charges }}</td>
                <td>{{ $u->delivary_type }}</td>
                <td>{{ $u->address }}</td>
                <td>{{ $u->coupen_code }}</td>
                <td>{{ $u->discount }}</td>
                <td>{{ $u->total }}</td>
                <td>{{ $u->picked_up }}</td>
                <td>{{ $u->Reached_to_plant }}</td>
                <td>{{ $u->Reached_to_workshop }}</td>
                <td>{{ $u->Ready_to_delivary }}</td>
                <td>{{ $u->delivered }}</td>
                <!--<td>{{ $u->status }}</td> -->
                
                <td>
                    <a href="{{url('editCorder',$u->id)}}" class="btn btn-block btn-primary btn-flat">Edit</a>
                    <a href="{{url('deleteCorder',$u->id)}}" class="btn btn-block btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php $i++; ?>
        @endforeach
</tbody>

</table>
