@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="text-center">Create User</h1>
        <div class="container px-5 my-5">
            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" name="name"/>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" name="email"/>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" id="address" type="text" placeholder="Address" data-sb-validations="required" name="address"/>
                    <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                </div>
            </form>
        </div>
        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    </div>
@endsection
