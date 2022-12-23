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
    
    
    
          <form action="{{url('/saveCorder')}}" method="post">

           @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        
                <div class="card-body">
                    <div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" class="form-control"  placeholder="user_id" name="user_id">
                  </div>
                  <div class="form-group">
                    <label for="categoryname">categoryname</label>
                    <input type="text" class="form-control"  placeholder="categoryname" name="categoryname">
                  </div> 
                   <div class="form-group">
                    <label for="subcategoryname">subcategoryname</label>
                    <input type="text" class="form-control"  placeholder="subcategoryname" name="subcategoryname">
                  </div> 
                    <div class="form-group">
                    <label for="item_name">Item Name</label>
                    <input type="text" class="form-control"  placeholder="item_name" name="item_name">
                  </div>
                  <div class="form-group">
                    <label for="quantities">Quantities</label>
                    <input type="text" class="form-control"  placeholder="quantities" name="quantities">
                  </div>
                   
                   <div class="form-group">
                    <label for="subtotal">subtotal</label>
                    <input type="text" class="form-control"  placeholder="subtotal" name="subtotal">
                  </div>
                   <div class="form-group">
                    <label for="charges">charges</label>
                    <input type="text" class="form-control"  placeholder="charges" name="charges">
                  </div>
                 
                 <div class="form-group">
                    <label for="delivary_type">delivary_type</label>
                    <input type="text" class="form-control"  placeholder="delivary_type" name="delivary_type">
                  </div>
                   <div class="form-group">
                    <label for="pickup_date">pickup_date</label>
                    <input type="date"  name="pickup_date">
                  </div>
             <div class="form-group">
                    <label for="coupen_code">coupen_code</label>
                    <input type="text" class="form-control"  placeholder="coupen_code" name="coupen_code">
                  </div>
                  <div class="form-group">
                    <label for="discount">discount</label>
                    <input type="text" class="form-control"  placeholder="discount" name="discount">
                  </div>
                   <div class="form-group">
                    <label for="total">total</label>
                    <input type="text" class="form-control"  placeholder="total" name="total">
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="status">status</label>-->
                  <!--  <input type="text" class="form-control"  placeholder="status" name="status">-->
                  <!--</div>-->
                  <div class="form-group">
                    <label for="picked_up">picked_up</label>
                    <input type="text" class="form-control"  placeholder="picked_up" name="picked_up">
                  </div>
                  <div class="form-group">
                    <label for="Reached_to_plant">Reached to plant</label>
                    <input type="text" class="form-control"  placeholder="Reached_to_plant" name="Reached_to_plant">
                  </div>
                  <div class="form-group">
                    <label for="Reached_to_workshop">Reached to workshop</label>
                    <input type="text" class="form-control"  placeholder="Reached_to_workshop" name="Reached_to_workshop">
                  </div>
                  <div class="form-group">
                    <label for="Ready_to_delivary">Ready to delivary</label>
                    <input type="text" class="form-control"  placeholder="Ready_to_delivary" name="Ready_to_delivary">
                  </div>
                   <div class="form-group">
                    <label for="delivered">delivary</label>
                    <input type="text" class="form-control"  placeholder="delivered" name="delivered">
                  </div>
 </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

