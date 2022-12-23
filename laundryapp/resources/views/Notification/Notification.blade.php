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
              <li class="breadcrumb-item active">Notification Form</li>
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
    
          <form action="{{url('/saveNotification')}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="user_id">Select User</label>
                   <?php $users = DB::table('create')->get(); ?>
                    <select   placeholder="Users" name="user" class="form-control">
            <option selected disabled >please select</option>
            @foreach($users as $u)
              <option value="{{$u->device_token}}">{{$u->name}}</option>          
                  @endforeach
               </select>
                  </div>
                   <div class="form-group">
                    <label for="order_id">Order</label>
                     <?php $users1 = DB::table('detailsorder')->get(); ?>
                    <select   placeholder="Orders" name="order" class="form-control">
            <option selected disabled >please select</option>
            @foreach($users1 as $u1)
              <option value="{{$u1->id}}">{{$u1->id}}</option>          
                  @endforeach
               </select>
                  </div>
                   <div class="form-group">
                    <label for="message">message</label>
                <input type="text" class="form-control"  placeholder="message" name="body" list="message" />
       <datalist id="message">
           <option>picked_up </option>
                    <option>Reached_to_plant</option>
                     <option>Reached_to_workshop</option>
                       <option>Ready_to_delivary</option>
                         <option>delivered</option>
                            </datalist>   
         </div>                        
            
               </div>
                  
                 <!--   <input type="text" class="form-control"  placeholder="message" name="message">-->
                
                 <!--</div>-->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

