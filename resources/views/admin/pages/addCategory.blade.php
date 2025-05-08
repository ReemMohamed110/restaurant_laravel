@extends('admin.layouts.admin_app')
@section('content')
    <div class="row justify-content-center my-5" >
        <div class="col-xl-8">
            <div class="card card-default"style="margin-top: 100px;">
                <div class="card-header">
                    <h2>add category</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Yearly Chart
                        </a>

                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success ">{{session('success')}}</div>
                @endif
                <form action={{ url('store_category') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">

                        <label for="category name">category name</label>
                        <input class="form-control" id="name" name="name" type="text"
                            placeholder="Enter category name..." />
                        @error('name')
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
                        <input class="form-control" name="image" type="file" />
                        {{-- @error('image')
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ $message }}
                            </div>
                        @enderror --}}

                    </div>
                    <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">ADD
                        CATEGORY</button>
                    <br />

                </form>
            </div>
        </div>
    </div>
@endsection
