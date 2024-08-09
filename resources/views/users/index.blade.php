<!DOCTYPE html>
<html>

<head>
    <title>Example 1</title>
    <link rel="stylesheet" href=
        "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       import 1
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> import 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.import')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                       <input type="file" name="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">import</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        import 2
    </button>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> import 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.import2')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">import 2</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


<br><br>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">User Information</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{$user->name}}</th>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
<script src=
            "https://code.jquery.com/jquery-3.5.1.slim.min.js">
</script>
<script src=
            "https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js">
</script>
<script src=
            "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
</body>

</html>
