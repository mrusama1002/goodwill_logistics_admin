@extends('admin.layouts.master')
@push('page-title')Order Update @endpush
@section('content')
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card-box">
                  <form action="{{route('orders.update',$orderUpdate->id)}}" method="post">
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="collectionDate" id="">
                        </div>
                        <div class="form-group">
                           <label for="">ServiceType</label>
                           <input type="text" class="form-control" name="serviceType" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collect From</label>
                           <input type="text" class="form-control" name="collectFrom" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Deliver To</label>
                           <input type="text" class="form-control" name="deliverTo" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Min Qunatity</label>
                           <input type="text" class="form-control" name="minQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Quarter Quantity</label>
                           <input type="text" class="form-control" name="quarterQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Half Quantity</label>
                           <input type="text" class="form-control" name="halfQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Light Quantity</label>
                           <input type="text" class="form-control" name="lightQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>

                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="">ServiceType</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="form-group float-right">
                           <input type="submit" class="btn btn-warning mt-3" value="Update">
                        </div>
                     </div>
                  </div>
               </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer Start -->
   <footer class="footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               2016 - 2019 &copy; Adminto theme by <a href="">Coderthemes</a> 
            </div>
            <div class="col-md-6">
               <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="javascript:void(0);">About Us</a>
                  <a href="javascript:void(0);">Help</a>
                  <a href="javascript:void(0);">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end Footer -->
</div>
@endsection
@push('scripts')
<script>
   $(document).ready( function () {
   $('#orderTable').DataTable({order: [[0, "desc"]]});
   } );
</script>
@endpush