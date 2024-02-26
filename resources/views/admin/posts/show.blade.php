@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>{{$post->title}}</h1>
          </div>


          <div class="col-12">

               <h5 class="p-3">Owner: {{$post->owner}}</h5>

               <div class="p-5">
                    <h5>Description</h5>
                    <p>
                    {{$post->description}}
                    </p>

               </div>

          </div>
     </div>
</div>
@endsection