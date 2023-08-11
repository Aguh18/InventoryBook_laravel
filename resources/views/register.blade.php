@extends('layouts.main')

@section('content')
    <section class="vh-100 gradient-custom" style="background-color: grey;">
        <div class="container py-5 h-100" data-bs-theme="dark">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="text-center mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form>

                                <div class="row">
                                    <div >

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-flex justify-content-center">

                                        <select class="select form-control-lg">
                                            <option value="1" disabled>Choose option</option>
                                            <option value="2">Admin</option>
                                            <option value="3">User</option>
                                        </select>


                                    </div>
                                </div>

                                <div class="mt-4 d-flex justify-content-center">
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
