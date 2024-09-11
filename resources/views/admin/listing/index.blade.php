@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Listings</h6>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <svg class="stroke-icon">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 file-content">
                <div class="media float-end mb-3">
                    <div class="media-body text-end">
                        <a href="{{ route('admin.listings.add') }}" class="btn btn-pill btn-air btn-primary"> <i
                                data-feather="plus-square"></i>Create New
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="customTable" style="width:100%">
                                <thead>
                                    <th>#</th>
                                    <th>Provider</th>
                                    <th>Package</th>
                                    <th>Listing</th>
                                    <th>Category</th>
                                    <th>Visibility</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Update --}}
    @include('admin.listing.models.update-status')
    @include('admin.listing.models.update-visibility')
    {{-- Delete --}}
    @include('admin.listing.models.delete')

@section('scripts')
    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatables/datatable.custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            let table = $('#customTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.listings') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'provider',
                        name: 'provider',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'package',
                        name: 'package',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'listing',
                        name: 'listing',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'category',
                        name: 'category',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'visibility',
                        name: 'visibility',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'created',
                        name: 'created',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

            // Edit
            $('#customTable').on('click', '.update-visibility', function(){
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/listings/'+id+'/details',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        // populate modal form with the data received
                        $('#editvisibilityid').val(response.id);
                        $('#visibility').val(response.visibility);
                        $('#editVisibility').modal('show');
                    },error: function(error){
                        toastr.error("Error fetching data");
                    }
                });
            });

            $('#customTable').on('click', '.update-status', function(){
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/listings/'+id+'/details',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        // populate modal form with the data received
                        $('#editid').val(response.id);
                        $('#status').val(response.status);
                        $('#editStatus').modal('show');
                    },error: function(error){
                        toastr.error("Error fetching data");
                    }
                });
            });

            // Update
            $('#editVisibilityForm').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '/admin/listings/update-visibility',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        $('#editVisibility').modal('hide');
                        if(response.success){
                            toastr.success(response.success);
                        }else{
                            toastr.error(response.error);
                        }
                        $('#customTable').DataTable().ajax.reload();
                    },error: function(error){
                        toastr.error("Error processing request");
                        $('#customTable').DataTable().ajax.reload();
                    }
                });
            });

            $('#editStatusForm').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '/admin/listings/update-status',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        $('#editStatus').modal('hide');
                        if(response.success){
                            toastr.success(response.success);
                        }else{
                            toastr.error(response.error);
                        }
                        $('#customTable').DataTable().ajax.reload();
                    },error: function(error){
                        toastr.error("Error processing request");
                        $('#customTable').DataTable().ajax.reload();
                    }
                });
            });

            // Details
            $('#customTable').on('click', '.delete-data', function(){
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/listings/'+id+'/details',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        // populate modal form with the data received
                        $('#deleteId').val(response.id);
                        $('#delete').modal('show');
                    },error: function(error){
                        toastr.error("Error fetching data");
                    }
                });
            });

            // Remove
            $('#deleteForm').on('submit', function(e){
                e.preventDefault();
                var data = {
                    'id': $('#deleteId').val(),
                }
                $.ajax({
                    url: '/admin/listings/delete',
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(response){
                        $('#delete').modal('hide');
                        toastr.success(response.success);
                        $('#customTable').DataTable().ajax.reload();
                    },error: function(error){
                        toastr.error("Error processing request");
                    }
                });
            });

        });
    </script>
@endsection
@endsection
