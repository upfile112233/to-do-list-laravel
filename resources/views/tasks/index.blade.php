@extends('tasks.Layouts.base')
@section('title','Home')
@section('main')
  <section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
             <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
<li class="nav-item" role="presentation">
    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
    aria-controls="ex1-tabs-1" aria-selected="true">All</a>
</li>
<li class="nav-item" role="presentation">
    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
    aria-controls="ex1-tabs-2" aria-selected="false">Not complete</a>
</li>
<li class="nav-item" role="presentation">
    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
    aria-controls="ex1-tabs-3" aria-selected="false">Completed</a>
</li>
</ul>
<div class="tab-content" id="ex1-content">
                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
          <div class="card mask-custom">
            <div class="card-body p-4 text-white">
              <div class="text-center pt-3 pb-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">All Task</h2>
              </div>
              <a href="{{route('tasks.create')}}" class="btn btn-info ms-2">New Task</a>
                <!-- <button type="submit" class="btn btn-info ms-2">New Task</button> -->
              <table class="table text-white mb-0" style="text-align: center">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Due_date</th>
                    <th scope="col">Is completed</th>
                    <th scope="col">Feature</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($AllTasks as $task)
                    <tr class="fw-normal" onclick="detailTask({{$task->id}})">
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
                    <td class="border-0 align-middle">
                      <a href="{{route('tasks.update',$task->id)}}" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                      <a href="{{route('tasks.delete',$task->id)}}" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
                </div>
        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <div class="card mask-custom">
            <div class="card-body p-4 text-white">
              <div class="text-center pt-3 pb-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">Not complete</h2>
              </div>
              <a href="{{route('tasks.create')}}" class="btn btn-info ms-2">New Task</a>
                <!-- <button type="submit" class="btn btn-info ms-2">New Task</button> -->
              <table class="table text-white mb-0" style="text-align: center">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Due_date</th>
                    <th scope="col">Is/completed</th>
                    <th scope="col">Feature</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($TaskNotComplete as $task)
                    <tr class="fw-normal" onclick="detailTask({{$task->id}})">
                    <td class="border-0">
                      {{$task->title}}
                    </td>
                    <td class="border-0 align-middle">{{$task->due_date}}</td>
                        <td class="border-0 align-middle">
                        <h6 class="mb-0"><span class="badge bg-danger">No</span></h6>
                        </td>
                    <td class="border-0 align-middle">
                      <a href="{{route('tasks.update',$task->id)}}" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                      <a href="{{route('tasks.delete',$task->id)}}" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
          <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            <div class="card mask-custom">
            <div class="card-body p-4 text-white">
              <div class="text-center pt-3 pb-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">Completed</h2>
              </div>
              <a href="{{route('tasks.create')}}" class="btn btn-info ms-2">New Task</a>
                <!-- <button type="submit" class="btn btn-info ms-2">New Task</button> -->
              <table class="table text-white mb-0" style="text-align: center">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Due_date</th>
                    <th scope="col">Is/completed</th>
                    <th scope="col">Feature</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($TaskCompleted as $task)
                    <tr class="fw-normal" onclick="detailTask({{$task->id}})">
                    <td class="border-0">
                      {{$task->title}}
                    </td>
                    <td class="border-0 align-middle">{{$task->due_date}}</td>
                        <td class="border-0 align-middle">
                        <h6 class="mb-0"><span class="badge bg-success">Yes</span></h6>
                        </td>
                    <td class="border-0 align-middle">
                      <a href="{{route('tasks.delete',$task->id)}}" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          </div>
</div>
        </div>
      </div>
    </div>
  </section>
@endsection
