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
            <h1>CREATE ORDER</h1>
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
    
          <form action="{{url('/updatedirectorder',$data->id)}}" method="post">

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
                    <label for="user_id">User id</label>
                    <input type="text" class="form-control"  placeholder="user_id" name="user_id" value="@if (!empty($data)){{ $data->user_id }}@else{{ old('user_id') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="endtime">End Time</label>
                    <input type="text" class="form-control"  placeholder="endtime" name="endtime" value="@if (!empty($data)){{ $data->endtime }}@else{{ old('endtime') }}@endif" readonly> 
                  </div>
                  <div class="form-group">
                    <label for="subtotal">Quantity</label>
                    <input type="text" class="form-control"  placeholder="subtotal" name="subtotal" value="@if (!empty($data)){{ $data->subtotal }}@else{{ old('subtotal') }}@endif" readonly>
                  </div>
                 <div class="form-group">
                    <label for="starttime">start Time</label>
                    <input type="text" class="form-control"  placeholder="starttime" name="starttime" value="@if (!empty($data)){{ $data->starttime }}@else{{ old('starttime') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="date">date</label>
                    <input type="text" class="form-control"  placeholder="date" name="date" value="@if (!empty($data)){{ $data->date }}@else{{ old('date') }}@endif" readonly>
                  </div>
                 <div class="form-group">
                    <label for="status">Select status</label>
                    <select name="status" class="form-control">
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
           
            
