@extends('dashboard_master')






@section('page_title')
    Edit Category
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Update Edit
                </div>
                <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label for="">Category Name</label>
                              <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-success">Edit</button>
                              </div>
                        </form>
                </div>
            </div>
        </div>
    </div>





@endsection
