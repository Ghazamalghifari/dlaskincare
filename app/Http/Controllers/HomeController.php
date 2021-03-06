<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use OpenGraph;
use SEOMeta;
use App\Tentang; 
use App\KambingGuling;
use App\Aqiqah;
use App\NasiBox;
use App\Prasmanan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('kambinggulinglampung.com');
        SEOMeta::setDescription('"Rajanya Kambing Guling dan Aqiqah di Lampung" ');
        SEOMeta::setCanonical('https://kambinggulinglampung.com');
        SEOMeta::addKeyword(['kambing', 'guling', 'kambing guling','kambing guling lampung','kambing lampung', 'aqiqah', 'aqiqah lampung','gulai kambing  lampung','kambing lampung','kurban lampung','paket aqiqah lampung','jual kambing lampung','kambing kurban','makanan lampung','prasmanan lampung','nasi kotak lampung','lampung','bandar lampung']);

        OpenGraph::setDescription('Kambing Guling Lampung Adalah');
        OpenGraph::setTitle('kambinggulinglampung.com');
        OpenGraph::setUrl('https://kambinggulinglampung.com');
        OpenGraph::addProperty('type', 'articles');

        return view('home');
    }
    
    public function welcome()
    {
        SEOMeta::setTitle('kambinggulinglampung.com');
        SEOMeta::setDescription('Kambing Guling Lampung adalah ');
        SEOMeta::setCanonical('https://kambinggulinglampung.com');
        SEOMeta::addKeyword(['kambing', 'guling', 'kambing guling','kambing guling lampung','kambing lampung', 'aqiqah', 'aqiqah lampung','gulai kambing  lampung','kambing lampung','kurban lampung','paket aqiqah lampung','jual kambing lampung','kambing kurban','makanan lampung','prasmanan lampung','nasi kotak lampung','lampung','bandar lampung','harga kambing guling','harga aqiqah']);

        OpenGraph::setDescription('"Rajanya Kambing Guling dan Aqiqah di Lampung"');
        OpenGraph::setTitle('kambinggulinglampung.com');
        OpenGraph::setUrl('https://kambinggulinglampung.com');
        OpenGraph::addProperty('type', 'articles');

        
        $tentang = Tentang::first();
        $kambingguling = KambingGuling::first();
        $aqiqah = Aqiqah::first();
        $nasibox = NasiBox::first();
        $prasmanan = Prasmanan::first();
        return view('welcome')->with(compact('tentang','kambingguling','aqiqah','nasibox','prasmanan'));
    }
}
