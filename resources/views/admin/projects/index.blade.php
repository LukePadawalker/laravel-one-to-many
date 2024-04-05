@include('layouts.app')

<div class="container p-4 ">
    <p>
        @foreach($projects as $project)
        <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->getDate($project->created_at) }}</td>
                <td>{{ $project->getDate($project->updated_at) }}</td>
                <td>
                    @if($project->type)
                        <span class="badge rounded-pill" style="background-color: {{$project->type->color}}">
                            {{-- <a href="{{route('admin.types.show', $project->type->id)}}"></a> --}}
                            {{$project->type->label}}
                        </span>
                    @else 
                        Nessuno
                    @endif
                </td>
                <td>
                    <div class="d-flex justify-content-end gap-3">
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary"><i
                                class="fa-regular fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen"></i></a>
                        
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form" data-bs-toggle="modal" data-bs-target="#delete-modal" data-project="{{$project->title}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                        </form>

                    </div>
                </td>
                
            </tr>

        @endforeach
        
    </p>
    <div class="row-col-2">
        <a class="btn btn-primary" href="{{route("admin.projects.create")}}">Aggiungi un progetto</a>
        <a class="btn btn-success" href="{{url('/')}}">Home</a>

    </div>


</div>
