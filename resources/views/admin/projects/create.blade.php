@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data" class="mx-auto p-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="text" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                name="description" >{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="exampleInputPassword1"
                name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Language</label>
            <select class="form-select @error('languages') is-invalid @enderror" name="languages">
                <option value="{{ old('languages') }}">{{ old('languages') ? old('languages') : 'Language' }}</option>
                <option value="Italiano">Italiano</option>
                <option value="Inglese">Inglese</option>
                <option value="Spagnolo">Spagnolo</option>
            </select>
            @error('language')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div for="technologies" class="form-label">Technologies</div>
            
                @foreach($technologies as $technology)
                <div class="form-check-inline">
                    <div>
                        <input class="form-check-input" name="technology[]" value="{{ $technology->id }}" type="checkbox" id="technology-{{ $technology->id }}" {{ is_array(old('technology')) && in_array($technology->id, old('technology')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="technology">
                            {{ $technology->technology }}
                        </label>
                    </div>
                </div>
                @endforeach
            
            @error('language')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                    <option value="">Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : $type->type_name }}>{{ $type->type_name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status">
                    <option value="{{ old('status') }}">{{ old('status') ? old('status') : 'Project Status' }}</option>
                    <option value="Iniziale">Iniziale</option>
                    <option value="In corso">In corso</option>
                    <option value="Completato">Completato</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
