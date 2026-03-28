<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home', [
            'lang'         => session()->get('lang') ?? 'pt',
            'current_page' => '/',
            'title'        => 'ConstrucaoMz — Construção em Moçambique',
            'meta_desc'    => 'Construção residencial, comercial e industrial com qualidade, rigor e compromisso na Beira e em todo Moçambique.',
        ]);
    }

    public function sobre()
    {
        return view('pages/sobre', [
            'lang'         => session()->get('lang') ?? 'pt',
            'current_page' => '/sobre',
            'title'        => 'Sobre Nós | ConstrucaoMz',
            'meta_desc'    => 'Conheça a equipa e a história da ConstrucaoMz.',
        ]);
    }

    public function servicos()
    {
        return view('pages/servicos', [
            'lang'         => session()->get('lang') ?? 'pt',
            'current_page' => '/servicos',
            'title'        => 'Serviços | ConstrucaoMz',
            'meta_desc'    => 'Construção residencial, comercial, industrial, remodelação e consultoria.',
        ]);
    }

    public function projetos()
    {
        return view('pages/projetos', [
            'lang'         => session()->get('lang') ?? 'pt',
            'current_page' => '/projetos',
            'title'        => 'Projetos | ConstrucaoMz',
            'meta_desc'    => 'Portfólio de obras concluídas pela ConstrucaoMz em Moçambique.',
        ]);
    }

    public function contacto()
    {
        return view('pages/contacto', [
            'lang'         => session()->get('lang') ?? 'pt',
            'current_page' => '/contacto',
            'title'        => 'Contacto | ConstrucaoMz',
            'meta_desc'    => 'Entre em contacto com a ConstrucaoMz para um orçamento gratuito.',
        ]);
    }

    public function setLang(string $lang = 'pt')
    {
        if (!in_array($lang, ['pt', 'en'])) {
            $lang = 'pt';
        }
        session()->set('lang', $lang);
        return redirect()->back();
    }
}