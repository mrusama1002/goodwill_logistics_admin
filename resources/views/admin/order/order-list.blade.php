@extends('admin.layouts.master')
@push('page-title')Order @endpush
@section('content')
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card-box">
                  <div class="table-responsive">
                     <table id="orderTable" class="table">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Collection Date</th>
                              <th>Service Type</th>
                              <th>Collect From</th>
                              <th>Deliver To</th>
                              <th>First Name</th>
                              <th>Grand Total</th>
                              <th>Status</th>
                              <th>Create Date</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($ordersList as $order)
                           @php
                           $status =  @$order->transaction->Status == 0 ? 'badge badge-warning':'badge badge-success';
                           @endphp
                           <tr>
                              <td>{{$order->id}}</td>
                              <td>{{$order->collection_date ?? 'N/A'}}</td>
                              <td>{{@$order->serviceType->service_name ?? 'N/A'}}</td>
                              <td>{{$order->collect_from ?? 'N/A'}}</td>
                              <td>{{$order->deliver_to ?? 'N/A'}}</td>
                              <td>{{$order->colFirstName ?? 'N/A'}}</td>
                              <td>{{$order->grandTotal ?? 'N/A'}}</td>
                              <td><span class="{{$status}}">{{@$order->transaction->Status == 0 ? 'Unpaid':'paid'}}</span></td>
                              <td>{{$order->CreateDate}}</td>
                              <td><a href="{{route('orders.show',$order->id)}}"><i class="fa fa-eye"></i></a></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
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