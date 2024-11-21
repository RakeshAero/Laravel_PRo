@extends('__templates.default')
@section('title','Todo-List')
@section('main-content')
<style>

.task-table thead th {
   width: 200px !important;
   border: 1px solid black;
   text-align: center
}
.task-table tbody tr td {
    text-align: center;
    border: 1px solid black;
}
.task-table tbody tr {
    border: 1px solid black;
}
</style>
    {{-- Bootstrap Boiler Plate... --}}
<div class="container-fluid  task-container position-relative">
 {{-- Display if any Message or Error occurs --}}
 @include('common.message')
 @include('common.errors')

    {{-- Add Task --}}
       <article class="d-flex justify-content-center">
         {{-- New Task Form --}}
         <form action="{{ route('addtask') }}" method="post" class="">
             @csrf
             {{-- Task Name --}}
                 <div class="d-flex mb-3">
                     <div class="d-flex align-items-center">
                     <label for="inputEmail3" class="form-label me-2" ><strong>Add Task : </strong></label>
                     </div>
                     <div class="col">
                       <input type="text" name="name" class="form-control" id="inputEmail3" required>
                     </div>

                     {{-- Task Button --}}
                     <div class="form-group text-center ms-3">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-plus-square-fill"></i> Add
                        </button>
                    </div>
                </div>
         </form>
       </article>

</div>

{{-- Show Bending Taks --}}
<article class="d-flex justify-content-center">
    @if(count($todo) > 0)

        <div>
            <h4 class="text-center">Available Tasks</h4>
            <table class="table table-striped task-table">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Tasks</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todo as $task)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$task->name}}</td>
                            <td>
                                <form action="{{url('/task/'.$task->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button  type="button" class="btn btn-secondary">
                                    <i class="bi bi-pencil-fill">
                                    </i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</article>

@endsection
