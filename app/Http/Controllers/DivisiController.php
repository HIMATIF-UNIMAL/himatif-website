<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;

class DivisiController extends Controller
{

    public function show($divisi)
    {
        $nama_divisi = $divisi;
        if ($nama_divisi == 'teras') {
            $nama_divisi = 'Pengurus Teras';
        } else if ($nama_divisi == 'adm') {
            $nama_divisi = 'Divisi ADM dan Kesekretariatan';
        } else if ($nama_divisi == 'agama') {
            $nama_divisi = 'Divisi Keagamaan dan Sosial';
        } else if ($nama_divisi == 'kaderisasi') {
            $nama_divisi = 'Divisi Pengembangan Organisasi dan Kaderisasi';
        } else if ($nama_divisi == 'humas') {
            $nama_divisi = 'Divisi Advokasi dan Humas';
        } else if ($nama_divisi == 'kwh') {
            $nama_divisi = 'Divisi Kewirausahaan';
        } else if ($nama_divisi == 'iptek') {
            $nama_divisi = 'Divisi Kajian Ilmiah dan IPTEK';
        } else if ($nama_divisi == 'jurnal') {
            $nama_divisi = 'Divisi Jurnalistik';
        } else if ($nama_divisi == 'medikom') {
            $nama_divisi = 'Divisi Media Informasi dan Komunikasi';
        } else {
            $nama_divisi = 'Divisi Minat dan Bakat';
        }
        return view('divisi', [
            'title' => $nama_divisi,
            'active' => 'profile',
            'nama_divisi' => $nama_divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
