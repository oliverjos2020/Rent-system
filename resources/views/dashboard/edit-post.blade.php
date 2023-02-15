<x-dashboard.dashboard-master>
    @section('content')
    <div class="header">
        <h1 class="header-title">
            Edit post
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
            </ol>
        </nav>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">EDIT POST</h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{route('dashboard.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                @if(session()->has('post-updated'))

                                <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        {{session('post-updated')}}
                                    </div>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="featured-image">Featured Image</label><br>
                                    <img alt="" src="{{$post->featured_image}}" class="img-responsive mt-2"
                                            width="150" height="150" />
                                </div>

                                <div class="form-group">

                                        <input type="file" id="formFile" class="form-control-file {{$errors->has('featured_image') ? 'is-invalid' : ''}}"  name="featured_image">
                                        @error('featured_image')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    <small>Featured Image should be: jpg,jpeg,png,bmp
                                        format</small>
                                </div>
                                <div class="form-group">
                                    <label for="title">Post Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" placeholder="post Title" value="{{$post->title}}" name="title">
                                    @error('title')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Short Description</label>
                                    <textarea name="short_description" id="short-description" class="form-control {{$errors->has('short_description') ? 'is-invalid' : ''}}" cols="30" rows="3">{{$post->short_description}}</textarea>
                                    @error('short_description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                        <textarea name="description" data-provide="markdown" rows="14">{{$post->description}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Category: <span class="text-primary">{{$post->category->name}}</span></label>
                                    <select name="category_id" id="category" class="form-control">

                                        @foreach ($category as $categories)

                                        <option {{($categories->name==$post->category->name)?"selected":""}} value="{{$categories->id}}">{{$categories->name}}</option>
                                        @endforeach

                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="Location">Location: <span class="text-primary">{{$post->location->name}}</span></label>
                                    <select name="location_id" id="location" class="form-control">

                                        @foreach ($location as $locations)
                                        <option {{($locations->name==$post->location->name)?"selected":""}} value="{{$locations->id}}">{{$locations->name}}</option>
                                        @endforeach

                                        @error('location_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="title">Amount <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control {{$errors->has('amount') ? 'is-invalid' : ''}}" id="amount" value="{{$post->amount}}" placeholder="Amount" name="amount">
                                        @error('amount')
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                </div> --}}
                                <div class="form-group">
                                   <label for="featured">Make featured post: <span class="text-primary">{{$post->featured==1 ? 'Yes' : 'No'}}</span></label>
                                    <select name="featured" id="featured" class="form-control">
                                        @if($post->featured==1)
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                        @else
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                        @endif
                                    </select>
                                    @error('featured')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                </div>

                                {{-- <div class="form-group">
                                    <label for="offer">Offer: <span class="text-primary">{{$post->offer==1 ? 'Open' : 'Closed'}}</span></label>
                                     <select name="offer" id="offer" class="form-control">
                                         @if($post->offer==1)
                                         <option value="1">Open</option>
                                         <option value="0">Closed</option>
                                         @else
                                         <option value="0">Closed</option>
                                         <option value="1">Open</option>
                                         @endif
                                     </select>
                                     @error('offer')
                                     <div class="invalid-feedback">{{$message}}</div>
                                 @enderror
                                 </div> --}}

                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    @foreach ($photo as $photos)
                                    <img alt="" src="{{$photos->file}}" class="img-responsive mt-2"
                                        width="128" height="128" />
                                         @endforeach
                                    <div class="mt-2">
                                        <input type="file" name="photo_id[]" id="photo_id" class="form-control-file {{$errors->has('photo_id') ? 'is-invalid' : ''}}" multiple>
                                        @error('photo_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    </div>
                                    <small>File extension allowed: jpg,jpeg,png,bmp
                                        format</small>

                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
                <div class="my-5">&nbsp;</div>
            </div>
        </div>
    </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>

