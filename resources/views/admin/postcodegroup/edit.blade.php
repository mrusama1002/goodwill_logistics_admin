@extends('admin.layouts.master')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        <form
                            action="{{route('postcode-group.update', $postCodeGroup->group_id)}}"
                            method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="postcodegroup">Zones</label>
                                <input id="postcodegroup" name="postcodegroup" class="form-control" value="{{ $postCodeGroup->group_name }}">
                                @error('postcodegroup')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p>Insert by comma seprated</p>
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
