<!DOCTYPE html>
<html>

<head>
    <title>Example 1</title>
    <link rel="stylesheet" href=
        "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Import Show</h4>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">حقول ملف الاكسيل</th>
                        <th scope="col">حقول قاعدة البيانات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($columns as $column)
                        <tr>
                            <th>{{$column}}</th>
                            <th>
                                <select class="form-control" name="fields[{{$column}}]" id="exampleFormControlSelect1">
                                    @foreach($db_fields as $db_field)
                                        @php
                                            $trans =[
                                                'name'=>'اسم المستخدم',
                                                'email'=>'البريد الالكتروني',
                                                'password'=>'كلمة المرور',
                                          ];
                                        @endphp
                                        <option value="{{$db_field}}">{{$trans[$db_field] ?? ''}}</option>
                                    @endforeach
                                </select>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">save</button>
            </form>

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
