<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home iverbinden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1><strong>
                        <center>Home iverbinden</center>
                        <div class="text-end">
                            <a href="{{route('list')}}" class="btn btn-success">View List</a>
                        </div>
                    </strong></h1>
                    @if (session()->has('success_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {!!session()->get('success_message')!!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      </div>
                    @endif

                <form method="POST" action="{{route('create')}}">
                    @csrf
                    <div class="form-group mb-3 ">
                        <label  class="form-label" > <strong>  Name</strong></label>
                        <input type="text" placeholder="Enter your name" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-check" >
                        <label > <strong>Hobbies</strong> </label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="hobbies[]" value="Singing">Singing</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="hobbies[]" value="Dancing"><label>Dancing</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="hobbies[]" value="Indoor Games">Indoor Games</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="hobbies[]" value="Outdoor Games">Outdoor Games</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="hobbies[]" value="others">others</label>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
    </div>


</body>

</html>
