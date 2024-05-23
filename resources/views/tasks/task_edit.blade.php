@extends('tasks.Layouts.base')
@section('title','Edit task')
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
                <h2 class="my-4">Task edit</h2>
              </div>
                <!-- <button type="submit" class="btn btn-info ms-2">New Task</button> -->
@include('tasks.alert')
<form action="{{route('tasks.edit_post',$task->id)}}" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="enter title" value="{{$task->title}}">
                  </div>
                  <div class="form-group">
                    <label for="Due date">Due date</label>
                    <input type="date" class="form-control" name="due_date" id="Due_date" value="{{$task->due_date}}">
                  </div>
                  <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" name="description" id="Description" value="{{$task->description}}">
                  </div>
                  <div class="form-group">
                    <label for="Is_completed">Is completed</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="is_completed" {{$task->is_completed==1?'checked=""':''}} value="1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="is_completed" {{$task->is_completed==0?'checked=""':''}} value="0">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-light btn-lg px-5">Submit</button>
                </div>
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

