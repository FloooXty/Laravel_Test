<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <h1 class="text-3xl font-bold mb-6">Daftar Home</h1>

  @foreach ($homes as $home)
    <article class="py-4 border-b border-gray-300">
      <h2 class="text-2xl font-semibold">{{ $home['nama'] }}</h2>
      <p>NIM: {{ $home['nim'] }}</p>
      <p>Alamat: {{ $home['alamat'] }}</p>

      <a href="/homes/{{ $home['id'] }}" class="text-blue-500 hover:underline">
        Lihat Detail &raquo;
      </a>
    </article>
  @endforeach
</x-layout>