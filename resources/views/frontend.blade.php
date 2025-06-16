@extends('template')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">Daftar Link</h1>

    @php
        $pertemuan = [
            [
                'judul' => '13 Maret 2025',
                'tugas' => [
                    ['judul' => 'Firts Commit', 'url' => 'pertama'],
                    ['judul' => 'pertemuan 3', 'url' => 'pertemuan3'],
                ],
            ],
            [
                'judul' => '20 Maret 2025',
                'tugas' => [
                    ['judul' => 'Pertemuan 4', 'url' => 'pertemuan4']
                ],
            ],
            [
                'judul' => '16 April 2025',
                'tugas' => [
                    ['judul' => 'Tugas Linktree', 'url' => 'linktree']
                ],
            ],
            [
                'judul' => '17 April 2025',
                'tugas' => [
                    ['judul' => 'Pertemuan 7 - js1', 'url' => 'js1'],
                    ['judul' => 'Pertemuan 7 - validasi1', 'url' => 'validasi1']
                ],
            ],
            [
                'judul' => '8 Maret 2025',
                'tugas' => [
                    ['judul' => 'ETS', 'url' => 'ets']
                ],
            ],
        ];
    @endphp

    @foreach ($pertemuan as $p)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                {{ $p['judul'] }}
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($p['tugas'] as $tugas)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $tugas['judul'] }}
                        <a href="{{ $tugas['url'] }}" class="btn btn-sm btn-outline-primary" target="_blank">Lihat</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach

</div>

@endsection