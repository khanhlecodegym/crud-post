@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('layouts.partials.topbar')

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">List Posts</h1>
            <p class="mb-4">Quản Lý Các Bài Post</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Posts</h6>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Thêm Bài Viết</a>
              </div>
              <div class="card-body">
                  @if (count($posts) < 1)
                      <p>Không tồn tại bài viết nào</p>
                  @else
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Tags</th>
                          <th>Image</th>
                          <th>User Created</th>
                          <th rowspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach ($post->tags as $item)
                                    {{ $item->title }} <br>
                                @endforeach
                            </td>
                            <td><img src="{{ $post->image }}" alt="" srcset="" width="200" height="100"></td>
                            <td>{{ $post->user->name }}</td>
                            <td><a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-primary">Detail</a></td>
                            <td>
                                <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
                @endif
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
@endsection
