<x-dashboard.dashboard-master>
    @section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Manage post</h5>
            </div>
            <div class="card-body">
                @if(session()->has('event-deleted'))
                <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        {{session('event-deleted')}}
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
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Event Date</th>
                            <th>Date Created</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($event as $events)

                        <tr>
                            <td>{{$events->id}}</td>
                            <td><img src="{{$events->flyer ? $events->flyer : 'avatar.png'}}" height="50px" alt=""></td>
                            <td><a href="{{route('dashboard.edit-event', $events->id)}}">{{Str::limit($events->title, '20', '...')}}</a></td>
                            <td>{{$events->venue}}</td>
                            <td>{{$events->event_date}}</td>
                            <td>{{$events->created_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{route('dashboard.event.destroy', $events->id)}}" method="post">
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
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Event Date</th>
                            <th>Date Created</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>

