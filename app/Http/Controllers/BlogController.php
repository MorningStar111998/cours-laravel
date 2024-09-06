<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class BlogController extends Controller
    {
        public function index(){
            $articles = [
                ['titre' => 'Article 1', 'contenu' => 'Contenu de l\'article 1', 'publie' => true, 'date_publication' => '2024-09-01'],
                ['titre' => 'Article 2', 'contenu' => 'Contenu de l\'article 2', 'publie' => false],
                ['titre' => 'Article 3', 'contenu' => 'Contenu de l\'article 3', 'publie' => true, 'date_publication' => '2024-09-02'],
            ];
            return view("blog")->with("articles", $articles);
        } 
    }
