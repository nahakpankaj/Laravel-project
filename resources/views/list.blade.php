<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <section class="container mt-5">
        <div class="card">
            <div class="card-header justify-content-between d-flex">
                <h5>Records list</h5>
                <a href="{{ route('home') }}" class="btn btn-primary">Add Record</a>
            </div>
            @if (session()->has('delete_message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {!! session()->get('delete_message') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Hobbies</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hobbies as $hobby)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $hobby->name }}</td>
                                <td>{{ implode(',', $hobby->hobbies) }}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete', $hobby) }}">
                                        @csrf
                                        <div class="btn-group">
                                            <a href="{{ route('detail', $hobby) }}" class="btn btn-outline-info"> Details
                                            </a>
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> Delete </button>

                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
