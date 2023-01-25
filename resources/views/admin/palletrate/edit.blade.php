@extends('admin.layouts.master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @php
                $newDataArray = array();
                $groupId  = '';
            @endphp
            @foreach ($palletrate as $key => $palletrateData)
                    @php
                        $serviceId = $palletrateData->service_type_id;
                        $groupId = $palletrateData->group_id;
                        $quantity = $palletrateData->quantity;
                        $productId = $palletrateData->product_id;
                        

                        $newDataArray[$serviceId.'_'.$groupId.'_'.$quantity.'_'.$productId] = $palletrateData->price
                    @endphp
                        
            @endforeach
                <div class="row">

                    <div class="card-body">

                         <form
                            action="{{route('pallet.update',$groupId)}}"
                            method="POST"
                            id="posted"
                            enctype="multipart/">
                            @method('put')
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Zones
                                </label>
                                
                                <div class="col-sm-10">
                                    <select name="group_id" id="zone" class="form-control">
                                        @foreach($groups as $group)
                                            <option value="{{$group->group_id}}" {{$group->group_id == $groupId  ? 'Selected' : ''}}>
                                                {{$group->group_name}}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Service Type
                                </label>
                                <div class="col-sm-10">
                                    <select name="service_type_id" class="form-control">
                                        @foreach($Servicetypes as $Servicetype)

                                            <option
                                                value="{{$Servicetype->service_type_id}}" {{$Servicetype->service_type_id == $palletrate->service_type_id  ? 'Selected' : ''}}>{{$Servicetype->service_name}}
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
                                                value="{{$product->product_id}}" {{$product->product_id == $palletrate->product_id ? 'Selected' : ''}}>{{$product->product_name}}
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
                                   <input type="number" id="qty" value="{{$palletrate->quantity}}" name="qty" class="form-control" required="">
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">
                                    Price
                                </label>
                                <div class="col-sm-10">
                                   <input type="text" id="price" value="{{$palletrate->price}}" name="price" class="form-control" required="">
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsives mt-2">
                                    <table class="text-center table table-striped table-bordered table-sm" cellspacing="0"
                                    width="100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Column1</th>
                                                <th>Mini</th>
                                                <th>Mini Urgent</th>
                                                <th>Quater</th>
                                                <th>Quater Urgent</th>
                                                <th>Half</th>
                                                <th>Half Urgent</th>
                                                <th>Light</th>
                                                <th>Light Urgent</th>
                                                <th>Full</th>
                                                <th>Full Urgent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @for($i = 1; $i <=10; $i++)
                                            <tr>
                                                <td style="max-width: 60px" ><input value="{{$i}}" type="hidden" name="qty[]">{{$i}}</td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['1_'.$groupId.'_'.$i.'_1']))?$newDataArray['1_'.$groupId.'_'.$i.'_1']:''?>" type="text" name="mini[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['2_'.$groupId.'_'.$i.'_1']))?$newDataArray['2_'.$groupId.'_'.$i.'_1']:''?>" type="text" name="mini_ur[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['1_'.$groupId.'_'.$i.'_2']))?$newDataArray['1_'.$groupId.'_'.$i.'_2']:''?>" type="text" name="quater[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['2_'.$groupId.'_'.$i.'_2']))?$newDataArray['2_'.$groupId.'_'.$i.'_2']:''?>" type="text" name="quater_ur[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['1_'.$groupId.'_'.$i.'_3']))?$newDataArray['1_'.$groupId.'_'.$i.'_3']:''?>" type="text" name="half[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['2_'.$groupId.'_'.$i.'_3']))?$newDataArray['2_'.$groupId.'_'.$i.'_3']:''?>" type="text" name="half_ur[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['1_'.$groupId.'_'.$i.'_4']))?$newDataArray['1_'.$groupId.'_'.$i.'_4']:''?>" type="text" name="light[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['2_'.$groupId.'_'.$i.'_4']))?$newDataArray['2_'.$groupId.'_'.$i.'_4']:''?>" type="text" name="light_ur[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['1_'.$groupId.'_'.$i.'_5']))?$newDataArray['1_'.$groupId.'_'.$i.'_5']:''?>" type="text" name="full[]"></td>
                                                <td><input  style="max-width: 60px" value="<?=(!empty($newDataArray['2_'.$groupId.'_'.$i.'_5']))?$newDataArray['2_'.$groupId.'_'.$i.'_5']:''?>" type="text" name="full_ur[]"></td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
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
@push('scripts')
<script>
    $('#zone').change(function() {
        location.href = '/admin/pallet/'+ $(this).val()+'/edit';
    })
</script>
@endpush
<!-- <div class="card-body"> <form action="{{route('pallet.store')}}"
method="post" id="posted" enctype="multipart/"> @csrf <div class="form-group">
<label for="exampleInputEmail1">price</label> <input type="text" id="title"
name="title" class="form-control" required=""> </div> <div class="form-group">
<label for="exampleInputEmail1">Description</label> <textarea name="description"
class="form-control" required=""></textarea> </div> <button type="submit"
class="btn btn-primary">Submit</button> </form> </div> -->
