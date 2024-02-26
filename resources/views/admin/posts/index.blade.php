@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>I miei progetti</h1>
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
                                   <button>ca</button>
                                   <button>mo</button>
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