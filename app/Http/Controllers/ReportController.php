<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikan;
use App\AplikanStatus;
use App\User;

class ReportController extends Controller
{
    public function index(Request $request)
    {   
        //dd(\App\Aplikan::where('sumber_informasi','=','Referensi')->count());
        $jmlApl = Aplikan::count();                

        // Berdasarkan jenis kelamin
        if($request->tanggal_dari && $request->tanggal_sampai){
            $perTanggal = \Carbon\Carbon::parse($request->tanggal_dari)->formatLocalized('%d %B %Y').' sd '.\Carbon\Carbon::parse($request->tanggal_sampai)->formatLocalized('%d %B %Y');
            $aplPria = Aplikan::whereJenisKelamin('L')->whereBetween('tanggal_daftar',[$request->tanggal_dari,$request->tanggal_sampai])->count()/$jmlApl * 100;
            $aplWanita = Aplikan::whereJenisKelamin('P')->whereBetween('tanggal_daftar',[$request->tanggal_dari,$request->tanggal_sampai])->count()/$jmlApl * 100;
        }else{
            $aplPria = Aplikan::whereJenisKelamin('L')->count()/$jmlApl * 100;
            $aplWanita = Aplikan::whereJenisKelamin('P')->count()/$jmlApl * 100;
            $perTanggal = \Carbon\Carbon::now()->formatLocalized('%d %B %Y');            
        }       

        $aplJenisKelaminSeries = [[
            'name'          => 'Jenis Kelamin',
            'colorByPoint'  => true,
            'data' => [[
                'name' => 'Pria',
                'y' => $aplPria,
                'color' =>'#1612ae'
            ],
            [
                'name' => 'Wanita',
                'y' => $aplWanita,
                'sliced' => true,
                'selected' => true,
                'color' =>'#ae1276'
            ]]
        ]];
        // end Berdasarkan jenis kelamin


        // Berdasarkan Sumber Informasi      

            $sumber_informasi = ['Brosur','Presentasi','Facebook','Website','Teman','Referensi','Lainnya'];
            if($request->tanggal_dari && $request->tanggal_sampai){
                $perTanggal = \Carbon\Carbon::parse($request->tanggal_dari)->formatLocalized('%d %B %Y').' sd '.\Carbon\Carbon::parse($request->tanggal_sampai)->formatLocalized('%d %B %Y');
                $aplPria = Aplikan::whereJenisKelamin('L')->whereBetween('tanggal_daftar',[$request->tanggal_dari,$request->tanggal_sampai])->count()/$jmlApl * 100;
                $aplWanita = Aplikan::whereJenisKelamin('P')->whereBetween('tanggal_daftar',[$request->tanggal_dari,$request->tanggal_sampai])->count()/$jmlApl * 100;
            }else{
                $aplPria = Aplikan::whereJenisKelamin('L')->count()/$jmlApl * 100;
                $aplWanita = Aplikan::whereJenisKelamin('P')->count()/$jmlApl * 100;
                $perTanggal = \Carbon\Carbon::now()->formatLocalized('%d %B %Y');            
            }       

            $data_sumber_informasi = [];

            foreach($sumber_informasi as $sin){
                if(strpos($sin,'Lainnya')){
                    $jumlah = \App\Aplikan::where('sumber_informasi','LIKE',$sin.'%')->count();
                } else if($sin == 'Referensi'){
                    $jumlah = \App\Aplikan::whereRaw("sumber_informasi REGEXP '^-?[0-9]+$'")->count();
                } else{
                    $jumlah = \App\Aplikan::whereSumberInformasi($sin)->count();
                }

                $data_sumber_informasi[] = [
                    'name' => $sin,
                    'y' => $jumlah,                    
                ];
            }

            //dd($data_sumber_informasi);
            $aplSumberInformasiSeries = [[
                'name'          => 'Sumber Informasi',
                'colorByPoint'  => true,
                'data' => $data_sumber_informasi
            ]];

        // End Berdasarkan sumber informasi


        //Berdasarkan Status

        $aplikanStatus = AplikanStatus::pluck('nama');
        
        $pendapatanMahasiswa = [];
        $konsentrasi = \App\Konsentrasi::all();
        foreach($konsentrasi as $konsen){
            $data = [];
            foreach($aplikanStatus as $catKey => $catValue){                
                if($request->tanggal_dari && $request->tanggal_sampai){
                    $data[] = AplikanStatus::whereNama($catValue)->first()->aplikan()->whereKonsentrasiId($konsen->id)->whereBetween('tanggal_'.strtolower($catValue),[$request->tanggal_dari,$request->tanggal_sampai])->count();
                }else{
                    $data[] = AplikanStatus::whereNama($catValue)->first()->aplikan()->whereKonsentrasiId($konsen->id)->count();
                }
            }
            
            $pendapatanMahasiswa[] = [
                'name' => $konsen->nama,
                'data' => $data,
            ];            
        }

        // End Berdasarkan status
        
        $presenters = User::whereRoleId(3)->get();
        return view('reports.index',compact(['perTanggal','aplikanStatus','pendapatanMahasiswa','aplJenisKelaminSeries','presenters','aplSumberInformasiSeries']));
    }
}
