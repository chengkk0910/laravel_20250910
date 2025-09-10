<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>students index</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>

        <?php
        
        $url = route('students.create');
        // $url = route('students.edit', ['student' => 1]);
        // dd($url);
        
        ?>

        <div class="text-end mb-3">
            {{-- <button class="btn btn-success">add</button> --}}
            {{-- <a class="btn btn-success" href="http://localhost/students/create">add</a> --}}
            <a class="btn btn-success" href="{{ route('students.create') }}">add</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>opt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>
                        {{-- <a class="btn btn-warning" href="http://localhost/students/1/edit">edit</a> --}}
                        <a class="btn btn-warning" href="{{ route('students.edit', ['student' => 1]) }}">edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
