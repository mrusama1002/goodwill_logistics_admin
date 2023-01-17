@extends('admin.layouts.master')

@section('content')


    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid ">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card-box">
                            <h4 class="mt-0 header-title"><h1>Customers List</h1></h4>

                            <div class="table-responsive">
                                <table id="postTable" class="table table-stripe table-light mb-0">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->FirstName }}</td>
                                            <td>{{ $customer->LastName }}</td>
                                            <td>{{ $customer->Email }}</td>
                                            <td>{{ $customer->PhoneNumber }}</td>
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


