@extends('Layout.Master')
@section('title', 'Edit page')

@section('content')
    <div class="row p-3">
        <div class="card p-3">
            <h2 class="card-title">Edit Student Details <a href="{{ route('home') }}"
                    class="btn btn-success btn-sm ms-auto float-end">Back</a>
            </h2>
            <div class="mt-5 card-body align-items-center justify-content-center d-flex">
                <form class="" action="{{ route('update', $data->id) }}" method="POST" style="width:60rem">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ID</span>
                        <input type="text" class="form-control" placeholder="Jhon Doe" aria-label="id" name="id"
                            aria-describedby="basic-addon1" value="{{ $data->id }} " disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" placeholder="Jhon Doe" aria-label="name" name="name"
                            aria-describedby="basic-addon1" value="{{ $data->name }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" placeholder="john.doe@gmail.com" aria-label="email"
                            name="email" aria-describedby="basic-addon1" value="{{ $data->email }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Gender</span>
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option selected value="{{ $data->gender }}">{{ $data->gender }}</option>
                                    @if ($data->gender == 'Male')
                                        <option value="Female">Female</option>
                                    @else
                                        <option value="Male">Male</option>
                                    @endif

                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Age</span>
                                <input type="text" class="form-control" placeholder="25" aria-label="age" name="age"
                                    aria-describedby="basic-addon1" value="{{ $data->age }}">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Phone</span>
                        <input type="text" class="form-control" placeholder="+965-50923840" aria-label="phone"
                            name="phone" aria-describedby="basic-addon1" value="{{ $data->phone }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address</span>
                        <textarea class="form-control" name='address' aria-label="With textarea">{{ $data->address }}</textarea>
                    </div>

                    <button class="btn btn-success float-end">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
