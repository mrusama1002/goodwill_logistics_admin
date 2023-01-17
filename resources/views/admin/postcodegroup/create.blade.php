@extends('admin.layouts.master')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        <form
                            action="{{route('postcode-group.store')}}"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label for="postcodegroup">Post Code Group</label>
                                <textarea id="postcodegroup" name="postcodegroup" class="form-control"></textarea>
                                <p>Insert by comma seprated</p>
                                @error('postcodegroup')
                                <span class="text-danger">{{$message}}</span>
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
                        2019 - 2023 &copy; Adminto theme by <a href="">Coderthemes</a>
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



