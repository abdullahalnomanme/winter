@extends('layouts.starlight')

@section('content')
@include('layouts.nav')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ ('/') }}">Dashboard</a>
        {{-- <a class="breadcrumb-item" href="{{ url('/category') }}">Category</a> --}}
        <span class="breadcrumb-item active">Users List</span>
      </nav>
      <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-center"><h3>{{ __('Users Lists') }}</h3></div>
                        <div class="card-body">
                        {{--
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <p class="font-weight-bold text-primary">
                                Welcome To {{ Auth::user()->name }}
                            </p>
                            <p class="font-weight-bold text-primary">
                                Your Email Address: {{ Auth::user()->email }}
                            </p>
                            <p class="font-weight-bold text-primary">
                                Your Id: {{ Auth::id() }}
                            </p>
                                @php
                                echo $name;
                            @endphp  --}}
                            {{-- <p class="font-weight-bold text-primary">
                                Your Age is : {{ $age }}
                            </p>
                            <p class="font-weight-bold text-primary">
                                Your Gender is : {{ $gender }}
                            </p> --}}


                            {{-- <h2>Users Info</h2>
                            @foreach ($users as $user)
                                    <h4>{{ $loop->index+1 }} {{ $user }}</h4><br/><br/>
                            @endforeach
                            <br/>

                            <h2>Users Name</h2>
                            @foreach ($users as $user)
                                <span class="badge badge-info">
                                    {{ $loop->index+1 }}. {{ $user->name }}
                                </span>
                            @endforeach
                            <br/>
                            <br/>
                            <h2>Cars Brand</h2>
                            @foreach ($cars as $car)
                                <span class="badge badge-success">
                                    {{ $loop->index + 1}}. {{$car }}
                                </span>
                            @endforeach
                            <br/>
                            --}}


                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">Account Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $User)
                                    <tr>
                                        {{-- <th scope="row">{{ $loop->index+1 }}</th> --}}
                                        <th scope="row">{{$users->firstItem()+$key}}</th>
                                        <td>{{ $User->name }}</td>
                                        <td>{{ $User->email }}</td>
                                        <td>
                                            @if ($User->created_at->diffInDays(\Carbon\Carbon::today()) >7)
                                                <span class="badge badge-danger">OLD</span><p>{{ $User->created_at->format('d-m-Y h:i:s A') }}</p>
                                            @else<span class="badge badge-info">New</span>
                                                <p><span class="badge badge-success">{{$User->created_at->diffForHumans() }}</span></p>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                           <div class="user-nav">
                            {{ $users->links() }}
                        </div>
                    </div>
                    <div class="card-footer text-center bg-success">
                        <h5>{{ ('Total Users') }} : {{ $User::count() }}</h5>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-center"><h3>{{ __       ('User Profile') }}</h3>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <h4 class="font-weight-bold ">
                                Name: {{ Auth::user()->name }}
                            </h4>
                            <h5 class="font-weight-bold">
                                Email: {{ Auth::user()->email }}
                            </h5>
                            <h5 class="font-weight-bold">
                                Id: {{ Auth::id() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
