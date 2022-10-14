<x-dashboard.dashboard-master>
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Dashboard</h5>
        </div>
        <div class="card-body">
            @if(session()->has('exist'))

                                <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        {{session('exist')}}
                                        <a href="{{route('dashboard.biodata.edit', auth()->user())}}" class="btn btn-outline-info">View Biodata</a>
                                    </div>
                                    
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @else
                                <div class="alert alert-info alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        {{session('not-exist')}}
                                        <a href="{{route('dashboard.biodata', auth()->user())}}" class="btn btn-outline-info">Complete Biodata</a>
                                    </div>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
            <div class="my-5">&nbsp;</div>
        </div>
    </div>
</div>
@endsection
</x-dashboard.dashboard-master>

