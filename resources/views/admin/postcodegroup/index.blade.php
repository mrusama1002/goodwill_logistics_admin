@extends('admin.layouts.master')

@section('content')


    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid ">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="mt-0 header-title"><h1> Zones List</h1></h4>


                            <a href="{{route('postcode-group.create')}}" class="btn btn-primary mb-2">Add Zones</a>

                            <div class="table-responsive">
                                <table id="postTable" class="table table-stripe table-light mb-0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Zones</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($postcodesgroup as $postcodesgroup)
                                        <tr>
                                            <td>{{ $postcodesgroup->group_id }}</td>
                                            <td>{{ $postcodesgroup->group_name }}</td>
                                            <td><a href="{{route('postcode-group.edit',$postcodesgroup->group_id)}}"><i class="fa fa-pencil-alt mr-2"></i></a>
                                                <form action="{{route('postcode-group.destroy', $postcodesgroup->group_id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-transparent border-0" type="submit" onclick="return confirm('Are you sure To Delete?')"><i class="fa fa-trash-alt text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!--- end row -->

            </div>

            <!-- container-fluid -->

        </div>
        <!-- content -->

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
    <script>
        $('.delete').on('click', function () {
            var shouldDelete = confirm('Are you sure?');
            if (!shouldDelete)
                return false;
            var route = $(this).data('route');

            var tr = $(this).closest('tr');
            var data = {
                _method: "DELETE",
                _token: '{{csrf_token()}}'
            };

            $.ajax({
                type: 'POST',
                url: route,
                data,
                success: function (response) {
                    toastr.success(response);
                    tr.remove();
                    location.reload();
                }
            });
        })
    </script>
<script>
   $(document).ready( function () {
   $('#postTable').DataTable();
   } );
</script>
@endpush
