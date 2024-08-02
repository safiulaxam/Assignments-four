<!DOCTYPE html>
<html>
<head>
    <title>Contacts List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contacts List</h1>
        <form action="{{ route('contacts.update') }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>
                                <input type="text" name="contacts[{{ $contact->id }}][name]" value="{{ $contact->name }}" class="form-control">
                            </td>
                            <td>
                                <input type="email" name="contacts[{{ $contact->id }}][email]" value="{{ $contact->email }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="contacts[{{ $contact->id }}][phone]" value="{{ $contact->phone }}" class="form-control">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Update Contacts</button>
        </form>
    </div>
</body>
</html>
