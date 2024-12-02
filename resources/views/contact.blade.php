<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:css>
        <style>
            .body {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card {
                text-align: center;
                background-color: #5599ff50;
                border-radius: 24px;
                width: 500px;
                height: 160px;
            }
        </style>
    </x-slot:css>
    <div class="card">
        <h3>Nama : {{ $nama }}</h3>
        <h3>Kelas : {{ $kelas }}</h3>
        <h3>LinkedIn : <a href="https://www.linkedin.com/in/satria-samudra-97ba9b293/">{{ $LinkedIn }}</a></h3>
        <h3>Repository : <a href="https://github.com/Anzuhaa?tab=repositories">{{ $github }}</a></h3>
    </div>
</x-layout>
