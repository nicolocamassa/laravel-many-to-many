@extends('layouts.admin')

@section('content')
    <div>
        {{ $project->title }}
        <img src="{{ asset('/storage/' . $project->image) }}" alt="">
        {{ $project->languages }}
    </div>
@endsection