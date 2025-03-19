<!-- Listado de Guías - index.blade.php -->
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">📚 Tutorials de iFixit</h1>

        <form method="GET" action="{{ route('guides.index') }}" class="d-flex">
            <input type="text" name="search" class="form-control search-bar" placeholder="🔍 Cerca un tutorial..." value="{{ request('search') }}">
        </form>
    </div>

    <div class="list-group">
        @foreach($guides as $guide)
            <a href="{{ route('guides.show', $guide) }}" class="list-group-item list-group-item-action shadow-sm mb-3 rounded custom-guide">
                <h2 class="text-primary">{{ $guide->title_translated ?? $guide->title }}</h2>
                <h3 class="text-muted">{{ $guide->summary_translated ?? $guide->summary }}</h3>
            </a>
        @endforeach
    </div>

    <div class="mt-4 text-center">
        {{ $guides->links() }}
    </div>
</div>

<style>
    /* Buscador estilizado */
    .search-bar {
        font-size: 1.2rem;
        padding: 12px;
        border-radius: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        width: 300px;
        border: 2px solid #007bff;
    }

    .search-bar:focus {
        border-color: #004a99;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    /* Tarjeta de cada tutorial */
    .custom-guide {
        padding: 20px;
        border-radius: 15px;
        transition: all 0.3s ease-in-out;
        background-color: white;
    }

    .custom-guide:hover {
        background-color: #e9f5ff;
        transform: scale(1.02);
    }

    h2 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    h3 {
        font-size: 1.2rem;
        font-weight: normal;
        color: #6c757d;
    }
</style>