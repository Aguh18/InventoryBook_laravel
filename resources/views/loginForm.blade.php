@extends('layouts.main')

@section('content')
    <section class="vh-100" style="background-color: grey;">

        <div class="container py-5 h-100" data-bs-theme="dark">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success " data-bs-theme="dark">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">

                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <form action="/login" method="POST">
                                @csrf

                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="typeEmailX-2"
                                        class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2"
                                        class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>


                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                                <hr class="my-4">
                            </form>
                            <div class="text-center">
                                <p>Not a member? <a href="/register">Register</a></p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
