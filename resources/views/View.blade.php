@extends('Layout.Master')
@section('title', 'View page')

@section('content')
    <div class="row p-3">
        <div class="card p-3">
            <h2 class="card-title">Student Details View <a href="{{ route('home') }}"
                    class="btn btn-success btn-sm ms-auto float-end">Back</a>
            </h2>
            <div class="mt-5 card-body align-items-center justify-content-center d-flex">
                <form class="" action="{{ route('edit', $data->id) }}" style="width:60rem">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ID#</span>
                        <input type="text" class="form-control" placeholder="Jhon Doe" value="{{ $data->id }}"
                            aria-label="name" name="name" aria-describedby="basic-addon1" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" placeholder="Jhon Doe" aria-label="name" name="name"
                            aria-describedby="basic-addon1" disabled value="{{ $data->name }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" placeholder="john.doe@gmail.com" aria-label="email"
                            name="email" aria-describedby="basic-addon1" disabled value="{{ $data->email }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Gender</span>
                                <input type="text" class="form-control" placeholder="" aria-label="gender" name="gender"
                                    aria-describedby="basic-addon1" disabled value="{{ $data->gender }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Age</span>
                                <input type="text" class="form-control" placeholder="25" aria-label="age" name="age"
                                    aria-describedby="basic-addon1" disabled value="{{ $data->age }}">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Phone</span>
                        <input type="text" class="form-control" placeholder="+965-50923840" aria-label="phone"
                            name="phone" aria-describedby="basic-addon1" disabled value="{{ $data->phone }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address</span>
                        <textarea class="form-control" name='address' aria-label="With textarea" disabled>{{ $data->address }}</textarea>
                    </div>

                    <button class="btn btn-success float-end">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
