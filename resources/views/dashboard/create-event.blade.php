<x-dashboard.dashboard-master>
    @section('content')
    <div class="header">
        <h1 class="header-title">
            Create Event
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Event</li>
            </ol>
        </nav>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Event</h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{route('dashboard.event.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                @if(session()->has('event-created'))

                                <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        {{session('event-created')}}
                                    </div>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="title">Event Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" placeholder="Event Title" name="title">
                                    @error('title')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                    <div class="form-group">
                                        <label for="featured-image">Event Flyer</label>
                                            <input type="file" id="flyer-image" class="form-control-file {{$errors->has('flyer') ? 'is-invalid' : ''}}"  name="flyer">
                                            @error('flyer')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        <small>Featured Image should be: jpg,jpeg,png,bmp
                                            format</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="venue">Event Venue <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{$errors->has('venue') ? 'is-invalid' : ''}}" id="venue" placeholder="Event Venue" name="venue">
                                        @error('venue')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="event_date">Event Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control {{$errors->has('event_date') ? 'is-invalid' : ''}}" id="event_date" placeholder="Event Date" name="event_date">
                                        @error('event_date')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="event_time">Event Time <span class="text-danger">*</span></label>
                                        <input type="time" class="form-control {{$errors->has('event_time') ? 'is-invalid' : ''}}" id="event_time" placeholder="Event Time" name="event_time">
                                        @error('event_time')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                <div class="form-group">
                                    <label for="title">Event Caption</label>
                                    <textarea name="caption" id="caption" class="form-control {{$errors->has('caption') ? 'is-invalid' : ''}}" cols="30" rows="3"></textarea>
                                    @error('caption')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                </div>
                <div class="my-5">&nbsp;</div>
            </div>
        </div>
    </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>

