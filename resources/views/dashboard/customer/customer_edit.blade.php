@extends('dashboard.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Add Customer Page</h5>

                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show ">{{$error}}</p>
                        @endforeach
                    @endif
                    <form method="post" action="{{ route('customer.update', $customer->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Customer Name</label>
                            <input type="text" name="name"  value="{{$customer->name}}" id="name" class="form-control" placeholder="Enter Supplier Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="mobile">Customer Mobile</label>
                            <input type="text" name="mobile" value="{{$customer->mobile}}" id="mobile" class="form-control" placeholder="Enter Supplier Mobile">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Customer Email</label>
                            <input type="email" name="email" id="email" value="{{$customer->email}}" class="form-control" placeholder="Enter Supplier Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Customer Address</label>
                            <input type="text" name="address" id="address" value="{{$customer->address}}" class="form-control" placeholder="Enter Supplier Address">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="customer_image">Customer Image</label>
                            <input type="file" name="customer_image" id="customer_image" class="form-control" placeholder="Enter Supplier Name">
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-1 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{(!empty($customer->customer_image)) ? url($customer->customer_image) : url('upload/no_image.png') }}" width="75" height="75" alt="Card image cap">
                            </div>
                        </div>

                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Add Customer</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#customer_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
