@include('layouts.app')

<div class="container p-4 ">
    <p>
        Lista di Progetti
        
    </p>
    <div class="row-col-2">
        <a class="btn btn-primary" href="{{route("admin.projects.create")}}">Aggiungi un progetto</a>
        <a class="btn btn-success" href="{{url('/')}}">Home</a>

    </div>


</div>
