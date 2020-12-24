@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Message') }}</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name ">
                        </div>

                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">                        </div>

                        <div class="form-group">
                            <label for="email">Enter Message</label>
                            <textarea class="form-control" name="message" id="" cols="30" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
