<x-dashboard.dashboard-master>
    @section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Users</h5>
            </div>
            <div class="card-body">
                @if(session()->has('user-deleted'))
                <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        {{session('user-deleted')}}
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Registered date</th>
                            <th>Updated Profile Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $users)
                            
                        <tr>
                            <td><img alt="{{$users->name}}" src="{{$users->avatar}}" class="rounded-circle img-responsive mt-2" height="30px" /></td>
                            <td><a href="{{route('dashboard.profile', $users->id)}}">{{$users->name}}</a></td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->created_at->diffForHumans()}}</td>
                            <td>{{$users->updated_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{route('dashboard.destroy', $users->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Registered date</th>
                            <th>Updated Profile Date</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>
    
    