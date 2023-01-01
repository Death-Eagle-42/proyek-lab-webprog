<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document_title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

    <body>

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="/">MAI BOUTIQUE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    <div class="d-flex flex-column align-items-center mt-4">
        <p id="title" class="fs-1 fw-bold">Register</p>
        {{-- Ke Controller --}}
        <form method="POST" action="regisAction" class="d-flex flex-column align-items-center">
            @csrf
                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">username</label>
                    <input name="usernameInput" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="emailInput" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 w-100">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="passwordInput" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input name="phoneNumberInput" type="text" class="form-control" aria-label="Phone Number" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="basic-addon2">
                </div>

                @if ($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif

                <button type="submit" class="btn btn-primary mt-4">Register</button>
                <p class="fs-6 fw-light mt-4">Already have an account?</p>
                <a href="/login" class="btn btn-outline-dark mt-4">Login</a>
        </form>
    </div>

    </body>
</html>
