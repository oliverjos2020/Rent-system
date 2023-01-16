<x-dashboard.dashboard-master>
    @section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Manage Inspection</h5>
            </div>
            <div class="card-body">
                @if(session()->has('property-deleted'))
                <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
                    <div class="alert-icon">
                        <i class="far fa-fw fa-bell"></i>
                    </div>
                    <div class="alert-message">
                        {{session('property-deleted')}}
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                <table id="datatables-basic" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            
                            @if(auth()->user()->userHasRole('Admin'))
                            <th>User</th>
                            @else

                            @endif
                            
                            <th>Photo</th>
                            <th>Property</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Date Paid</th>
                            <th>Ref id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inspection as $inspections)
                        <tr>
                            
                            @if(auth()->user()->userHasRole('Admin'))
                            <td><a href="{{route('dashboard.profile', $inspections->user->id)}}">{{$inspections->user->name}}</a></td>
                            @else

                            @endif
                            
                            <td><img src="{{$inspections->property->featured_image}}" height="50px" alt="Ruachr"></td>
                            
                            <td><a href="{{route('home.single', $inspections->property->id)}}">{{Str::limit($inspections->property->title, '20', '...')}}</a></td>
                            <td>&#8358;{{ number_format($inspections->amount, 2, ',', '.') }}</td>
                            <td><span class="badge rounded-pill bg-primary">{{$inspections->payment==1 ? 'Yes' : 'No'}}</span></td>
                            <td>{{$inspections->created_at->diffForHumans()}}</td>
                            <td>{{$inspections->updated_at->diffForHumans()}}</td>
                            <td>
                                {{$inspections->reference_id}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            
                            @if(auth()->user()->userHasRole('Admin'))
                            <th>User</th>
                            @else

                            @endif
                            
                            <th>Photo</th>
                            <th>Property</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Date Paid</th>
                            <th>Ref id</th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>
    
    