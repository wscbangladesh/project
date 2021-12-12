@extends('dashboard_master')




@section('page_title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    All Category
                </div>
                <div class="card-body">
                        <table class="table table-striped table-inverse">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Category ID</th>
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->created_at->diffforhumans() }}</td>
                                        {{-- <td>{{ $category->updated_at->diffforhumans() }}</td> --}}
                                        <th><a class="btn btn-sm btn-secondary" href="{{ route('category.edit', $category->id) }}">Edit</a>
                                        <form  class="mt-1" action="{{ route('category.destroy', $category->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <Button type="submit" class="btn btn-sm btn-warning">Soft Delete</Button>
                                        </form>
                                        <form  class="mt-1" action="{{ route('category.harddelete', $category->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <Button type="submit" class="btn btn-sm btn-danger">Hard Delete</Button>
                                        </form>
                                    </th>
                                    </tr>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>




@endsection
