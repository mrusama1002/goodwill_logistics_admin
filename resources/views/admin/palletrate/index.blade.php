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
                            <h4 class="mt-0 header-title"><h1>Pallet Price List</h1></h4>
                            <p class="text-muted font-14 mb-3">
                                Your awesome text goes here.Your awesome text goes here.
                            </p>
                            <a href="{{ route('pallet.create') }}" class="btn btn-primary float-right mb-3">Add Price</a>

                            <div class="table-responsive">
                                <table id="palletRateTable" class="table table-stripe table-light mb-0">
                                    <thead>
                                    <tr>

                                        <th>Group</th>
                                        <th>Last Modified</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($palletrates as  $palletrate)
                                        <tr>
                                            <td class="text-black pl-3">
                                                {{@$palletrate->group_name}}
                                            </td>

                                            <td class="text-black pl-3">
                                                {{date('d-m-Y',strtotime($palletrate->palletrates->updated_date))}}
                                            </td>
                                            <td class="text-black pl-3">
                                <a href="{{route('pallet.edit',$palletrate->group_id)}}"><i class="fa fa-edit"></i></a>
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
   $(document).ready( function () {
   $('#palletRateTable').DataTable();
   } );
</script>
@endpush


