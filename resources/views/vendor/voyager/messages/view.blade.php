@extends('voyager::master')
@section('css')
    <link rel="stylesheet" href="{{ asset("admin/messages/css/style.css") }}">
@stop

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            Messages View
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if($message->name) <p>Имя:</p><h3>{{ $message->name }}</h3> @endif
                        @if($message->email) <p>Эл. Почта:</p> <h3>{{ $message->email }}</h3> @endif
                        @if($message->phone) <p>Телефон:</p><h3>{{ $message->phone }}</h3> @endif
                        @if($message->subject) <p>Тема обращение:</p><h3>{{ $message->subject }}</h3> @endif
                        @if($message->text) <p>Текст:</p><h3>{{ $message->text }}</h3> @endif
                    </div>
                </div>
                <a href="{{ route('message.index') }}" class="btn btn-sm btn-primary">
                    <i class="voyager-angle-left"></i> Назад
                </a>
            </div>
        </div>
    </div>

@stop
