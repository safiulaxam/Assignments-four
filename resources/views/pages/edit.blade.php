<!-- resources/views/contact/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Contact Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('contact.update', $contact->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $contact->name }}">
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
                        </div>

                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="phone" class="form-control" name="phone" value="{{ $contact->phone }}">
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $contact->address }}">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                    

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush