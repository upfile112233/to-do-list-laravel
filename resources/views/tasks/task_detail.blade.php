@extends('tasks.Layouts.base')
@section('title','Detail task')
@section('main')
<section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">

          <div class="card mask-custom">
            <div class="card-body p-4 text-white">

              <div class="text-center pt-3 pb-2">
                <i class="fa-solid fa-arrow-left" style="float: left;" onclick="backToIndex()"></i>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">Task detail</h2>
              </div>
                <!-- <button type="submit" class="btn btn-info ms-2">New Task</button> -->
              <table class="table text-white mb-0" style="text-align: center">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Due_date</th>
                    <th scope="col">Is completed</th>
                    <th scope="col">Description</th>
                    <th scope="col">Feature</th>
                  </tr>
                </thead>
                <tbody>
                    <tr class="fw-normal">
                    <td class="border-0">
                      {{$task->title}}
                    </td>
                    <td class="border-0 align-middle">{{$task->due_date}}</td>
                        <td class="border-0 align-middle">
                         @if ($task->is_completed==0)
                                <h6 class="mb-0"><span class="badge bg-danger">No</span></h6>
                            @else
                                <h6 class="mb-0"><span class="badge bg-success">Yes</span></h6>
                            @endif
                        </td>
                        <td class="border-0">{{$task->description}}</td>
                    <td class="border-0 align-middle">
                      <a href="{{route('tasks.edit',$task->id)}}" data-mdb-toggle="tooltip" title="edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                        <a href="{{route('tasks.update',$task->id)}}" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="{{route('tasks.delete',$task->id)}}" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
