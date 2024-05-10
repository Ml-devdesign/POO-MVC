<?php
// Classe pour récupérer des images aléatoires à partir de l'API Unsplash
class UnsplashImageService {
    private $access_key;

    public function __construct($access_key) {
        $this->access_key = $access_key;
    }

    public function getRandomImage($query) {
        // URL de l'API Unsplash
        $url = 'https://api.unsplash.com/photos/random?query=' . urlencode($query);
        // var_dump($url);
        // Configuration de la requête curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Client-ID ' . $this->access_key
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Exécution de la requête
        $response = curl_exec($ch);

        // Vérification des erreurs
        if(curl_errno($ch)) {
           echo 'Erreur curl : ' . curl_error($ch);
        }

        // Fermeture de la session curl
        curl_close($ch);

        // Décode la réponse JSON en tableau associatif
        $data = json_decode($response, true);

        // Retourne l'URL de l'image
        return $data['urls']['regular'] ?? false;
    }
}

// Exemple d'utilisation
$access_key = 'CFjsu0u85VLyqhoh1ZkYbjIgiT_WTGMNSEGCeEIEigE';
$unsplashService = new UnsplashImageService($access_key);
$imageUrl = $unsplashService->getRandomImage('minimal');

if ($imageUrl) {
    echo '<img src="' . $imageUrl . '" alt="Image aléatoire">';
} else {
    echo 'Erreur lors de la récupération de l\'image.';
}
