<?php
class PokeModel {
    public function getPokemonData($pokemon) {
        $url = "https://pokeapi.co/api/v2/pokemon/" . strtolower($pokemon);

        // Inicializar cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Obtener respuesta y cerrar conexión
        $response = curl_exec($ch);
        curl_close($ch);

        // Convertir JSON a array y retornarlo
        return json_decode($response, true);
    }
}
?>
