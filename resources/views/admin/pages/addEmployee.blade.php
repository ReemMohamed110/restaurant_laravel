@extends('admin.layouts.admin_app')
@section('content')
<div class="row justify-content-center my-5" style="margin-top: 100px;">
    <div class="col-xl-8">
        <div class="card card-default">
            <div class="card-header">
                <h2>add employee</h2>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Yearly Chart
                    </a>

                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success ">{{session('success')}}</div>
            @endif
            <form action={{ url('store_employee') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">

                    <label for="employee name">employee name</label>
                    <input class="form-control" id="name" name="name" type="text"
                        placeholder="Enter employee name..." />
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee role">employee role</label>
                    <div class="form-floating">
                        <label for="status">role</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role">
                            <option selected>select role</option>
                            <option value="assistant">assistant</option>
                            <option value="chief">chief</option>
                            <option value="accountant">accountant</option>
                        </select>
                        @error('role')
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ $message }}
                            </div>
                        @enderror
    
                    </div>
                    

                </div>
                <div class="form-floating">

                    <label for="employee salary">employee salary</label>
                    <input class="form-control" id="name" name="salary" type="text"
                        placeholder="Enter employee salary..." />
                    @error('salary')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee phone">phone</label>
                    <input class="form-control" id="name" name="phone" type="text"
                        placeholder="Enter employee phone..." />
                    @error('phone')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee address">address</label>
                    <input class="form-control" id="name" name="address" type="text"
                        placeholder="Enter employee address..." />
                    @error('address')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee birthdate">birthdate</label>
                    <input class="form-control" id="name" name="birthdate" type="text"
                        placeholder="Enter employee birthdate..." />
                    @error('birthdate')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee gender">employee gender</label>
                    <div class="form-floating">
                        <label for="status">gender</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="gender">
                            <option selected>select gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ $message }}
                            </div>
                        @enderror


                </div>
                
                <div class="form-floating">
                    <label for="status">status</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status">
                        <option selected>select status</option>
                        <option value="active">active</option>
                        <option value="not active">not active</option>
                    </select>
                    @error('status')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-floating">

                    <label for="employee national id">national id</label>
                    <input class="form-control" id="name" name="nationalID" type="text"
                        placeholder="Enter employee national id..." />
                    @error('nationalID')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                <div class="form-floating">

                    <label for="employee gender">image</label>
                    <input class="form-control" id="name" name="image" type="file"
                        placeholder="Enter employee image..." />
                    @error('image')
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                
                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">ADD
                    employee</button>
                <br />

            </form>
        </div>
    </div>
</div>
@endsection
