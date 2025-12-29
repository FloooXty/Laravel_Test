<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <h1 class="text-3xl font-bold mb-4">Detail Home</h1>

  <article class="py-4 max-w-screen-md">
    <h2 class="text-2xl font-semibold">{{ $home['nama'] }}</h2>
    <p class="mt-2"><b>NIM:</b> {{ $home['nim'] }}</p>
    <p class="mt-2"><b>Alamat:</b> {{ $home['alamat'] }}</p>

    <a href="/homes" class="text-blue-500 hover:underline mt-4 block">
      &laquo; Kembali ke Daftar
    </a>
  </article>
</x-layout>