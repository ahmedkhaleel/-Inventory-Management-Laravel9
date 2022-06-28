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
                    <form method="post" action="{{ route('product.update',$product->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" placeholder="Enter Product Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Supplier Name</label>
                            <select name="supplier_id" class="form-select form-select-lg mb-3">
                                <option selected="">Open this select menu</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ $supplier->id == $product->supplier_id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" for="email">Unit Name</label>
                            <select name="unit_id" class="form-select form-select-lg mb-3">
                                <option selected="">Open this select menu</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }} " {{$unit->id == $product->unit_id  ? 'selected' : ''}}>{{ $unit->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Category Name</label>
                            <select name="category_id" class="form-select form-select-lg mb-3">
                                <option selected="">Open this select menu</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{$category->id  == $product->category_id ? 'selected' :''}}>{{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Add Supplier</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
