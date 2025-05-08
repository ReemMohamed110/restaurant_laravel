@extends('admin.layouts.admin_app')
@section('content')
    <main class="mb-4">
        <div class="container px-4 px-lg-5" style="margin-top: 100px;">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                     {{-- <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>  --}}
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        
                        <form action={{ url('store_post') }} method="POST" enctype="multipart/form-data" class="my-5" >
                            @csrf
                            <div class="form-floating">
                                 <label for="blog tittle">tittle</label>
                                <input class="form-control" id="name" name="tittle" type="text"
                                    placeholder="Enter the blog tittle..." />
                               
                                @error('tittle')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>
                            <div class="form-floating">
                                <label for="content">Content</label>
                                <input class="form-control" id="content" name="content" type="text"
                                    placeholder="Enter the content..." />
                                
                                @error('content')
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
                                POST</button>
                            <br />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
