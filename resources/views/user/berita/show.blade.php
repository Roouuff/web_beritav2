@extends('layouts.app') {{-- Sesuaikan dengan layout publik/frontend milikmu --}}

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <a href="{{ url('/') }}" class="text-decoration-none text-muted mb-3 d-block">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>

            <span class="badge bg-primary text-white px-3 py-2 mb-2">{{ $article->category->name }}</span>
            <h1 class="fw-bold mb-3">{{ $article->title }}</h1>
            <p class="text-muted mb-4">
                <i class="far fa-calendar-alt"></i> Diterbitkan pada {{ $article->created_at->format('d F Y') }}
            </p>

            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded w-100 mb-4 shadow-sm" alt="{{ $article->title }}" style="max-height: 500px; object-fit: cover;">
            @endif

            <div class="article-content" style="font-size: 1.1rem; line-height: 1.8;">
                {{-- Gunakan {!! !!} jika konten mengandung tag HTML (misal dari WYSIWYG editor), atau nl2br() untuk teks biasa --}}
                {!! nl2br(e($article->content)) !!}
            </div>

            <div class="mt-5 mb-4">
                <h6 class="fw-bold"><i class="fas fa-tags"></i> Tags:</h6>
                @forelse($article->tags as $tag)
                    <span class="badge bg-light text-dark border me-1 mb-1 px-2 py-1">#{{ $tag->name }}</span>
                @empty
                    <span class="text-muted small">Tidak ada tag</span>
                @endforelse
            </div>

            <hr class="my-5">

            <div class="card shadow-sm border-0 bg-light p-4 rounded">
                <div class="d-flex align-items-center">
                    <div class="me-4 d-none d-md-block">
                        <i class="fas fa-user-circle fa-5x text-secondary"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Ditulis oleh: {{ $article->user->name }}</h5>
                        
                        {{-- Cek apakah relasi profil One-to-One ada --}}
                        @if($article->user->profile)
                            @if($article->user->profile->phone)
                                <p class="text-primary mb-2 small">
                                    <i class="fas fa-phone-alt"></i> {{ $article->user->profile->phone }}
                                </p>
                            @endif
                            
                            @if($article->user->profile->bio)
                                <p class="mb-0 text-muted font-italic">
                                    "{{ $article->user->profile->bio }}"
                                </p>
                            @else
                                <p class="mb-0 text-muted">Penulis ini belum menuliskan biografi.</p>
                            @endif
                        @else
                            <p class="mb-0 text-muted">Informasi profil tidak tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection