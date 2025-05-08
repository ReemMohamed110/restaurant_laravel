@extends('admin.layouts.admin_app')
@section('content')
    <!-- Table Product -->

    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card card-default">
                <div class="card-header">
                    <h2>all users</h2>
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
                                <th>#</th>
                                <th> Name</th>
                                <th>email</th>
                                <th>role </th>
                                <th>phone</th>
                                <th>gender</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($users)
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($users as $user)
                                    <tr>

                                        <td>{{ $i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->gender }}</td>

                                        <td>
                                            {{-- @can('delete_post', $post) --}}
                                            <form action={{ url('delete_user/' . $user->id) }} method='post'>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa-solid fa-trash-can">delete</i></button>
                                                </a>
                                            </form>
                                            {{-- @endcan --}}
                                            {{-- @can('edit_post', $post) --}}
                                            <a href="{{ url('edit_user/' . $user->id) }}" class="btn btn-info"><i
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
    <div>
        {{ $users->links() }}
    </div>
@endsection
