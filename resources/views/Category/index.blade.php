@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Category</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($categories) > 0)
                                    @foreach($categories as $key=>$category)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <th>
                                            <a href="{{route('category.edit', [$category->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        </th>
                                        <th>
                                            <a href="{{route('category.destroy', [$category->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                @else
                                    <td>No Category to display</td>
                                @endif
                                </tbody>
                            </table>
                        </div>


                        @foreach($categories as $category)
                            <p>{{$category->name}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
