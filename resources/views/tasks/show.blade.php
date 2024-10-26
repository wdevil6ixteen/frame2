@extends('layouts.app')

@section('title', 'Задача ' . $task['id'])

@section('content')
    <x-task 
        title="{{ $task['title'] }}" 
        description="Описание задачи." 
        createdAt="{{ now()->format('d-m-Y') }}" 
        updatedAt="{{ now()->format('d-m-Y') }}" 
        status="Не выполнена" 
        priority="Средний" 
        assignee="Имя пользователя" 
    />
@endsection
