@extends('voyager::master')
@section('css')
    <link rel="stylesheet" href="{{ asset("admin/messages/css/style.css") }}">
@stop

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
           Messages
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table>
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->phone }}</td>
                                <td class="@if(!$message->is_seen) unread @endif"> @if($message->is_seen) Прочитано @else <span>Не Прочитано<sup>*</sup> </span>  @endif </td>
                                <td>
                                    <button class="btn btn-sm btn-danger pull-right delete" onclick="document.getElementById('message_{{$message->id}}').submit();">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </button>
                                    <a href="{{ route('message.view', $message->id) }}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                                    </a>
                                    <form id="message_{{$message->id}}" action="{{ route('message.delete', $message->id) }}" method="post" style="display: none">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
