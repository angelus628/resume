@extends('layouts.admin')

@section('content')
<h4>Quisiera contactar contigo.</h4>

<table class="table">
    <tbody>
        <tr>
            <td>Quien envía: {{ $sender }}</td>
        </tr>
        <tr>
            <td>Nombre: {{ $name }}</td>
        </tr>
        <tr>
            <td>Asunto: {{ $subject }}</td>
        </tr>
        <tr>
            <td>Mensaje: {{ $content }}</td>
        </tr>
    </tbody>
</table>

Gracias,<br>
{{ config('app.name') }}
@endsection
