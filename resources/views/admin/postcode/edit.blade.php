@extends('admin.layouts.master')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        <form
                            action="{{route('postcode.update', $postCodeGroupList->group_id)}}"
                            method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="col-sm-2  col-form-label">
                                    Zones
                                </label>
                                <input type="hidden" value="{{$postCodeGroupList->group_id}}" name="group" id="group">
                                <input type="text" class="form-control" name="groupname" id="groupname" value="{{$postCodeGroupList->group_name}}" readonly>
                                @error('group')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @php
                                $postcodeArray = array();
                                foreach($postCodeGroupList->postcodes as $postCode){
                                array_push($postcodeArray,$postCode->post_code);
                            } 
                            @endphp
                            <div class="form-group text-left">
                                <label for="postcode">Post Codes</label>
                                @foreach($postCodeGroupList->postcodes as $postCode)
                                <div class="align-items-center d-flex mb-2">
                                    <input type="hidden" name="postcodeID[]" value="{{$postCode->id}}">
                                    <input type="text" class="form-control" name="postcode[]"  value="{{$postCode->post_code}}">
                                    <a onclick="return confirm('Are you sure?')" href="{{route('postcodes.delete',$postCode->id)}}" class="d-block h-100 ml-1"><span class="mdi mdi-delete text-danger font-24"></span></a>
                                </div> 
                                @endforeach
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p>Insert by line break</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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
                        2019 - 2023 &copy; Adminto theme by
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
