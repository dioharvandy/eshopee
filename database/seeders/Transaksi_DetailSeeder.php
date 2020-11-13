<?php

namespace Database\Seeders;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use Illuminate\Database\Seeder;

class Transaksi_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = Transaksi::factory(5)->create();
        $barangs = Barang::get();
        foreach($transaksis as $transaksi){
            foreach($barangs as $barang){
            Transaksi_detail::factory(5)->create(['transaksi_id' => $transaksi->id, 'barang_id'=> $barang->id]);
        }}
    }
}
