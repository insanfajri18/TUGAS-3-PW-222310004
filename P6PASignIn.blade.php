<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <link href="{{ url('./assets/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('./assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <style>
        body{
            background-color: #0d2142
        }
    </style>

</head>

<body>
    <div class="container h-100">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <div class="text-center mb-10 d-none d-lg-block">
                <img src="{{ url('./assets/media/icons/logo.jpeg') }}" alt="logo-company" style="width: 100px" class="rounded me-5 border border-warning bg-warning" />
            </div>
            <div class="card w-100 w-lg-400px">
                <div class="card-body">
                    <form action="{{ url('sign-in') }}" method="post" id="form-sign-in" onsubmit="handleSignIn(event)">
                        @csrf
                        <div class="text-center mb-10">
                            <h1>Bedtime Stories</h1>
                            <div class="text-gray-400 fw-bold fs-4">
                                Sign in with your <span class="text-warning">admin account</span>
                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <label class="required fw-bolder">Email</label>
                            <input id="email" type="email" class="form-control" placeholder="name@example.com" name="email" >
                            <small class="text-danger error-email"></small>
                        </div>
                        <div class="form-group mb-10">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="required fw-bolder">Password</label>
                                <a href="{{ url('sign-up') }}" class="text-warning fw-bolder">Forgot password ?</a>
                            </div>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                                <button class="input-group-text bg-white" type="button" onclick="showPass()">
                                    <i id="eye-icon" class="bi bi-eye"></i>
                                    <i id="eye-slash" class="bi bi-eye-slash" style="display: none;"></i>
                                </button>
                            </div>

                            <small class="text-danger error-password"></small>
                        </div>

                        <div class="d-grid">
                            <button id="btnsub" class="btn btn-lg btn-warning btn-submit fw-bolder" type="submit">Sign In</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="d-flex flex-center flex-column-auto p-5">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted text-hover-primary px-2">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted text-hover-primary px-2">Contact Us</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
<script>

    let textEmail = document.getElementById('email');
    let textPassword = document.getElementById('password');
    const signInButton = document.getElementById('btnsub');

    const handleSignIn = (event) => {
        event.preventDefault();
        let email = textEmail.value;
        let password = textPassword.value;
        console.log(email, password);
        if(email === ""){
            alert("Email tidak boleh kosong")
        }else if(password === ""){
            alert("Password tidak boleh kosong")
        }else if(email === "222310004@student.ibik.ac.id" && password === "222310004"){
            signInButton.textContent = "Loading...";
                setTimeout(() => {
                    alert("Email : " + email + " Password : " + password)
                    signInButton.textContent = "Success Sign In";
                }, 1500);
        }else{
            signInButton.textContent = "Loading...";
                setTimeout(() => {
                    alert("User tidak ditemukan")
                    signInButton.textContent = "Sign In";
                }, 1500);
            }
        }

    function showPass(){
        let password = textPassword.type;
        console.log(password)
        if(password==="password"){
            textPassword.type="text";
            document.getElementById('eye-icon').style.display = 'none';
            document.getElementById('eye-slash').style.display = 'block';
        }else{
            textPassword.type="password";
            document.getElementById('eye-slash').style.display = 'none';
            document.getElementById('eye-icon').style.display = 'block';
        }
    }


</script>
</body>

</html>
