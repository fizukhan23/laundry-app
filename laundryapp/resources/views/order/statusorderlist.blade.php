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
                     <div class="form-group">
                    <label for="pickup_date">Pickup Date</label>
                    <input type="text" class="form-control"  placeholder="pickup_date" name="pickup_date" value="@if (!empty($data)){{ $data->pickup_date }}@else{{ old('pickup_date') }}@endif" readonly>
                  </div>
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  placeholder="user" name="user" value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="user_id">User id</label>
                    <input type="text" class="form-control"  placeholder="user_id" name="user_id" value="@if (!empty($data)){{ $data->user_id }}@else{{ old('user_id') }}@endif" readonly>
                  </div>
                      <div class="form-group">
                    <label for="id">Order id</label>
                    <input type="text" class="form-control"  placeholder="id" name="id" value="@if (!empty($data)){{ $data->id }}@else{{ old('id') }}@endif" readonly>
                  </div>
                    
                   <div class="form-group">
                    <label for="categoryname">categoryname</label>
                    <input type="text" class="form-control"  placeholder="categoryname" name="categoryname" value="@if (!empty($data)){{ $data->categoryname }}@else{{ old('categoryname') }}@endif" readonly>
                  </div>
                    <div class="form-group">
                    <label for="subcategoryname">subcategory ID</label>
                    <input type="text" class="form-control"  placeholder="subcategoryname" name="subcategoryname" value="@if (!empty($data)){{ $data->subcategoryname }}@else{{ old('subcategoryname') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="item_name">Item name</label>
                    <input type="text" class="form-control"  placeholder="item_name" name="item_name" value="@if (!empty($data)){{ $data->item_name }}@else{{ old('item_name') }}@endif" readonly>
                  </div>
               
                  <div class="form-group">
                    <label for="quantities">Quantities</label>
                    <input type="text" class="form-control"  placeholder="quantities" name="quantities" value="@if (!empty($data)){{ $data->quantities }}@else{{ old('quantities') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="subtotal">subtotal</label>
                    <input type="text" class="form-control"  placeholder="subtotal" name="subtotal" value="@if (!empty($data)){{ $data->subtotal }}@else{{ old('subtotal') }}@endif" readonly>
                  </div>

                  <div class="form-group">
                    <label for="charges">Charges</label>
                    <input type="text" class="form-control"  placeholder="charges" name="charges" value="@if (!empty($data)){{ $data->charges }}@else{{ old('charges') }}@endif" readonly> 
                  </div>

                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control"  placeholder="total" name="total" value="@if (!empty($data)){{ $data->total }}@else{{ old('total') }}@endif" readonly>
                  </div>
                     <div class="form-group">
                    <label for="delivary_type">Delivary Type</label>
                    <input type="text" class="form-control"  placeholder="delivary_type" name="delivary_type" value="@if (!empty($data)){{ $data->delivary_type }}@else{{ old('delivary_type') }}@endif" readonly>
                  </div>
                
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  placeholder="address" name="address" value="@if (!empty($data)){{ $data->address }}@else{{ old('address') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="coupen_code">Coupen Code</label>
                    <input type="text" class="form-control"  placeholder="coupen_code" name="coupen_code" value="@if (!empty($data)){{ $data->coupen_code }}@else{{ old('coupen_code') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text" class="form-control"  placeholder="discount" name="discount" value="@if (!empty($data)){{ $data->discount }}@else{{ old('discount') }}@endif" readonly>
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
                   <div class="form-group">
                    <label for="orderd_by">orderd_by</label>
                    <input type="text" class="form-control"  placeholder="orderd_by" name="orderd_by" value="@if (!empty($data)){{ $data->orderd_by }}@else{{ old('orderd_by') }}@endif" readonly>
                  </div>
                   <div class="form-group">
                    <label for="picked_up">picked_up</label>
                    <input type="text" class="form-control"  placeholder="picked_up" name="picked_up" value="@if (!empty($data)){{ $data->picked_up }}@else{{ old('picked_up') }}@endif" readonly>
                  </div>
                   <div class="form-group">
                    <label for="Reached_to_plant">Reached to plant</label>
                    <input type="text" class="form-control"  placeholder="Reached_to_plant" name="Reached_to_plant" value="@if (!empty($data)){{ $data->Reached_to_plant }}@else{{ old('Reached_to_plant') }}@endif" readonly>
                  </div>
                   <div class="form-group">
                    <label for="Reached_to_workshop">Reached to workshop</label>
                    <input type="text" class="form-control"  placeholder="Reached_to_workshop" name="Reached_to_workshop" value="@if (!empty($data)){{ $data->Reached_to_workshop }}@else{{ old('Reached_to_workshop') }}@endif" readonly>
                  </div>
                   <div class="form-group">
                    <label for="Ready_to_delivary">Ready to delivary</label>
                    <input type="text" class="form-control"  placeholder="Ready_to_delivary" name="Ready_to_delivary" value="@if (!empty($data)){{ $data->Ready_to_delivary }}@else{{ old('Ready_to_delivary') }}@endif" readonly>
                  </div>
                  <div class="form-group">
                    <label for="delivered">delivered</label>
                    <input type="text" class="form-control"  placeholder="delivered" name="delivered" value="@if (!empty($data)){{ $data->delivered }}@else{{ old('delivered') }}@endif" readonly>
                  </div>
                 </div>
 <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
