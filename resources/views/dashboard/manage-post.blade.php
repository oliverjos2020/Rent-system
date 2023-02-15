<x-dashboard.dashboard-master>
    @section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Manage post</h5>
            </div>
            <div class="card-body">
                @if(session()->has('post-deleted'))
                <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        {{session('post-deleted')}}
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                <table id="datatables-basic" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Owner</th>
                            <th>Title</th>
                            <th>Featured</th>
                            <th>Category</th>
                            <th>Date Created</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $properties)

                        <tr>
                            <td>{{$properties->id}}</td>
                            <td><img src="{{$properties->featured_image ? $properties->featured_image : 'avatar.png'}}" height="50px" alt=""></td>
                            <td>{{$properties->user->name}}</td>
                            <td><a href="{{route('dashboard.edit-post', $properties->id)}}">{{Str::limit($properties->title, '20', '...')}}</a></td>
                            <td>{{$properties->featured==1 ? 'Yes' : 'No'}}</td>
                            <td>{{$properties->category->name}}</td>
                            <td>{{$properties->created_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{route('dashboard.post.destroy', $properties->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Owner</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Category</th>
                            <th>Date Created</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>

