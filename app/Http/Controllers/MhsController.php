<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index(Request $request){
        $daftarMahasiswa = [
            ['nim' => '17090001', 'nama' => 'Agung Sahrul Bahri', 'kelas' => '6A'],
            ['nim' => '17090002', 'nama' => 'Ari Abdurrahman Gufron', 'kelas' => '6B'],
            ['nim' => '17090003', 'nama' => 'Haris Stalas', 'kelas' => '6C'],
            ['nim' => '17090004', 'nama' => 'Aldo Januar', 'kelas' => '6D'],
        ];

        if($request->query('kelas')){
            $daftarMahasiswa = array_filter($daftarMahasiswa, function($kelas){
                return $kelas['kelas'] == request()->kelas;
            });
        }
        return view('daftar-mahasiswa', compact('daftarMahasiswa'));
    }
    
    public function show($daftar){
        $daftarMahasiswa = [
            ['nim' => '17090001', 'nama' => 'Agung Sahrul Bahri', 'kelas' => '6A'],
            ['nim' => '17090002', 'nama' => 'Ari Abdurrahman Gufron', 'kelas' => '6B'],
            ['nim' => '17090003', 'nama' => 'Haris Stalas', 'kelas' => '6C'],
            ['nim' => '17090004', 'nama' => 'Aldo Januar', 'kelas' => '6D'],
        ];

        if($daftar){
            $daftarMahasiswa = array_filter($daftarMahasiswa, function($kelas){
                return $kelas['kelas'] == request()->segment(count(request()->segments()));
            });
        }
        return view('daftar-mahasiswa', compact('daftarMahasiswa'));
    }
}
