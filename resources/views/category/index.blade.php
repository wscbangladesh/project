@extends('dashboard_master')



@section('page_title')
    List Category
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
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (session('success'))
                                    <div class="alert alert-danger">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('deleted'))
                                    <div class="alert alert-danger">
                                        {{ session('deleted') }}
                                    </div>

                                @endif
                                    @forelse ($categories as $category)
                                    <tr>
                                        <td>{{  $category->category_name }}</td>
                                        <td>{{  $category->created_at->diffforhumans() }}</td>
                                        <td><a class="btn btn-sm btn-dark" href="{{ route('category.show', $category->id) }}">Details</a></td>
                                    </tr>

                                    @empty

                                    @endforelse
                                </tbody>
                        </table>
                        {{ $categories->links() }}
                </div>
            </div>
        </div>

</div>







@endsection
