{{-- Add Modal --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="editid" id="editid">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <label for="editname">Category Name <span class="text-danger">*</span></label>
                            <input type="text" name="editname" id="editname" class="form-control" required>
                        </div>

                        <div class="col-lg-12 mb-2">
                            <label for="photo">Upload Icon</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                            <input type="hidden" name="editphoto" id="editphoto" class="form-control">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
