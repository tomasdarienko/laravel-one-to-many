@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>{{$post->title}}</h1>
          </div>


          <div class="col-12">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                         @endforeach
                    </ul>
               </div>
               @endif
               <form action="{{route('admin.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">

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

                         @if($post->cover_image !== null)
                              <img src="{{asset('/storage/' . $post->cover_image)}}" alt="" width="200px">
                         @endif

                         <input type="file" name="cover_image" id="cover_image" class="form-control"
                              placeholder="immagine">
                    </div>

                    <div class="form-group my-3">
                         <button class="btn btn-success">salva</button>
                    </div>
               </form>

          </div>
     </div>
</div>
@endsection