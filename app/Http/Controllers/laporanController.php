<?php

namespace App\Http\Controllers;
use App\Models\Fproduct;
use App\Models\Eproduct;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataf = Fproduct::paginate(5);
        return view('laporan.index',['dataf' =>$dataf]);

        
   }
    }

