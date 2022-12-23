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
            <h1> EDIT ADVERTISMENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advertisment Form</li>
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
                <h3 class="card-title">Advertisment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    
          <form action="{{url('/updateads',$data->id)}}" method="post">  

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
                <label for="code">Image</label>
                    <input type="file" name="image" id="photo" value="@if (!empty($data)){{ $data->image }}@else{{ old('image') }}@endif">
                     @if(!empty($data->image))
                    <img src="{{asset('images/ads/'.$data->image) }}" width="80" height="80"></td>
                                                        @endif
                  </div>
              <div class="form-group">
               <label for="time">status</label>
                    <input type="text" class="form-control"  placeholder="text" name="status" value="@if (!empty($data)){{ $data->status }}@else{{ old('status') }}@endif">
                  </div>
                 </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                 
           
                 
                 
                 
                 
                 
                 
                 
                 
                