<!-- Detalle de una Guía - show.blade.php -->
<div class="container mt-5">
    <div class="card custom-card shadow-lg p-4 mb-5">
        <h1 class="text-primary text-center">{{ $guide->title }}</h1>

        <div class="info-section">
            <h2>📂 Categoria:</h2>
            <p class="text-muted">{{ $guide->category }}</p>
        </div>

        <div class="info-section">
            <h2>📄 Resum:</h2>
            <p>{{ $guide->summary }}</p>
        </div>

        <div class="info-section">
            <h2>📝 Introducció</h2>
            <p class="text-justify">{!! $guide->introduction_rendered !!}</p>
        </div>

        <div class="info-section">
            <h2>✅ Passos</h2>
            <ul class="list-group custom-list">
                @foreach ($guide->steps as $step)
                    <li class="list-group-item">
                        <p>{{ $step['text'] ?? 'No disponible' }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('guides.index') }}" class="btn btn-primary btn-lg custom-btn">⬅ Tornar</a>
        </div>
    </div>
</div>

<style>
    /* Estilo general */
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .custom-card {
        border-radius: 15px;
        background: white;
        padding: 30px;
    }

    h1 {
        font-size: 2rem;
        font-weight: bold;
    }

    h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 20px;
    }

    p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .info-section {
        margin-bottom: 20px;
    }

    .custom-list .list-group-item {
        border-radius: 10px;
        margin-bottom: 10px;
        background: #f1f1f1;
        padding: 15px;
    }

    /* Botón principal */
    .custom-btn {
        background-color: #007bff;
        color: white;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 1.2rem;
        transition: all 0.3s ease-in-out;
    }

    .custom-btn:hover {
        background-color: #004a99;
        transform: scale(1.05);
    }
</style>