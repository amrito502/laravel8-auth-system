@extends('dashboard.admin.admin_master')
@section('admin_content')

<html lang="en">

<head>
    <meta charset="UTF-8">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" integrity="sha512-X6069m1NoT+wlVHgkxeWv/W7YzlrJeUhobSzk4J09CWxlplhUzJbiJVvS9mX1GGVYf5LA3N9yQW5Tgnu9P4C7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .label-info{
            color: rgb(12, 220, 96)!important;
        }
        .input_tag_cus{

        }
    </style>
</head>

<body>


    <div class="col-lg-10 grid-margin stretch-card">

        <div class="card">

            <div class="card-body">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="card-title dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Add Hero Content</h6>
                    <a href="{{ route('admin.hero') }}" class="btn btn-success dm-sans"><i data-feather="eye"></i> All Hero Data</a>
                </div>


                <form class="mt-4" action="{{ route('admin.store.hero') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" id="name" type="text"
                                placeholder="Write Name..">
                            <span class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="title" class="col-form-label">Hero Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="title" id="title" type="text"
                                placeholder="Write Title..">
                            <span class="text-danger">
                                @error('title')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="image" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="image" id="image" type="file">
                            <span class="text-danger">
                                @error('image')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="description" class="col-form-label">Hero Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="description" id="description" rows="8"
                                placeholder="Write Hero Description.."></textarea>
                            <span class="text-danger">
                                @error('description')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="seo my-2">
                        <hr>
                        <h4>SEO Tag</h4>
                        <hr class="mb-2">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="meta_title" class="col-form-label">Meta Title</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="meta_title" id="meta_title" type="text"
                                    placeholder="Write Meta Title..">
                                <span class="text-danger">
                                    @error('meta_title')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="meta_description" class="col-form-label">Meta Description</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="meta_description" id="meta_description" rows="8"
                                    placeholder="Write Meta description.."></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="mete_keyword" class="col-form-label">Meta Keyword</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input_tag_cus" name="mete_keyword" id="tags" placeholder="Write Tag And Press Tab Not Enter.." data-role="tagsinput" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                style="cursor: pointer">
                            <label class="form-check-label" for="status">Status
                            </label>
                        </div>
                    </div>

                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <button class="btn btn-primary mx-4" type="submit"><i data-feather="plus"></i> Add Hero</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        $('#summernote').summernote({
          placeholder: 'Write Blog Long description..',
          tabsize: 2,
          height: 300,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
    </script>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

