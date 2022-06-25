@extends('dashboard.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Add Supplier Page</h5>

                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show ">{{$error}}</p>
                        @endforeach
                    @endif
                    <form method="post" action="{{ route('supplier.update',$supplier) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Supplier Name</label>
                            <input type="text" value="{{$supplier->name}}" name="name" id="name" class="form-control" placeholder="Enter Supplier Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="mobile">Supplier Mobile</label>
                            <input type="text" value="{{$supplier->mobile}}" name="mobile" id="mobile" class="form-control" placeholder="Enter Supplier Mobile">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Supplier Email</label>
                            <input type="email" value="{{$supplier->email}}" name="email" id="email" class="form-control" placeholder="Enter Supplier Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Supplier Address</label>
                            <input type="text" value="{{$supplier->address}}" name="address" id="address" class="form-control" placeholder="Enter Supplier Address">
                        </div>



                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Update Supplier</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
