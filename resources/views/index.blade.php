<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container">
          <a class="navbar-brand text-light" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="mx-auto navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="#">List Film</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Kategori</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <h1>List Film</h1>
    
        <form method="GET" action="{{ route('films.index') }}" class="mb-4">
            <div class="row">
                <!-- Input Pencarian -->
                <div class="col-md-6">
                    <input 
                        type="text" 
                        name="search" 
                        class="form-control" 
                        placeholder="Cari film..." 
                        value="{{ request('search') }}">
                </div>
    
                <div class="col-md-4">
                    <select name="category" class="form-select">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" 
                                {{ request('category') == $category['id'] ? 'selected' : '' }}>
                                {{ $category['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
            </div>
        </form>
    
        <div class="row">
            @forelse ($films as $film)
                <div class="col-md-4">
                    <div class="card mb-2" style="width: 20rem;">
                        <video class="card-img-top" controls>
                            <source src="{{ asset($film['video_path']) }}" type="video/mp4">
                            Browser Anda tidak mendukung pemutar video.
                        </video>
                        <div class="card-body">
                            <h5 class="card-title">{{ $film['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                {{ $film['category']['name'] ?? 'Tanpa Kategori' }}
                            </h6>
                            <p class="card-text">{{ $film['description'] }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Film tidak ditemukan.</p>
            @endforelse
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>