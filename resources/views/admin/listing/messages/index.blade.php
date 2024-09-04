@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Listing Messages</h6>
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
                        {{-- <div class="btn btn-pill btn-air btn-primary" data-bs-toggle="modal" data-bs-target="#add"> <i
                                data-feather="plus-square"></i>Create New
                        </div> --}}
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
                                    <th>Listing</th>
                                    <th>Provider</th>
                                    <th>User</th>
                                    <th>Message</th>
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

@section('scripts')
    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatables/datatable.custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            let table = $('#customTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.listings.messages') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'listing',
                        name: 'listing',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'providers',
                        name: 'providers',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'users',
                        name: 'users',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'message',
                        name: 'message',
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

            // Add
            $('#addForm').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '/admin/listing/category/add',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        $('#add').modal('hide');
                        if(response.success){
                            toastr.success(response.success);
                            $('#addForm')[0].reset();
                            $('#customTable').DataTable().ajax.reload();
                        }else{
                            toastr.error(response.error);
                        }

                    },error: function(error){
                        toastr.error("Error adding data");
                    }
                });
            });

            // Edit
            $('#customTable').on('click', '.edit-data', function(){
                var id = $(this).data('id');
                $.ajax({
                    url: '/admin/listing/category/'+id+'/details',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        // populate modal form with the data received
                        $('#editid').val(response.id);
                        $('#editname').val(response.name);
                        $('#editphoto').val(response.image);
                        $('#edit').modal('show');
                    },error: function(error){
                        toastr.error("Error fetching data");
                    }
                });
            });

            // Update
            $('#editForm').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '/admin/listing/category/update',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        $('#edit').modal('hide');
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
                    url: '/admin/listing/category/'+id+'/details',
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
                    url: '/admin/listing/category/delete',
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

            // Change status
            $('#customTable').on('click', '.toggle-status', function(){
                var dept_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/admin/listing/category/changeStatus",
                    data: {'id' : dept_id},
                    success: function(data){

                        if($.isEmptyObject(data.error)){
                            toastr.success(data.success);
                            $('#customTable').DataTable().ajax.reload();
                        }else{
                            toastr.error('Error updating data');
                            $('#customTable').DataTable().ajax.reload();
                        }
                    },error: function(error){
                        toastr.error("Error processing request");
                        $('#customTable').DataTable().ajax.reload();
                    }
                });
            });

        });
    </script>
@endsection
@endsection
