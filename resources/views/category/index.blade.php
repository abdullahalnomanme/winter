@extends('layouts.app')
@php
    use App\Models\Category;
    use App\Models\User;
@endphp

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-success text-center"><h3>{{ __('Category List') }}</h3></div>
                <div class="card-body">
                    {{-- @if (session('category_delete_status'))
                        <div class="alert alert-success text-center">
                            {{ session('category_delete_status') }}
                        </div>
                    @endif --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">categories Name</th>
                                <th scope="col">Added by</th>
                                <th scope="col">categories Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $categories ['added_by'] }} --}}
                            {{-- {{ $categories->category_name }} --}}
                            @foreach ($categories as $Category)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $Category->category_name }}</td>
                                <td>{{ User::find($Category->added_by)->name }}</td>
                                <td>{{ $Category->created_at->format('d,m,Y h:i:s A')}}</td>
                                <td><a href="{{ url('category/delete') }}/{{ $Category->id }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   <div class="paginate1 text-center">
                        {{-- {{ $categories->links() }} --}}
                   </div>
                </div>
                <div class="card-footer bg-success text-center">
                    <h5>Total Category: {{ $Category::count() }}</h5>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header bg-success text-center"><h3>{{ __('Add Category') }}</h3></div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @elseif(session('category_error'))
                        <div class="alert alert-danger">
                            {{ session('category_error') }}
                        </div>
                    @endif --}}
                    <form method="POST" action="{{ url('category/insert') }}">
                        @csrf
                        <div class="form-group">
                          <label for="category_name">Category Name</label>
                          <input type="text" name="category_name" class="form-control" id="category_name">
                            @error('category_name')
                                {{-- {{ $errors }} --}}
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success m-auto">Add Category</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
