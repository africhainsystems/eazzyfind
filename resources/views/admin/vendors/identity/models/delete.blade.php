<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <ul class="modal-img">
                        <li> <img src="{{ asset('admin/images/gif/danger.gif') }}" alt="error"></li>
                    </ul>
                    <h4 class="text-center pb-2">Woow!! You're about to delete!</h4>
                    <p class="text-center">Please know that this action cannot be reserved.</p>
                    <form id="deleteForm">
                        @csrf
                        <input type="hidden" id="deleteId" name="deleteId">
                        <button class="btn btn-secondary d-flex m-auto" type="submit">Confirm Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
