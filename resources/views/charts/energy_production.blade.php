@extends('adminlte::page')

@section('title', 'Production d\'Énergie')

@section('content_header')
    <h1>Production d'Énergie</h1>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Filtrer la Production d'Énergie</h3>
        </div>
        <form action="{{ route('dashboard.energyProductionChart') }}" method="GET">
            <div class="card-body">
                <!-- Date range -->
                <div class="form-group">
                    <label>Date de début:</label>
                    <div class="input-group date" id="start_date" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" data-target="#start_date" name="start_date" required/>
                        <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Date de fin:</label>
                    <div class="input-group date" id="end_date" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" data-target="#end_date" name="end_date" required/>
                        <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Filtrer</button>
                @if(session('message'))
                <div class="alert alert-{{ session('alert-type', 'info') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    @if(session('alert-type') == 'success')
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                    @else
                        <h5><i class="icon fas fa-info"></i> Info!</h5>
                    @endif
                    {{ session('message') }}
                </div>
            @endif
            </div>
        </form>
    </div>
    
@stop

@section('content')
    <canvas id="energyProductionChart"></canvas>
@stop

@section('js')
    <!-- Inclusion de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('energyProductionChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line', 
                data: {!! json_encode($chartData) !!}, 
                options: {}
            });
        });
    </script>
@stop

