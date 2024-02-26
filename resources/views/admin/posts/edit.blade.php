@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>{{$post->title}}</h1>
          </div>


          <div class="col-12">

               <form action="{{route('admin.posts.update',$post->id)}}" method="post">

                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                         <input type="text" name="title" id="title" class="form-control" placeholder="title" required
                              value="{{ $post->title}}">
                    </div>
                    <div class="form-group my-3">
                         <textarea name="description" id="description" class="form-control" rows="9" cols="100"
                              placeholder="description" required>{{ $post->description}}
                         </textarea>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="owner" id="owner" class="form-control" placeholder="owner" required
                              value="{{ $post->owner}}">
                    </div>
                    <div class="form-group my-3">
                         <button class="btn btn-success">salva</button>
                    </div>
               </form>

          </div>
     </div>
</div>
@endsection