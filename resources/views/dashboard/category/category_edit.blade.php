@extends('dashboard.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Update Category Page</h5>

                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show ">{{$error}}</p>
                        @endforeach
                    @endif
                    <form method="post" action="{{ route('category.update',$category->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Category Name</label>
                            <input type="text" name="name" value="{{$category->name}}" id="name" class="form-control" placeholder="Enter Supplier Name">
                        </div>
                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
