@extends('layouts.app')



<form action="{{ route("admin.projects.store")}}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome del progetto</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Contenuto del progetto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Seleziona una categoria</option>
        <option value="1">Front-end</option>
        <option value="2">Back-end</option>
        <option value="3">Fullstack</option>
    </select>
    <a href="{{route("admin.projects")}}" class="btn btn-primary">Torna ai progetti</a>

    
</form>