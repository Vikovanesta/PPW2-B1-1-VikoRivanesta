@extends('layouts.app')

@section('content')    
    <div class="relative overflow-x-auto">
        <table class="w-full text-md text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarBarang as $barang)    
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $barang->nama_barang }}
                    </th>
                    <td class="px-6 py-4">
                        {{ "Rp ".number_format($barang->harga, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $barang->stok }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
