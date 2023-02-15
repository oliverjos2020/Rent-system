<x-dashboard.dashboard-master>
    @section('content')
    <div class="header">
        <h1 class="header-title">
            Category
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </nav>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit category: {{$category->name}}</h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{route('dashboard.category.update', $category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                @if(session()->has('category-updated'))

                                <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        {{session('category-updated')}}
                                    </div>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" placeholder="Name" value="{{$category->name}}" name="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table id="datatables-basic" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)

                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td><a href="{{route('dashboard.editcategory', $category->id)}}">{{$category->name}}</a></td>
                                            <td>{{$category->slug}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>



                </div>
                <div class="my-5">&nbsp;</div>
            </div>
        </div>
    </div>
    </div>
    @endsection
    </x-dashboard.dashboard-master>

