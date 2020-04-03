@extends('layouts.admin')

@push('select2-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('layouts.partials.topbar')

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <h3>Create Post</h3>
    <form action="{{ action('PostController@store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Input Title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" placeholder="Input Content" cols="30" rows="10" id="content-ckeditor"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image Post</label>
            <input id="imgPost" type="file" name="image_post" class="form-control" onchange="readURL(event)" >
            <img id="image_post" src="#" alt="" srcset="" width="200" height="200">
        </div>
        <div class="form-group">
            <label for="image">Tags</label>
            <select name="tag[]" multiple class="form-control" id="tags">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Create" class="btn btn-primary">

    </form>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
@endsection

@push('ckeditor-js')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content-ckeditor');
        function readURL(event) {
            if (event.target.files && event.target.files[0]) {
                let reader = new FileReader();

                reader.onload = function () {
                    let output = document.getElementById('image_post');
                    output.src = reader.result;
                }

                reader.readAsDataURL(event.target.files[0]);
            }
        }

        $("#imgPost").change(function() {
            readURL(this);
        });
    </script>
@endpush

@push('select2-js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() { $("#tags").select2({
            placeholder: "Select tags"
        }); });
    </script>
@endpush
