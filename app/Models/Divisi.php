<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Muhammad Iqbal",
            "jabatan" => "Ketua",
            "foto" => "iqbal.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Muhammad Ridha",
            "jabatan" => "Wakil Ketua",
            "foto" => "ridha.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Al Munawar",
            "jabatan" => "Sekretaris",
            "foto" => "al.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Lisa Uliana",
            "jabatan" => "Bendahara",
            "foto" => "Lisa.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Alif Hafif",
            "jabatan" => "Koordinator Internal",
            "foto" => "Alif.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Ade Bagus Wardhana",
            "jabatan" => "Wakil Koordinator Internal",
            "foto" => "ade.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Shahlan",
            "jabatan" => "Koordinator External",
            "foto" => "shahlan.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Anindya Hilmi Pradipta",
            "jabatan" => "Wakil Koordinator External",
            "foto" => "nindi.gif",
            "divisi" => "teras",
        ],

        // Adm
        [
            "nama" => "Julia Fitri Pohan",
            "jabatan" => "Ketua",
            "foto" => "julia.gif",
            "divisi" => "adm",
        ],
        [
            "nama" => "Meisin",
            "jabatan" => "Wakil Ketua",
            "foto" => "meisin.gif",
            "divisi" => "adm",
        ],
        [
            "nama" => "Taufik Habib Ansyari Siregar",
            "jabatan" => "Anggota",
            "foto" => "habib.gif",
            "divisi" => "adm",
        ],
        [
            "nama" => "Rifqial Ikhwal",
            "jabatan" => "Anggota",
            "foto" => "rifkial.gif",
            "divisi" => "adm",
        ],

        // Agama
        [
            "nama" => "Mahesa Anabrang Reglisalo",
            "jabatan" => "Ketua",
            "foto" => "mahesa.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Fadhlul Rahmat",
            "jabatan" => "Wakil Ketua",
            "foto" => "fadhlul.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Mutia Zahara",
            "jabatan" => "Anggota",
            "foto" => "mutia.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Aprian Gigin Prasetia",
            "jabatan" => "Anggota",
            "foto" => "gigin.gif",
            "divisi" => "agama",
        ],

        // Kaderisasi
        [
            "nama" => "Ananda",
            "jabatan" => "Ketua",
            "foto" => "Ananda.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Alvin Alvesaldy",
            "jabatan" => "Wakil Ketua",
            "foto" => "alvin.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Hilda Zulfira",
            "jabatan" => "Anggota",
            "foto" => "hilda.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Brucel Duta Samudera",
            "jabatan" => "Anggota",
            "foto" => "brucel.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Rizki Fadhilah Ramadhani",
            "jabatan" => "Anggota",
            "foto" => "fadhillah.gif",
            "divisi" => "kaderisasi",
        ],

        // minat & bakat
        [
            "nama" => "Riski Yanti",
            "jabatan" => "Ketua",
            "foto" => "yanti.gif",
            "divisi" => "bakat",
        ],
        [
            "nama" => "Ega Ichsan Mulia",
            "jabatan" => "Wakil Ketua",
            "foto" => "ega.gif",
            "divisi" => "bakat",
        ],
        [
            "nama" => "Andre Maulana",
            "jabatan" => "Anggota",
            "foto" => "andre.gif",
            "divisi" => "bakat",
        ],
        [
            "nama" => "Muhammad Fahri Al-Fikri",
            "jabatan" => "Anggota",
            "foto" => "Fahri.gif",
            "divisi" => "bakat",
        ],
        [
            "nama" => "Mela Saphira",
            "jabatan" => "Anggota",
            "foto" => "fira.gif",
            "divisi" => "bakat",
        ],
        [
            "nama" => "Melly Yani",
            "jabatan" => "Anggota",
            "foto" => "melly.gif",
            "divisi" => "bakat",
        ],

        // iptek
        [
            "nama" => "Muhammad Bayu Juhri",
            "jabatan" => "Ketua",
            "foto" => "bayu.gif",
            "divisi" => "iptek",
        ],
        [
            "nama" => "Gilang Ramadhan Purba",
            "jabatan" => "Wakil Ketua",
            "foto" => "gilang-purba.gif",
            "divisi" => "iptek",
        ],
        [
            "nama" => "M. Akbar Husein Siregar",
            "jabatan" => "Anggota",
            "foto" => "husein.gif",
            "divisi" => "iptek",
        ],
        [
            "nama" => "Khairul Aqram",
            "jabatan" => "Anggota",
            "foto" => "akram.gif",
            "divisi" => "iptek",
        ],
        [
            "nama" => "Fajar Rivaldi Chan",
            "jabatan" => "Anggota",
            "foto" => "fajar-chan.gif",
            "divisi" => "iptek",
        ],

        // kwh
        [
            "nama" => "Farah Julianda",
            "jabatan" => "Ketua",
            "foto" => "farah.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Moulana Luthfiah",
            "jabatan" => "Wakil Ketua",
            "foto" => "moulana.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Khairul Muzakkir Alwy Lubis",
            "jabatan" => "Anggota",
            "foto" => "alwy.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Dini Dara Rizkya",
            "jabatan" => "Anggota",
            "foto" => "dini.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Hendra Putranta Limbong",
            "jabatan" => "Anggota",
            "foto" => "hendra.gif",
            "divisi" => "kwh",
        ],

        // Medikom
        [
            "nama" => "Wira Yudha Raharja",
            "jabatan" => "Anggota",
            "foto" => "yudha.gif",
            "divisi" => "medikom",
        ],
        [
            "nama" => "Rifky Firzani Marpaung",
            "jabatan" => "Wakil Ketua",
            "foto" => "Firza.gif",
            "divisi" => "medikom",
        ],
        [
            "nama" => "Riska Yolanda Putri",
            "jabatan" => "Anggota",
            "foto" => "yolanda.gif",
            "divisi" => "medikom",
        ],
        [
            "nama" => "OK Muhammad Majid",
            "jabatan" => "Anggota",
            "foto" => "Majid.gif",
            "divisi" => "medikom",
        ],
        [
            "nama" => "Fajar Maulana",
            "jabatan" => "Anggota",
            "foto" => "fajar-maulana.gif",
            "divisi" => "medikom",
        ],
        [
            "nama" => "Gilang Wahyu Ramadhan",
            "jabatan" => "Anggota",
            "foto" => "gilang-wahyu.gif",
            "divisi" => "medikom",
        ],

        // Humas 
        [
            "nama" => "Khairil Anwar",
            "jabatan" => "Ketua",
            "foto" => "anwar.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Farhan Ar Rafif",
            "jabatan" => "Wakil Ketua",
            "foto" => "farhan.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Nefo Priandre",
            "jabatan" => "Anggota",
            "foto" => "nefo.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Faris Bagaswara",
            "jabatan" => "Anggota",
            "foto" => "Bagas.gif",
            "divisi" => "humas",
        ],

        // jurnal
        [
            "nama" => "Manisha Oktavia Anggraini S",
            "jabatan" => "Ketua",
            "foto" => "manisha.gif",
            "divisi" => "jurnal",
        ],
        [
            "nama" => "Cut Nanda",
            "jabatan" => "Wakil Ketua",
            "foto" => "cut-nanda.gif",
            "divisi" => "jurnal",
        ],
        [
            "nama" => "Nadia Saphira",
            "jabatan" => "Anggota",
            "foto" => "nadia.gif",
            "divisi" => "jurnal",
        ],
    ];

    public static function all()
    {
        return collect(self::$pengurus);
    }

    public static function find($divisi)
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', $divisi);
    }

    public static function find2()
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', 'teras');
    }
}
