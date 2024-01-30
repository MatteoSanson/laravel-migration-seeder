<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Train Station</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container text-center">
            <h1 class="py-3">Laravel Train Station</h1>
        </div>
    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title text-right">{{ $train['azienda'] }}</h5>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p><strong>Partenza:</strong> {{ $train['stazione_partenza'] }}</p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <p><strong>Codice-Treno:</strong> {{ $train['codice_treno'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Arrivo:</strong> {{ $train['stazione_arrivo'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p><strong>Data Partenza:</strong> {{ $train['giorno_partenza'] }}
                                            <strong>ore:</strong> {{ $train['orario_partenza'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <p><strong>N carrozze:</strong> {{ $train['n_carrozze'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p><strong>Data Arrivo:</strong> {{ $train['giorno_arrivo'] }}
                                            <strong>ore:</strong> {{ $train['orario_arrivo'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <p><strong>Binario d'arrivo:</strong> {{ $train['binario_arrivo'] }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <p><strong>In Orario:</strong>
                                            {{ $train['in_orario'] ? 'Si' : 'No' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Cancellato:</strong> {{ $train['cancellato'] ? 'Si' : 'No' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
