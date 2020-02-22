@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Specifications</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>@sortablelink('model', 'Model name')</th>
                                <th>@sortablelink('ver', 'Ver')</th>
                                <th>@sortablelink('num', 'Num')</th>
                                <th>@sortablelink('manufacturer', 'Manufacturer')</th>
                                <th>@sortablelink('vender_id', 'VenderId')</th>
                                <th>@sortablelink('year', 'Year')</th>
                                <th>@sortablelink('week', 'Week')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($specifications as $specification)
                            <tr>
                                <td>{{ $specification->model }}</td>
                                <td>{{ $specification->ver }}</td>
                                <td>{{ $specification->num }}</td>
                                <td>{{ $specification->manufacturer }}</td>
                                <td>{{ $specification->vender_id }}</td>
                                <td>{{ $specification->year }}</td>
                                <td>{{ $specification->week }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-centered">
                        {{ $specifications->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
