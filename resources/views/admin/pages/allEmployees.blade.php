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
                <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>role</th>
                                <th>salary </th>
                                <th>phone</th>
                                <th>gender</th>
                                <th>image </th>
                                <th>status</th>
                                <th>ID</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($employees)
                            @php
                                $i=1;
                            @endphp
                            @forelse ($employees as $employee)
                            
                            <tr>

                                <td>{{$i}}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->role }}</td>
                                <td>$ {{ $employee->salary }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->image }}</td>
                                <td>{{ $employee->status }}</td>
                                <td>{{ $employee->nationalID }}</td>

                                <td>
                                    
                                        {{-- @can('delete_post',$post) --}}
                                                            <form action={{ url('delete_employee/' . $employee->id) }} method='post'>
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="fa-solid fa-trash-can">delete</i></button>
                                                                </a>
                                                            </form>
                                                        {{-- @endcan --}}
                                                        {{-- @can('edit_post',$post) --}}
                                                            <a href="{{ url('edit_employee/' . $employee->id) }}" class="btn btn-info"><i
                                                                    class="fa-solid fa-edit">edit</i> </a>
                                                        {{-- @endcan --}}
                                    
                                </td>
                                @php
                                $i=$i+1;
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
        {{$employees->links()}}
    </div>
@endsection
