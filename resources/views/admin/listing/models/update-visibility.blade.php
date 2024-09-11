{{-- Add Modal --}}
<div class="modal fade" id="editVisibility" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Visibility</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editVisibilityForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="editvisibilityid" id="editvisibilityid">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <label for="visibility">Visibility <span class="text-danger">*</span></label>
                            <select name="visibility" id="visibility" class="form-control" required>
                                <option value="1">Visible</option>
                                <option value="0">Hidden</option>
                            </select>
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
