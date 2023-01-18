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
                  @method('put')
                  @csrf
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="">Collection Date</label>
                           <input type="date" class="form-control" value="{{$orderUpdate->collection_date}}" name="collectionDate" id="">
                        </div>
                        <div class="form-group">
                           <label for="">ServiceType</label>
                           <select name="serviceType" id="serviceType" class="form-control">
                              @forelse ($serviceType as $serviceTypes)
                                  <option value="{{$serviceTypes->service_type_id}}" {{$serviceTypes->service_type_id == $orderUpdate->service_type_id ? 'selected': ''}}>{{$serviceTypes->service_name}}</option>
                              @empty
                                  
                              @endforelse
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="">Collect From</label>
                           <input type="text" value="{{$orderUpdate->collect_from}}" class="form-control" name="collectFrom" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Deliver To</label>
                           <input type="text" value="{{$orderUpdate->deliver_to}}" class="form-control" name="deliverTo" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Mini Qunatity</label>
                           <input type="text" value="{{$orderUpdate->miniQuantity}}" class="form-control" name="miniQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Quarter Quantity</label>
                           <input type="text" value="{{$orderUpdate->quarterQuantity}}" class="form-control" name="quarterQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Half Quantity</label>
                           <input type="text" value="{{$orderUpdate->halfQuantity}}"  class="form-control" name="halfQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Light Quantity</label>
                           <input type="text" value="{{$orderUpdate->lightQuantity}}"  class="form-control" name="lightQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Full Quantity</label>
                           <input type="text" value="{{$orderUpdate->fullQuantity}}"  class="form-control" name="fullQuantity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Option</label>
                           <select name="collectionOption" id="collectionOption" class="form-control">
                              @forelse ($collectionOption as $collectionOptions)
                                  <option value="{{$collectionOptions->collection_option_id}}" {{$collectionOptions->collection_option_id == $orderUpdate->collectionOption ? 'selected' : ''}}>{{$collectionOptions->collection_option_name}}</option>
                              @empty
                                  
                              @endforelse
                           </select>
                           
                        </div>
                        <div class="form-group">
                           <label for="">Delivery Option</label>
                           <select name="deliveryOption" id="deliveryOption" class="form-control">
                              @forelse ($deliveryOption as $deliveryOptions)
                                  <option value="{{$deliveryOptions->delivery_option_id}}" {{$deliveryOptions->delivery_option_id == $orderUpdate->deliveryOption ? 'selected' : ''}}>{{$deliveryOptions->delivery_option_name}}</option>
                              @empty
                                  
                              @endforelse
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="">Liability Cover</label>
                           <input type="text" value="{{$orderUpdate->liability_cover}}" class="form-control" name="liabilityCover" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Email</label>
                           <input type="email" value="{{$orderUpdate->email}}" class="form-control" name="email" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection First Name</label>
                           <input type="text" value="{{$orderUpdate->colFirstName}}" class="form-control" name="colFirstName" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Last Name</label>
                           <input type="text" value="{{$orderUpdate->colLastName}}" class="form-control" name="colLastName" id="">
                        </div>
                        <div class="form-group">
                           <label for="order-notes">Order Notes</label>
                           <textarea name="orderNotes"
                                     class="form-control @error('orderNotes') 'is-invalid' @enderror"
                                     id="order-notes" cols="30"
                                     rows="6">@if ($orderUpdate->orderNotes) {{  $orderUpdate->orderNotes }} @endif</textarea>
                       </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="">Collection Country Code</label>
                           <input type="text" value="{{$orderUpdate->colCountryCode}}" class="form-control" name="colCountryCode" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Phone</label>
                           <input type="text" value="{{$orderUpdate->colPhone}}" class="form-control" name="colPhone" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Company Name</label>
                           <input type="text" value="{{$orderUpdate->colCompanyName}}" class="form-control" name="colCompanyName" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Address</label>
                           <textarea name="colAddress" rows="5" class="form-control">{{$orderUpdate->colAddress}}</textarea>
                        </div>
                        <div class="form-group">
                           <label for="">Collection City</label>
                           <input type="text" value="{{$orderUpdate->colCity}}" class="form-control" name="colCity" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Collection Country</label>
                           <input type="text" value="{{$orderUpdate->colCountry}}" class="form-control" name="colCountry" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Delivery First Name</label>
                           <input type="text" value="{{$orderUpdate->deFirstName}}" class="form-control" name="deFirstName" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Delivery Last Name</label>
                           <input type="text" value="{{$orderUpdate->deLastName}}" class="form-control" name="deLastName" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Delivery Country Code</label>
                           <input type="text" value="{{$orderUpdate->deCountryCode}}" class="form-control" name="deCountryCode" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Delivery Phone</label>
                           <input type="text" value="{{$orderUpdate->dePhone}}" class="form-control" name="dePhone" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Delivery Address</label>
                           <textarea name="deAddress" rows="5" class="form-control">{{$orderUpdate->deAddress}}</textarea>
                        </div>
                        <div class="form-group">
                           <label for="">Product Price</label>
                           <input type="text" value="{{$orderUpdate->productPrice}}" class="form-control" name="productPrice" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Grand Total</label>
                           <input type="text" value="{{$orderUpdate->grandTotal}}" class="form-control" name="grandTotal" id="">
                        </div>
                        <div class="form-group">
                           <label for="">Vat Tax</label>
                           <input type="text" value="{{$orderUpdate->vattax}}" class="form-control" name="vattax" id="">
                        </div>
                       <div class="form-group">
                        <label for="deliveryStatus">Delivery Status</label>
                            <select name="deliveryStatus" id="deliveryStatus"
                                    class="form-control @error('deliveryStatus') 'is-invalid' @enderror">
                                <option value>Select Delivery Status</option>
                                <option
                                    value="prepared" @if ($orderUpdate->deliveryStatus == 'prepared') {{ 'selected' }} @endif>
                                    Prepared
                                </option>
                                <option
                                    value="processing" @if ($orderUpdate->deliveryStatus == 'processing') {{ 'selected' }} @endif>
                                    Processing
                                </option>
                                <option
                                    value="shipped" @if ($orderUpdate->deliveryStatus == 'shipped') {{ 'selected' }} @endif>
                                    Shipped
                                </option>
                                <option
                                    value="delivered" @if ($orderUpdate->deliveryStatus == 'delivered') {{ 'selected' }} @endif>
                                    Delivered
                                </option>
                            </select>
                            @error('deliveryStatus')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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