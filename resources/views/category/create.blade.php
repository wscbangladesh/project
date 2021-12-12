@extends('dashboard_master')


@section('page_title')
    Create Category
@endsection

@section('content')

        <div class="row">
            <div class="col-12">
                <div class="card">
                        <div class="card-header">
                            Create Category
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                            @endif
                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                        <div class="form-group">
                                          <label for="">Category Name</label>
                             <input type="text" class="form-control" name="category_name" required placeholder="Enter Category Name...">
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                            </span>Add Category</button>
                                          </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>








@endsection
