@extends('layouts.app')
@section('title')
    Student Create
@endsection
@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mt-5">
                <div class="card-header  bg-dark text-white">
                  <h3 class="card-title float-left"><strong>Create Student</strong></h3>
              
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                


              @include('partialFolder.errors')

                <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="name"> Name: </label>
                          <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" value="">
                        </div>
                        <div class="form-group">
                          <label for="cgpa"> CGPA: </label>
                          <input type="text" class="form-control" placeholder="Enter CGPA" id="title" name="cgpa" value="">
                        </div>

                        <div class="form-group">
                            <label for="batch"> Batch: </label>
                            <input type="text" class="form-control" placeholder="Enter title" id="title" name="batch" value="">
                          </div>
             


                          
                
            



              <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a href="{{ URL::previous() }}" class="btn btn-danger wave-effect" >Back</a>
              </div>
                      

                  </form>
                 
                  
                </div>
               
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
    </div> --}}

    Hello
</div>

@endsection