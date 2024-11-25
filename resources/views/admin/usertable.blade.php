@extends('admin.__templates.default_AD')
@section('main_content')
<table class=" text-center table table-striped table-bordered w-50" id="user-table">
    <thead class="text-center"><tr>
        <th>No</th>
        <th>Users</th>
        <th>Role</th>
        <th>Options</th>
    </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->type}}</td>
            <td>
                <form>
                    @csrf
                    <button type="button" class="btn btn-success"><i class="bi bi-plus-lg"></i></button>
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
