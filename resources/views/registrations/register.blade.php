@extends('layouts.main')

@section('content')
    <section class="vh-100 gradient-custom" style="background-color: grey;">
        <div class="container py-5 h-100" data-bs-theme="dark">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="text-center mb-4 pb-2 pb-md-0 mb-md-4">Registration Form</h3>
                            <form action="/register" method="POST">
                                @csrf

                                <div class="row">
                                    <div>

                                        <div class="form-outline">
                                            <input name="name" type="text" id="firstName"
                                                class="form-control form-control-lg @error('name')is-invalid" placeholder="please enter the name" @enderror />

                                            <label class="form-label " for="firstName">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-1">


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div >

                                            <div class="form-outline">
                                                <input  name="username" type="text" id="username" class="form-control form-control-lg @error('username')is-invalid" placeholder="please enter the username" @enderror />

                                            <label class="form-label "
                                                for="firstName">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-1">


                                    </div>
                                </div>





                                <div class="row">


                                    <div class="form-outline">
                                        <input name="email" type="email" id="emailAddress" class="form-control form-control-lg @error('email')is-invalid  @enderror " @error('email')
                                        placeholder="please enter the email"
                                        @enderror>
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>



                                </div>
                                <div class="col-md-6 mb-1">


                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" id="passwordid" class="form-control form-control-lg" />
                                            <label class="form-label" for="passwordid">password</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" name="retype_password" id="repassword"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="repassword">retype password</label>
                                        </div>

                                    </div>
                                </div>


                                <div class="mt-2 d-flex justify-content-center">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
