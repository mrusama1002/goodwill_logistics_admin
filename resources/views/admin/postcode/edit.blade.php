@extends('admin.layouts.master')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        <form
                            action="{{route('postcode.update', $postcode->id)}}"
                            method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="postcode">Post Code</label>
                                <input id="postcode" name="postcode" class="form-control" value="{{ $postcode->post_code }}">
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p>Insert by line break</p>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2  col-form-label">
                                    Group
                                </label>
                                <select name="group" id="group" class="form-control">
                                    <option value>Select Group</option>
                                    @foreach($postCodeGroupList as $postCodeGroup)
                                        <option
                                            value="{{ $postCodeGroup->group_id }}" {{ ( $postCodeGroup->group_id == $postcode->group_id) ? 'selected' : '' }}>{{ $postCodeGroup->group_name }}</option>
                                    @endforeach
                                </select>
                                @error('group')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
