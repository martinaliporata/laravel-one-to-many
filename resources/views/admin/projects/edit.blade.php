@extends(('admin.projects.layouts.create-or-edit'))

@section('page-title')
    Edit project
@endsection

@section('form-action')
    {{route('admin.projects.update', $project)}}
@endsection

@section('form-method')
    @method("PUT")
@endsection
