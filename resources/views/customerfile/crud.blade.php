@extends('base')


@section('content')
<style>
    #con{
        /* justify-content: center; */
        width: auto;   
    }
</style>



    <x-navbar/>
    
        <div class="container-fluid d-flex mx-5 my-5" id="con">
            <div class="row m-auto d-flex offset-md-2 mt-5">
                <div class="col-sm-4">
                    @if (session('message'))
                        <div class="alert alert-success">{{(session('message'))}}</div>
                    @endif
                <livewire:crudfile.create/>
                </div>
    
                <div class="col-sm-8">
                <livewire:crudfile.index/>
                </div>
            </div>
        </div>
    
    
 

@endsection