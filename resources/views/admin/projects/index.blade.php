@extends('layouts.admin')

@section('content')
<div class="container py-5 px-0">
    <div class="row">
      
            @foreach ($projects as $project)

                <div class="col-sm-12 col-md-6 col-lg-3">
                  
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card_content">
                          @if($project->image !== null)
                            <img src="{{ asset('/storage/' . $project->image) }}" alt="">
                          @else
                          <img src="{{ asset('/img/placeholder.svg') }}" alt="">
                          @endif
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->title }}</h5>
                          <p class="card-text">{{ $project->description }}</p>
                        
                          <h1>{{ $project->type ?  $project->type->type_name : 'Niente'}}</h1>

                          <div class="d-flex">

                            <a href="{{ route('admin.projects.show', ['project' => $project->id])}}" class="btn btn-primary me-1">View More</a>
                            <a href="{{ route('admin.projects.edit', ['project' => $project->id])}}" class="btn btn-warning me-1"><i class="fas fa-pencil"></i></a>

                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $project->id }}">
                              <i class="fas fa-trash"></i>
                            </button>
                            
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                        
                </div>
                @include('admin.projects.partials.modal')
            @endforeach
            
    </div>
    
</div>


@endsection
