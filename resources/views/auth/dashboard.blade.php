@extends('base')

@section('content')

<!-- <div class="container col-md-6 offset-md-3 mt-5">

<h1>
    Welcome to dashboard
</h1>

<a href="{{'/logout'}}">
    <button class="btn btn-primary mt-3">
        Logout
    </button>
    </a>

</div> -->
<style>
      #seto{
        width: 400px;
      }
    </style>


<x-navbar/>


<h1 class="text-center mt-5">Welcome to Dashboard</h1>




@yield('contents')



@endsection