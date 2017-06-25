<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="/posts" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea type="text" class="form-control" id="body" name="body"></textarea>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Post</button>
                    </div>
                    <!-- /.form-group -->

                </form>

                @if(count($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </body>
</html>
