@extends('layouts.app')

@section('content')
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">Список</h4>

                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Название списка</th>
                                        <th scope="col">Кол-во задач</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Buy groceries for next week</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createList">
                                Создать список
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modals')
    @include('modals.__create-list')
@endsection

@section('scripts')
    @vite('resources/js/lists.js')
@endsection
