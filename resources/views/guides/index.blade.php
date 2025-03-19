<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Tutorials de iFixit</h1>

        <form method="GET" action="{{ route('guides.index') }}" class="d-flex">
            <input type="text" name="search" class="form-control search-bar" placeholder="Cerca un tutorial..." value="{{ request('search') }}">
        </form>
    </div>

    <div class="list-group">
    @foreach($guides as $guide)
        <a href="{{ route('guides.show', $guide) }}" class="list-group-item list-group-item-action shadow-sm mb-3 rounded">
            <h2 class="text-primary">{{ $guide->title_translated ?? $guide->title }}</h2>
            <h3 class="text-muted">{{ $guide->summary_translated ?? $guide->summary }}</h3>
            <br>
        </a>
    @endforeach
</div>

    <div class="mt-4 text-center">
        {{ $guides->links() }}
    </div>
</div>

<style>
    /* Estilos generales */
    h1 {
        color: #007bff; /* Un azul más vibrante */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente moderna */
    }
    h2 {
        font-size: 1.5rem; /* Aumentar el tamaño del título */
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    h3 {
        font-size: 1.2rem;
        font-weight: 400;
    }

    .search-bar {
        font-size: 1.1rem; /* Más grande y cómodo para la lectura */
        padding: 12px; /* Más espacio interno */
        border-radius: 30px; /* Bordes redondeados */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        transition: all 0.3s ease; /* Suave transición */
        width: 300px; /* Ancho fijo para el buscador */
    }

    .list-group {
        margin-top: 30px; /* Separación superior */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente moderna */
    }

</style>
