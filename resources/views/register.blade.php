
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Login And Explore Our Services</title>
</head>

<style>
    .card {
        margin: auto;
        float: none;
        /* Added */
    }
</style>

<body>

    <div class="container">
        <div class="card mt-4 text-center" style="width:400px">
            <h1 class="card card-header" style="width:100%">Register</h1>
            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                @endif

                <form action="{{ route('studentRegister') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Enter Name">
                    <br><br>
                    <input type="email" name="email" placeholder="Enter Email">
                    <br><br>
                    <input type="password" name="password" placeholder="Enter Password">
                    <br><br>
                    <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
                    <br><br>
                    <input type="submit" value="Register">
                </form>

                @if (Session::has('success'))
                    <p style="color:green;">{{ Session::get('success') }}</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
