@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Cancelled Providers</h6>
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
                        <a href="{{ route('admin.vendors.add') }}" class="btn btn-pill btn-air btn-primary"> <i
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
                                    <th>Photo</th>
                                    <th>Provider</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Verification</th>
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

@section('scripts')
    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatables/datatable.custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            let table = $('#customTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/vendors/cancelled') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'photo',
                        name: 'photo',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'email',
                        name: 'email',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'verified',
                        name: 'verified',
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

            // Change status
            $('#customTable').on('click', '.toggle-status', function(){
                var dept_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/admin/vendors/changeStatus",
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
