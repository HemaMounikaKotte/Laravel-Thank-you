@extends('layouts.default')

@section('content')
    <div class="card mt-10 pl-2 pr-2">
        <h1>line-height: 3 (default):</h1>
        <div class="card-title"><h1>This is my contact page!</h1>
            <p class="lead">Use this document to contact site owner.</p></div>

        <div class="card-body">

            <form action="/contact" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="name">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send a Message</button>
            </form>
        </div>
    </div>

@endsection