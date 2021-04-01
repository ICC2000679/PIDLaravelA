@extends('layouts.app')

@section('title', 'Liste des types')

@section('content')
    <h1> Liste des {{$resource}} </h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>
                        <a href="{{ route('type_show', $type->id)}}">{{$type->type }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
