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
            <h1>NOTIFICATION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Edit Notification Form</li>
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
                <h3 class="card-title">Notification</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/updateNotification',$data->id)}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        @Method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="user_id">User Id</label>
                    <input type="text" class="form-control"  placeholder="user_id" name="user_id"  value="@if (!empty($data)){{ $data->user_id }}@else{{ old('user_id') }}@endif">
                  </div>
                   <div class="form-group">
                    <label for="order_id">order Id</label>
                    <input type="text" class="form-control"  placeholder="order_id" name="order_id"  value="@if (!empty($data)){{ $data->order_id }}@else{{ old('order_id') }}@endif">
                  </div>
                  <div class="form-group">
                    <label for="message">message</label>
                <input type="text" class="form-control"  placeholder="message" name="message" list="message" /value="@if (!empty($data)){{ $data->message }}@else{{ old('message') }}@endif">
       <datalist id="message">
           <option> picked_up </option>
                    <option>Reached_to_plant</option>
                     <option>Reached_to_workshop</option>
                       <option>Ready_to_delivary</option>
                         <option>delivered</option>
                            </datalist>   
                
                          </div>    
                 </div>
                <!-- /.card-body -->
               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
