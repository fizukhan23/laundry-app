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
            <h1>EDIT ORDER</h1>
          </div> 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">create order Form</li>
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
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/updateorderlist',$data->id)}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
         @method('PUT')
                <div class="card-body">
                <!--  <div class="form-group">-->
                <!--    <label for="name">Name</label>-->
                <!--    <input type="text" class="form-control"  placeholder="name" name="name" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif" >-->
                <!--  </div>-->
               
                <!--  <div class="form-group">-->
                <!--    <label for="number">Number</label>-->
                <!--    <input type="text" class="form-control"  placeholder="number" name="number" value="@if (!empty($data)){{ $data->number }}@else{{ old('number') }}@endif" >-->
                <!--  </div>-->
                 
                <!--  <div class="form-group">-->
                <!--    <label for="address">Address</label>-->
                <!--    <input type="text" class="form-control"  placeholder="address" name="address" value="@if (!empty($data)){{ $data->address }}@else{{ old('address') }}@endif" >-->
                <!--  </div>-->
            
                <!--  <div class="form-group">-->
                <!--    <label for="quantity">Quantity</label>-->
                <!--    <input type="text" class="form-control"  placeholder="quantity" name="quantity" value="@if (!empty($data)){{ $data->quantity }}@else{{ old('quantity') }}@endif">-->
                <!--  </div>-->

                <!--  <div class="form-group">-->
                <!--    <label for="time">Time</label>-->
                <!--    <input type="text" class="form-control"  placeholder="time" name="time" value="@if (!empty($data)){{ $data->time }}@else{{ old('time') }}@endif">-->
                <!--  </div>-->

                <!--<div class="form-group">-->
                <!--    <label for="date">Date</label>-->
                <!--    <input type="text" class="form-control"  placeholder="date" name="date" value="@if (!empty($data)){{ $data->date }}@else{{ old('date') }}@endif">-->
                <!--  </div>-->
                  
                  <div class="form-group">
                    <label for="status">Select status</label>
                    <select name="status" class="form-control" value="@if (!empty($data)){{ $data->status }}@else{{ old('status') }}@endif" >
            <option selected disabled >please select</option>
              <option>Accept</option>          
               <option>Reject</option>    
               <option>Complete</option>   
                </select>
                  </div>
                 </div>
 <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
