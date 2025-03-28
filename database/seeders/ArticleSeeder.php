<?php
namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'user_id' => 1,
            'titre' => 'Introduction to Laravel', // Titre
            'contenu' => 'Laravel is a PHP framework...', // Content
            'date_publication' => now(), // DatePublication
            'date_proposition' => now(), // DatePproposition
            'statut' => 'Publié', // Etat
            'theme_id' => 1, // ThemeId
            'image_couverture' => 'image.jpg', // ImageCouverture
            'temps_lecture' => 10, // TempsLecture
            'vues' => 100, // Vues
        ]);

        Article::create([
            'user_id' => 2,
            'titre' => 'Advanced Laravel Techniques',
            'contenu' => 'In this article, we will explore...',
            'date_publication' => now(),
            'date_proposition' => now(), // DatePproposition
            'statut' => 'Publié',
            'theme_id' => 2,
            'image_couverture' => 'image.jpg',
            'temps_lecture' => 5,
            'vues' => 50,
        ]);
    }
}
