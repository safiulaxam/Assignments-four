@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Contact Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">

                        </div>
                        <div class="col-md-4">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $contacts as $key => $contact )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $contact->name }}</td>
                            <td scope="col">{{ $contact->email }}</td>
                            <td scope="col">{{ $contact->phone }}</td>
                            <td scope="col">{{ $contact->address }}</td>
                            <td scope="col">
                           

                            <a href="{{  route('contact.edit', $contact->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
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