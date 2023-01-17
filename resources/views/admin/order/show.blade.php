@extends('admin.layouts.master')
@push('page-title')Order @endpush
@push('owncss')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid p-5">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card-box h-100 mb-0">
                            <div class="header text-center">
                                <h4 class="title">COLLECTION</h4>
                                <hr>
                            </div>
                            <h5>Collection From</h5>
                            <p>{{@$orderDetail->colFirstName}}</p>
                            <p>{{@$orderDetail->colAddress}}</p>
                            <p>{{@$orderDetail->colPhone}}</p>
                            <p>{{@$orderDetail->colCity}}</p>
                            <p>{{@$orderDetail->colCountry}}</p>
                            <h5>Collection Option</h5>
                            <p>{{@$orderDetail->coloption->collection_option_name}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card-box h-100 mb-0">
                            <div class="header text-center">
                                <h4 class="title">DELIVERY</h4>
                                <hr>
                            </div>
                            <h5>Delivery To</h5>
                            <p>{{@$orderDetail->deFirstName}}</p>
                            <p>{{@$orderDetail->deAddress}}</p>
                            <p>{{@$orderDetail->dePhone}}</p>
                            <h5>Delivery Option</h5>
                            <p>{{@$orderDetail->deloption->delivery_option_name}}</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card-box h-100 mb-0">
                            <div class="header text-center">
                                <h4 class="title">SHIPPING</h4>
                                <hr>
                            </div>
                            <h5>Shipping Detail</h5>
                            <div>
                                <p><strong>Shipping item:</strong>
                                    @foreach ($orderDetail->orderdetail as $item)
                                        <span>{{@$item->pallet}} Max lenght :{{@$item->max_lenght}}cm Max height :{{@$item->max_height}}cm Max width :{{@$item->max_width}}cm Max Weight :{{@$item->max_weight}}kg </span>
                                    @endforeach
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card-box h-100 mb-0">
                            <div class="header text-center">
                                <h4 class="title">SUMMARY</h4>
                                <hr>
                            </div>
                            <h5>Sub Total Detail</h5>
                            <p class="d-flex"><strong>SUB TOTAL</strong> : <span
                                    class="ml-auto">{{$orderDetail->productPrice}}</span></p>
                            <p class="d-flex"><strong>VAT</strong>: <span
                                    class="ml-auto">{{$orderDetail->vattax}}</span></p>
                            <p class="d-flex"><strong>TOTAL</strong> :<span
                                    class="ml-auto">{{$orderDetail->grandTotal}}</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card-box h-100 mb-0">
                            <div class="header text-center">
                                <h4 class="title">Transaction Detail</h4>
                                <hr>
                            </div>
                            <h5>Transaction Id</h5>
                            <p class="d-flex">{{$orderDetail->transaction->ReferenceId}}</p>
                            <h5>Status</h5>
                            <p class="d-flex">{{@$orderDetail->transaction->Status == 0 ? 'Unpaid':'paid'}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('admin.order-status-update') }}" class="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="order-notes">Order Notes</label>
                                <textarea name="orderNotes"
                                          class="form-control @error('orderNotes') 'is-invalid' @enderror"
                                          id="order-notes" cols="30"
                                          rows="10">@if ($orderDetail->orderNotes) {{  $orderDetail->orderNotes }} @endif</textarea>
                            </div>
                            @error('orderNotes')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="hidden" name="orderId" value="{{ $orderDetail->id }}">
                            <input type="hidden" name="authId" value="{{ auth()->id() }}">


                            <label for="deliveryStatus">Delivery Status</label>
                            <select name="deliveryStatus" id="deliveryStatus"
                                    class="form-control @error('deliveryStatus') 'is-invalid' @enderror">
                                <option value>Select Delivery Status</option>
                                <option
                                    value="prepared" @if ($orderDetail->deliveryStatus == 'prepared') {{ 'selected' }} @endif>
                                    Prepared
                                </option>
                                <option
                                    value="processing" @if ($orderDetail->deliveryStatus == 'processing') {{ 'selected' }} @endif>
                                    Processing
                                </option>
                                <option
                                    value="shipped" @if ($orderDetail->deliveryStatus == 'shipped') {{ 'selected' }} @endif>
                                    Shipped
                                </option>
                                <option
                                    value="delivered" @if ($orderDetail->deliveryStatus == 'delivered') {{ 'selected' }} @endif>
                                    Delivered
                                </option>
                            </select>
                            @error('deliveryStatus')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="bottom-0 btn btn-primary mt-2">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2023 @ Goodwill Logistics
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
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#orderTable').DataTable();
        });
    </script>
@endpush
