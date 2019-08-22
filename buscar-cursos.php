<?php

require 'vendor/autoload.php';


use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client(['base_uri'=> 'http://alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');
foreach($cursos as $curso)
{
    echo $curso . PHP_EOL;

}