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
            <h1>EDIT DISCOUNT</h1>
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
    
          <form action="{{url('/updatediscount',$data->id)}}" method="post">

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
                <label for="title">Title</label>
                    <input type="text" class="form-control"  placeholder="title" name="title" value="@if (!empty($data)){{ $data->title }}@else{{ old('title') }}@endif" >
                  </div>
                 <div class="form-group">
                <label for="code">Code</label>
                    <input type="text" class="form-control"  placeholder="code" name="code" value="@if (!empty($data)){{ $data->code }}@else{{ old('code') }}@endif" >
                  </div>
              <div class="form-group">
               <label for="time">Time</label>
                    <input type="text" class="form-control"  placeholder="time" name="time" value="@if (!empty($data)){{ $data->time }}@else{{ old('time') }}@endif" >
                  </div>

                   <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text" class="form-control"  placeholder="discount" name="discount" value="@if (!empty($data)){{ $data->discount }}@else{{ old('discount') }}@endif" >
                  </div>
                  <div class="form-group">
                    <label for="discount_type">Select status</label>
                    <select name="discount_type" class="form-control" value="@if (!empty($data)){{ $data->discount_type }}@else{{ old('discount_type') }}@endif">
            <option selected disabled >please select</option>
              <option>Rupees</option>          
               <option>percent</option>    
              
                </select>
                  </div>
                <div class="form-group">
                    <label for="limit">limit</label>
                    <input type="text" class="form-control"  placeholder="limit" name="limit" value="@if (!empty($data)){{ $data->limit }}@else{{ old('limit') }}@endif">
                  </div>
                  <div class="form-group">
                    <label for="image">Banner</label>
                    <input type="file"   name="image" id="photo" value="@if (!empty($data)){{ $data->image }}@else{{ old('image') }}@endif">
                     @if(!empty($data->image))
                    <img src="{{asset('images/icons/'.$data->image) }}" width="80" height="80"></td>
                                                        @endif
                  </div>
                  
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
