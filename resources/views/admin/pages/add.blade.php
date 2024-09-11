@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Add Pages</h6>
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
                        <a href="{{ route('admin.pages') }}" class="btn btn-pill btn-air btn-primary"> <i
                                data-feather="plus-square"></i>View List
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form id="pageForm" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="slug">Slug <span class="text-primary">(Auto-Generated)</span></label>
                                    <input type="text" name="slug" id="slug" class="form-control" @disabled(true)>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="meta_title">Meta Title <span class="text-primary">(Auto-Generated)</span></label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" @disabled(true)>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="meta_keywords">Meta Keywords <span class="text-danger">*</span></label>
                                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" required>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="meta_description">Meta Description <span class="text-danger">*</span></label>
                                    <textarea name="meta_description" id="meta_description" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label>Page Content <span class="text-danger">*</span></label>
                                    <textarea name="meta_description" id="editor" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
        selector: "#editor",
        plugins:
            "a11ychecker advcode advlist advtable anchor autocorrect autosave editimage image link linkchecker lists media mediaembed pageembed powerpaste searchreplace table template tinymcespellchecker typography visualblocks wordcount",
        toolbar:
            "undo redo | styles | bold italic underline strikethrough | align | table link image media pageembed | bullist numlist outdent indent | spellcheckdialog a11ycheck typography code",
        height: 540,
        a11ychecker_level: "aaa",
        typography_langs: ["en-US"],
        typography_default_lang: "en-US",
        advcode_inline: true,
        content_style: `
                body {
                font-family: 'Roboto', sans-serif;
                color: #222;
                }
                img {
                height: auto;
                margin: auto;
                padding: 10px;
                display: block;
                }
                img.medium {
                max-width: 25%;
                }
                a {
                color: #116B59;
                }
                .related-content {
                padding: 0 10px;
                margin: 0 0 15px 15px;
                background: #eee;
                width: 200px;
                float: right;
                }
            `,
        });
    </script>
    <script>
        $('#pageForm').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '/admin/pages/save',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response.success){
                        toastr.success(response.success);
                        $('#pageForm')[0].reset();
                    }else{
                        toastr.error(response.error);
                    }

                },error: function(error){
                    toastr.error("Error adding data");
                }
            });
        });
    </script>
@endsection
@endsection
