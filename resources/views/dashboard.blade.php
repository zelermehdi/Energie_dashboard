@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenue sur votre tableau de bord.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-wind"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Installations</span>
                    <span class="info-box-number">{{ $installationsCount }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-text">Utilisateurs</span>
                    <span class="info-box-number">{{ $usersCount }}</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fas fa-solar-panel"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-text">Installations</span>
                    <span class="info-box-number">{{ $installationsCount }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-exclamation-triangle"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-text">Alertes Actives</span>
                    <span class="info-box-number">{{ $activeAlertsCount }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-wrench"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-text">Maintenance en cours</span>
                    <span class="info-box-number">{{ $maintenanceCount }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" id="energyProductionChartLink">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-bolt"></i></span>
        
                <div class="info-box-content">
                    <span class="info-box-text">Énergie totale générée</span>
                    <span class="info-box-number">{{ $totalEnergyGenerated }} kWh</span>
                </div>
            </div>
        </div>
        
        <script>
            document.getElementById('energyProductionChartLink').addEventListener('click', function() {
                window.location.href = "{{ route('dashboard.energyProductionChart') }}";
            });
        </script>
        
        



        
            </div>

            

    <!-- Plus de contenu ici -->
@stop
