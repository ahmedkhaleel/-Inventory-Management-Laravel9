@extends('dashboard.master')

@section('content')

    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                name="datatable_length" aria-controls="datatable"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="datatable"></label></div>
                                </div>
                                <a href="{{route('customer.add')}}" class="col-sm-12 col-md-2">
                                    <button type="submit" class="btn btn-success ">Add Customer</button>
                                </a>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable" class="table table-striped p-0 dataTable" role="grid"
                                           aria-describedby="datatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 179.875px;">S1
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 295.015625px;">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 295.015625px;">Image
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1"> Mobile
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 63.703125px;">Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 127.578125px;">Address
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 90.453125px;">Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customers as $key=>$customer)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$key+1}}</td>
                                                <td>{{$customer->name}}</td>
                                                <td><img src="{{url($customer->customer_image)}}" style="width:60px;height: 60px;"></td>
                                                <td>{{$customer->mobile}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->address}}</td>
                                                <td>
                                                    <a href="{{route('customer.edit',$customer->id)}}"
                                                       class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="{{route('customer.delete',$customer->id)}}"
                                                       class="btn btn-danger btn-sm" id="delete">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">S1</th>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Image</th>
                                            <th rowspan="1" colspan="1">Mobile</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Address</th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="datatable_previous"><a href="#" aria-controls="datatable"
                                                                           data-dt-idx="0" tabindex="0"
                                                                           class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                                                            aria-controls="datatable"
                                                                                            data-dt-idx="1" tabindex="0"
                                                                                            class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable"
                                                                                      data-dt-idx="2" tabindex="0"
                                                                                      class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable"
                                                                                      data-dt-idx="3" tabindex="0"
                                                                                      class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable"
                                                                                      data-dt-idx="4" tabindex="0"
                                                                                      class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable"
                                                                                      data-dt-idx="5" tabindex="0"
                                                                                      class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="datatable"
                                                                                      data-dt-idx="6" tabindex="0"
                                                                                      class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="datatable_next"><a href="#"
                                                                                                              aria-controls="datatable"
                                                                                                              data-dt-idx="7"
                                                                                                              tabindex="0"
                                                                                                              class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
