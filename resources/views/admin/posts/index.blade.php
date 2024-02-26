@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>I miei progetti</h1>
          </div>

          <div class="col-12 text-left p-3">
               <a href="{{route('admin.posts.create')}}">crea nuovo progetto</a>

          </div>

          <div class="col-12">

               <table class="table table-striped vw-100">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Titolo</th>
                              <th>Owner</th>
                              <th>azioni</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach($posts as $post)
                         <tr>
                              <td>{{$post->id}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->owner}}</td>
                              <td>
                                   <button>
                                        <a href="{{route('admin.posts.edit',['post'=>$post])}}"
                                             class="btn btn-primary my-2">modifica
                                        </a>
                                   </button>
                                   <button>
                                        <a href="{{route('admin.posts.show',['post'=>$post->slug])}}">
                                             visalizza
                                        </a>
                                   </button>
                                   <button>boh</button>
                              </td>
                         </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
</div>
@endsection