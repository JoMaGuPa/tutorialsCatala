
<div class="container mt-5">
    <div class="card shadow-lg p-4 mb-5 bg-white rounded">
        <h1>{{ $guide->title }}</h1>
        <h2>Categoria: </h2>
        <p>{{ $guide->category }}</p>
        <h2>Resum: </h2>
        <p>{{ $guide->summary }}</p>
        <h2>Introducció</h2>

        <p class="text-justify">{!! $guide->introduction_rendered !!}</p>

        <h2>Passos</h2>
        <ul class="list-group">
            @foreach ($guide->steps as $step)
                @if (isset($step['text']))
                    <li class="list-group-item">
                        <p>{{ $step['text'] }}</p>
                    </li>
                @else
                    <li class="list-group-item">
                        <p>No disponible</p>
                    </li>
                @endif
            @endforeach
        </ul>
    <br>
        <div class="mt-4 text-center">
            <a href="{{ route('guides.index') }}" class="btn btn-primary btn-lg">Tornar</a>
        </div>
    </div>
</div>

<style>
    h1 {
        color: #007bff; /* Un azul más vibrante */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente moderna */
    }
    
    h2 {
        font-weight: bold;
        margin-bottom: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente moderna */
    }
    p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente moderna */
    }
    
    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 10px 20px;
        font-size: 1.3rem;
        text-decoration: none;
    }
    .btn-primary:hover {
        background-color:rgb(3, 52, 104);
        color: white;
        text-decoration: none;
    }
    
</style>

