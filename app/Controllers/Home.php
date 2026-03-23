<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['lang'] = session()->get('lang') ?? 'pt';
        return view('layouts/main', [
            'page'    => 'pages/home',
            'lang'    => $data['lang'],
            'title'   => 'ConstrucaoMz'
        ]);
    }

    public function sobre()
    {
        $lang = session()->get('lang') ?? 'pt';
        return view('layouts/main', [
            'page'  => 'pages/sobre',
            'lang'  => $lang,
            'title' => 'Sobre Nós | ConstrucaoMz'
        ]);
    }

    public function servicos()
    {
        $lang = session()->get('lang') ?? 'pt';
        return view('layouts/main', [
            'page'  => 'pages/servicos',
            'lang'  => $lang,
            'title' => 'Serviços | ConstrucaoMz'
        ]);
    }

    public function projetos()
    {
        $lang = session()->get('lang') ?? 'pt';
        return view('layouts/main', [
            'page'  => 'pages/projetos',
            'lang'  => $lang,
            'title' => 'Projetos | ConstrucaoMz'
        ]);
    }

    public function contacto()
    {
        $lang = session()->get('lang') ?? 'pt';
        return view('layouts/main', [
            'page'  => 'pages/contacto',
            'lang'  => $lang,
            'title' => 'Contacto | ConstrucaoMz'
        ]);
    }

    public function setLang($lang = 'pt')
    {
        session()->set('lang', $lang);
        return redirect()->back();
    }
}