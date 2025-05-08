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
                                <th> Name</th>
                                <th>image</th>
                                <th>desc </th>
                                <th>status</th>
                                <th>price</th>
                                <th>category</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @isset($items)
                            @forelse ($items as $item)
                            
                            <tr>

                                <td>{{$i}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->image }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->category->name }}</td>

                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>
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
        {{$items->links()}}
    </div>
@endsection
