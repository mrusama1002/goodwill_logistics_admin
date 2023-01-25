@extends('admin.layouts.master')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        @if (\Session::has('message'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{!! \Session::get('message') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <form
                            action="{{route('postcode.store')}}"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label for="postcode">Post Code</label>
                                <textarea id="postcode" name="postcode" class="form-control"></textarea>
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p>Insert by line break</p>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2  col-form-label">
                                    Zones
                                </label>
                                <select name="group" id="group" class="form-control">
                                    <option value>Select zones</option>
                                    @foreach($postCodeGroupList as $postCodeGroup)
                                        <option
                                            value="{{ $postCodeGroup->group_id }}">{{ $postCodeGroup->group_name }}</option>
                                    @endforeach
                                </select>
                                @error('group')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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



<!-- <div class="card-body">


      <form action="{{route('pallet.store')}}" method="post" id="posted" enctype="multipart/">

                                    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">price</label>
      <input type="text" id="title" name="title" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea name="description" class="form-control" required=""></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



