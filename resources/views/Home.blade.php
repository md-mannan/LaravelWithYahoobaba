@extends('Layout.Master')
@section('title', 'Home page')

@section('content')
    <div class="row">
        <div class="card p-3">
            <h2 class="card-title">Student Details
                <a href="{{ route('deleteAll') }}" class="btn btn-danger ml-2 btn-sm ms-auto float-end">Delete All</a>
                <a href="{{ route('add') }}" class="btn btn-success btn-sm ms-auto float-end">Add
                    New</a>
            </h2>
            @if (session('success'))
                {!! session('success') !!}
        </div>
        @endif
        @if (session('error'))
            {!! session('error') !!}
        @endif
        <div class="card-body">
            @if ($data->total() == 0)

                <h2 class="alert alert-warning text-center show">Data Not Found</h2>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $student)
                            <tr>

                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <div class="btn-group ">
                                        <a href="{{ route('view', $student->id) }}" class="btn btn-info "><i
                                                class="fa-regular fa-eye"></i></a>
                                        <a href="{{ route('edit', $student->id) }}" class="btn btn-warning"><i
                                                class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete', $student->id) }}" class="btn btn-danger"><i
                                                class="fa-regular fa-trash-can"></i></a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="">{{ $data->links() }}</div>


            @endif
        </div>
    </div>
    </div>
@endsection
