@extends('formTemplate')

@section('contenu')
    {!! Form::open(['url'=>'users']) !!}
        {!! Form::label('nom','Entrer votre nom') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection