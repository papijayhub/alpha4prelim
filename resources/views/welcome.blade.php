<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="col-md-6 offset-md-3 mt-5">
        <div class="card border border-info shadow-lg mb-5 bg-white">
            <div class="card-header bg-info">
                <h1>Send the mail soldier!!!</h1>
            </div>
            <div class="card-body">
                <form action="{{'/sendmail'}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                        @error('subject')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                        @error('content')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                    <button class="btn btn-primary mt-5" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>