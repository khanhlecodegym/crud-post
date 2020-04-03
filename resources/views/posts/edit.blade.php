@extends('layouts.admin')

@push('select2-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="container">
<h3>Create Post</h3>
<form action="{{ route('posts.update', ['post' => $post]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Input Title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" placeholder="Input Content" cols="30" rows="10" id="content-ckeditor">{!! $post->content !!}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image Post</label>
        <input type="file" name="image_post" class="form-control" id="imgPost">
        <img id="image_post" src="{{ $post->image }}" alt="" srcset="" width="200" height="200">
    </div>
    <div class="form-group">
        <label for="image">Tags</label>
        <select name="tag[]" multiple class="form-control" id="tags">
            @foreach ($tags as $key => $tag)
                    <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->title }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
</div>


@endsection

@push('ckeditor-js')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content-ckeditor');

    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $('#image_post').attr('src', e.target.result)
            }

            reader.readAsDataURL(input.files[0]);
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
