@extends('layouts.base')
@section('title', 'Главная')
@section('main')
    @if (count($bbs) > 0)
    <h1>Объявления</h1>
        <table>
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Цена, грн.</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bbs as $bb)
                    <tr>
                        <td>
                            {{ $bb->title }}
                        </td>
                        <td>{{ $bb->price }}</td>
                        <td>
                            {{-- <a href="/{{ $bb->id }}/">Подробнее...</a> --}}
                            <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @endsection('main')

