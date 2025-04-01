<?php
require_once "./models/PokeModel.php";

class PokeController {
    private $model;

    public function __construct() {
        $this->model = new PokeModel();
    }

    public function showPokemon($pokemon) {
        $rawData = $this->model->getPokemonData($pokemon);
        
        if (!$rawData || !isset($rawData['name'])) {
            $data = [
                "error" => "Pokémon no encontrado"
            ];
        } else {
            $data = [
                "name" => ucfirst($rawData['name']),
                "height" => $rawData['height'] / 10 . " m",
                "weight" => $rawData['weight'] / 10 . " kg",
                "sprite" => $rawData['sprites']['front_default'],
                "abilities" => array_map(function ($ability) {
                    return ucfirst($ability['ability']['name']);
                }, $rawData['abilities'])
            ];
        }

        $this->render("poke", ["pokemonData" => $data]);
    }

    private function render($view, $data = []) {
        extract($data); // Extrae las variables del array asociativo
        require "./views/layout.php"; // Carga la plantilla base
    }
}
?>
