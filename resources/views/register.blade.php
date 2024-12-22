<!doctype html>
<html lang="en">
    <head>
        <title>Registrarse como nuevo paciente</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!-- Bootstrap CSS style -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css"
        />
    </head>

    <body>
        <!-- Login 5 - Bootstrap Brain Component -->
        <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
            <div class="row g-0">
                <div class="col-12 col-md-6 text-bg-primary">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="col-10 col-xl-8 py-3">
                    <img class="img-fluid rounded mb-4" loading="lazy" src="{{ asset('/img/logopcmh.png') }}"  width="245" height="80" alt="logopcm">
                    <hr class="border-primary-subtle mb-4">
                    <h2 class="h1 mb-4">Bienvenido a los servicios del Hospital Isidro Ayora.</h2>
                    <p class="lead m-0">En este sitio podrá agendar una cita médica de manera fácil y rápida.</p>
                    </div>
                </div>
                </div>
                <div class="col-12 col-md-6">
                <div class="card-body p-3 p-md-4 p-xl-5">
                    <div class="row">
                    <div class="col-12">
                        <div class="mb-5">
                        <h3>Registrarse como nuevo paciente</h3>
                        </div>
                    </div>
                    </div>
                    <form action="#!">
                    <div class="row gy-3 gy-md-4 overflow-hidden">
                        <div class="col-12">
                        <label for="email" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="sucuenta@ejemplo.com" required>
                        </div>
                        <div class="col-12">
                        <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" value="" required>
                        </div>
                        <div class="col-12">
                        <label for="password" class="form-label">Vuelva a escribir la contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" value="" required>
                        </div>
                        <!----   KEEP SESSION OPEN
                        <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                            <label class="form-check-label text-secondary" for="remember_me">
                            Mantener iniciada la sesión
                            </label>
                        </div>
                        </div> -->
                        <div class="col-12">
                        <div class="d-grid">
                            <button class="btn bsb-btn-xl btn-primary" type="submit">Registrarme como nuevo paciente</button>
                        </div>
                        </div>
                    </div>
                    
                    </form>
                    <div class="row">
                    <div class="col-12">
                        <hr class="mt-5 mb-4 border-secondary-subtle">
                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                        <a href="#!" class="link-secondary text-decoration-none">Inicio de sesíon</a>
                        <a href="#!" class="link-secondary text-decoration-none">Olvidé mi contraseña</a>
                        </div>
                    </div>
                    </div>
                    <!-- Register with other plataform 
                    <div class="row">
                    <div class="col-12">
                        <p class="mt-5 mb-4">Or sign in with</p>
                        <div class="d-flex gap-3 flex-column flex-xl-row">
                        <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                            <span class="ms-2 fs-6">Google</span>
                        </a>
                        <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            <span class="ms-2 fs-6">Facebook</span>
                        </a>
                        <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            <span class="ms-2 fs-6">Twitter</span>
                        </a>
                        </div>
                    </div>
                    </div> -->
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
