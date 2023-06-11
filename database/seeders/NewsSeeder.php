<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::insert([
            'title' => 'VCT 2023 Americas League: Marved Replaces TenZ in Sentinels',
            'slug' => 'VCT-2023-Americas-League',
            'image' => 'image 54',
            // content wajib petik 2
            'content' => "The premier regional league for North and South America (Americas), Valorant Champions Tour (VCT) 2023 Americas League kicked off on 1st April. One of the biggest names in the league, Sentinels, is struggling to find its footing in the tournament and is currently 8th in the standings with a 1-2 (win-loss) record. After a slow start to the season, Sentinels has been busy making big roster moves. On 17th April, the organization dropped head coach Don “SyykoNT” Muir, and Adam “kaplan” Kaplan took charge. Following this, in a video, kaplan announced that Tyson “TenZ” Ngo will sit out VCT 2023 Americas Week 4 with Jimmy “Marved” Nguyen stepping in.
            \nOn 19th April, Sentinels released a video introducing the new head coach kaplan. In this video, kaplan talked about TenZ sitting out this week to recover. He said TenZ was not feeling good due to his finger injury and COVID-19 infection, adding, “We are going to give him a week to chill. Luckily we have a world champion for a sub. We are going to be bringing Marved in. We are going to be practicing with him this week and playing our super week of matches with him.”
            \nTenZ has been dealing with a hand injury and competing in the league without a choice since Marved was still figuring out his visa situation. Recently, TenZ posted a picture of his hand with a severe joint infection. TenZ’s partner Kyedae Shymko also took to social media, asking fans to show empathy for the pro player.
            \nWith this announcement, it is evident that Marved has seemingly secured his visa and is able to compete in the VCT 2023 Americas league for Sentinels as TenZ recuperates. Marved last played competitively in the North American Challengers League Open Qualifiers with Untamable Beasts. However, the player is no stranger to big stages and lifting trophies. In 2022, Marved played for OpTic Gaming which won VCT 2022: Stage 1 Masters - Reykjavík. Additionally, the team also went on to reach the top three at VCT 2022: Stage 2 Masters - Copenhagen and finished second at Valorant Champions 2022.",
            'category_id' => '2' // 1 = mobile legends, 2 = valorant
        ]);
    }
}
