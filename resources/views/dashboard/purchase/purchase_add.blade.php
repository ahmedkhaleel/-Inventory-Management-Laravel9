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
                    <form method="post" action="{{ route('product.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input type="text" name="date" id="date" class="form-control date-picker-default"
                                       value="Select Date">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="purchase_no">Purchase No</label>
                                <input type="text" name="purchase_no" id="purchase_no" class="form-control"
                                       placeholder="Purchase No">
                            </div>

                            <div class="col-4 mb-3">
                                <label class="form-label" for="supplier_id">Supplier</label>
                                <select name="supplier_id" id="supplier_id" class="form-select form-select-lg mb-4">
                                    <option selected="">Open this select menu</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="category_id">Category Name</label>
                                <select name="category_id" id="category_id" class="form-select form-select-lg mb-4">
                                    <option selected="">Open this select menu</option>



                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label" for="product_id">Product Name</label>
                                <select name="product_id"  id="product_id" class="form-select form-select-lg mb-4">
                                    <option selected="">Open this select menu</option>



                                </select>
                            </div>
                            <div class="col-4 mb-3 mt-20">

                                <button type="submit" class="button black medium ">Add More</button>
                            </div>
                        </div>




                    </form>
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript">
        $(function(){
            $(document).on('change','#supplier_id',function(){
                var supplier_id = $(this).val();
                $.ajax({
                    url:"{{ route('get-category') }}",
                    type: "GET",
                    data:{supplier_id:supplier_id},
                    success:function(data){
                        var html = '<option value="">Select Category</option>';
                        $.each(data,function(key,v){
                            html += '<option value=" '+v.category_id+' "> '+v.category.name+'</option>';
                        });
                        $('#category_id').html(html);
                    }
                })
            });
        });
    </script>
@endsection
