@extends('admin.layouts.master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">

                    <div class="card-body">

                        <form
                            action="{{route('pallet.store')}}"
                            method="post"
                            id="posted"
                            enctype="multipart/">

                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Group
                                </label>
                                <div class="col-sm-10">
                                    <select name="group_id" class="form-control">
                                        @foreach($groups as $group)

                                            <option value="{{$group->group_id}}">
                                                {{$group->group_name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Service Type
                                </label>
                                <div class="col-sm-10">
                                    <select name="service_type_id" class="form-control">
                                        @foreach($Servicetypes as $Servicetype)

                                            <option
                                                value="{{$Servicetype->service_type_id}}">{{$Servicetype->service_name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Product
                                </label>
                                <div class="col-sm-10">
                                    <select name="product_id" class="form-control">
                                        @foreach($products as $product)

                                            <option
                                                value="{{$product->product_id}}">{{$product->product_name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Quantity
                                </label>
                                <div class="col-sm-10">
                                   <input type="number" id="qty" name="qty" class="form-control" required="">
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Price
                                </label>
                                <div class="col-sm-10">
                                   <input type="text" id="price" name="price" class="form-control" required="">
                                </div>
                            </div>
                            
                            

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2016 - 2019 &copy; Adminto theme by
                        <a href="">Coderthemes</a>
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

<!-- <div class="card-body"> <form action="{{route('pallet.store')}}"
method="post" id="posted" enctype="multipart/"> @csrf <div class="form-group">
<label for="exampleInputEmail1">price</label> <input type="text" id="title"
name="title" class="form-control" required=""> </div> <div class="form-group">
<label for="exampleInputEmail1">Description</label> <textarea name="description"
class="form-control" required=""></textarea> </div> <button type="submit"
class="btn btn-primary">Submit</button> </form> </div> -->
