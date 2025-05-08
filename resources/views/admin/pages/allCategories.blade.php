@extends('admin.layouts.admin_app')
@section('content')
    <!-- Table Product -->

    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Products Inventory</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Yearly Chart
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">edit</a>
                            <a class="dropdown-item" href="#">delete</a>
                        </div>
                    </div>
                </div>
                @if (session('deleted'))
                    <div class="alert alert-danger">{{ session('deleted') }}</div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>category Name</th>
                                <th>status</th>
                                <th>number of item</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($categories)
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($categories as $category)
                                    <tr>

                                        <td>{{ $i }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>{{ $category->menuitems()->count() }}</td>


                                        <td>
                                            {{-- @can('delete_post', $post) --}}
                                            <form action={{ url('delete_category/' . $category->id) }} method='post'>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa-solid fa-trash-can">delete</i></button>
                                                </a>
                                            </form>
                                            {{-- @endcan --}}
                                            {{-- @can('edit_post', $post) --}}
                                            <a href="{{ url('edit_category/' . $category->id) }}" class="btn btn-info"><i
                                                    class="fa-solid fa-edit">edit</i> </a>
                                            {{-- @endcan --}}
                                        </td>
                                        @php
                                            $i = $i + 1;
                                        @endphp
                                    </tr>
                                @empty
                                    <p>there is no categories</p>
                                @endforelse
                            @endisset




                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
