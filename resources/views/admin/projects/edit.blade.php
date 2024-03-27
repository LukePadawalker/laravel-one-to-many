@include('layouts.app')

<div class="container p-4">
    <form action="{{ route("admin.projects.update")}}" method="POST" enctype="multipart/form-data">
    
        @csrf
    
        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nome del progetto</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Personal portfolio">
    
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Slug</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Contenuto del progetto</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="formFile" class="form-label">Inserisci Categoria</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleziona una categoria</option>
                    <option value="1">Front-end</option>
                    <option value="2">Back-end</option>
                    <option value="3">Fullstack</option>
                </select>

            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Inserisci immagine di copertina</label>
                    <div class="d-flex" >
                        <img src="{{ asset('storage/')}}" alt="copertina">
                        <input class="form-control" type="file" id="formFile">

                    </div>
                </div>

    
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{route("admin.projects")}}" class="btn btn-primary">Torna ai progetti</a>
            </div>

        </div>
    
        
    </form>

</div>
