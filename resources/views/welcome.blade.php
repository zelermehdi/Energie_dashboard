<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Gestion d'Énergie Renouvelable</title>
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">


    <style>
        /* Custom styles */
        .animate-fade-in-down {
            animation: fadeInDown 2s ease-in-out;
        }
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: background-color 0.2s;
        }
    </style>
</head>
<body class="bg-blue-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center animate-fade-in-down">
            <img src="{{ asset('storage/image/logo.png') }}" alt="Logo Énergie Renouvelable" class="mx-auto mb-4" style="width: 150px;"> <!-- Ajoutez ici le chemin vers votre logo -->
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Plateforme de Suivi de Gestion</h1>
            <p class="text-xl text-gray-600 mb-4">des Installations d'Énergie Renouvelable</p>
            <div class="space-x-4">
                <a href="/login" class="btn bg-blue-500 text-white hover:bg-blue-600">
                    Connexion
                </a>
                <a href="/register" class="btn bg-green-500 text-white hover:bg-green-600">
                    Inscription
                </a>
                <a href="/google-auth/redirect" class="btn bg-red-500 text-white hover:bg-red-600 flex items-center justify-center">
                    <i class="fab fa-google mr-2" style="color: blue;"></i> Google
                </a>
                
            </div>
        </div>
    </div>


</body>
</html>



{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenue sur votre tableau de bord.</p>


    
    <!-- Votre contenu ici -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}




