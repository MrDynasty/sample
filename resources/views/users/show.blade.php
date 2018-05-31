@extends('layouts.default')
@section('title',$user->name)
@section('content')
	{{-- expr --}}
	{{ $user->name }} - {{ $user->email }}
@stop

