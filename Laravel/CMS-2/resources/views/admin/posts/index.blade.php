<x-admin-master>
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">All Posts</h1>
        @if (Session::has('success_message'))
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @elseif (Session::has('error_message'))
            <div class="alert alert-danger">{{ Session::get('error_message') }}</div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View Posts</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Owner</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Owner</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td><a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a></td>
                                    <td>
                                        <img src="{{ $post->post_image }}" height="40">
                                    </td>
                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                                    <td>
                                        @can('view', $post)
                                            <form action="{{ route('post.destroy', $post->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="mx-auto">
                {{$posts->links('pagination::bootstrap-4')}}
            </div>
        </div>

    @endsection

    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        {{-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
    @endsection
</x-admin-master>
