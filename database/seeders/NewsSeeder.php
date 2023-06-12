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

        News::insert([
            'title' => 'Disguised Toast Game Changers Stream Team Dream Comes To Abrupt End',
            'slug' => 'Disguised-Toast-Game',
            'image' => 'valorant_2',
            'content' => "Disguised Toast has already parted ways with the superstar streamer-stacked Game Changers VALORANT roster after the group of QuarterJade, kyedae, Syd, tenzin, tupperware, and coach Ruin fell short in North American Series One open qualifiers. Toast himself posted a thread of “releases” following their elimination, due to “role issues and financial hardships,” however it’s worth noting this is clearly in jest. The star Twitch streamer was genuine in thanking the players who played under the Disguised Toast banner, even if just for a short time.
            \nIn their short time together playing under Disguised Toast, the team was able to secure their first win of their open qualifier group versus SHIFT X, but then fell in two straight matches, losing to Evil Geniuses and then losing a rematch versus SHIFT X. Still, getting a win in their debut with limited experience at the tournament level with only just over a week’s amount of practice time is a noteworthy accomplishment.
            \nWhile Toast’s announcement of the streamer-led Game Changers roster originally caught backlash that he responded to in kind, it brought much needed attention to the scene, and the team successfully brought in a ton of fresh eyes. Over 100,000 viewers watched their debut match on Tuesday, across the official VALORANT Americas Twitch channel and numerous co-streams. While this form of the roster has come to a close, perhaps another will resurface in the future. This tournament is only the first series of the NA Game Changers circuit.
            \nFollowing the loss versus Shift X, the Disguised account tweeted “see you in a few months,” and while they could just be referring to the Disguised roster competing in Challengers, Toast did say back in March that he didn’t have enough time “to put together a team responsibly” for this first series. It’s possible, with more time, a new VALORANT Game Changers roster materializes under the Disguised Toast banner in time for the next tournament.",
            'category_id' => '2'
        ]);

        News::insert([
            'title' => 'VCT Americas: From Scrim Buddles To Competition',
            'slug' => 'vct-americas',
            'image' => 'valorant_3',
            'content' => "Leviatán and NRG hit the stage to face off in their series in the VCT Americas region.
            \nWith the VALORANT Americas region already in full swing, it was time for Leviatán and NRG to take to the stage and show what they had been practicing since LOCK//IN. Especially when they played against each other as scrim partners in LOCK//IN.
            \nPegged as two of the top teams in the entire Americas league, this was a match to be excited about. Leviatán is known for being the top of the Latin America league before it transitioned to be part of the 2023 VCT Americas. This was the chance to take on the top of the North Americas league. Leviatán are a roster that is consistent, robust and disciplined against their competition.
            \nWith players who were frequently underestimated but huge talent - Francisco 'kiNgg' Aravena for example. He is a huge talent with incredible fundamentals that were coordinating well with the rest of the team at LOCK//IN. This is a team for other teams to fear, and for fans to get behind because they have the potential to go all the way.
            \nOn the other side was NRG. Another top team, with a core that is easily one of the strongest seen in recent years. Pujan 'FNS' Mehta, Victor 'Victor' Wong and Austin 'Crashies' Roberts, as the former Optic core that moved over to NRG and had two new players come in, this is another team to fear. NRG are a team capable of taking down all of those who are ahead of them and similarly to Leviatán.
            \nNRG are a team who are expected to be at the top. The huge flexibility on this roster, that can hold its own is proof that this is a match to remember. Similarly to Leviatán, NRG are known for incredible fundamentals with incredibly high ceilings that we have yet to fully see considering recent roster changes. It’s time to get excited.",
            'category_id' => '2'
        ]);

        News::insert([
            'title' => 'MOBILE LEGENDS CHAMPIONS TOUR 101',
            'slug' => 'mobile-legends-champions',
            'image' => 'mobile_legends1',
            'content' => "To celebrate its 421st anniversary, the Tegal Regency government partnered with the Indonesian Esports Federation (PBESI) of Tegal Regency and PT Kasyr Sibernetika Indonesia to organize a Mobile Legends Bang-Bang (MLBB) tournament through the Central Gamers Indonesia (CGI) application.
            \nThe culmination of this skill-based competition took place live at the Trasa Coworking Space Slawi parking area recently. Representing the Tegal Regency Mayor, Umi Azizah, the Secretary of Tegal Regency, Widodo Joko Mulyono, welcomed the organization of the professional esports league and championship. According to Joko, this championship is the first of its kind to be held specifically in commemoration of the 421st anniversary of Tegal Regency.
            \n\"I see this as an opportunity, not only in terms of nurturing gaming careers to become esports athletes but also as a catalyst for the development of new promising job opportunities through the growing number of tournaments and championships like this,\" explained Joko in a statement received by Tribunjateng.com on Tuesday (May 31, 2022). Furthermore, the esports ecosystem also requires shoutcasters similar to the commentator positions in conventional sports. With the increasing interest in esports content among the public, the opportunities for video editors have also increased, and they are already widely found on various video-sharing platforms. Joko emphasized that these opportunities do not include other income sources such as streaming and endorsement fees.
            \n\"I highly appreciate PBESI Tegal Regency and especially PT Kasyr Sibernetika for facilitating the organization of this Mobile Legends tournament with exceptional stage layout and artistic arrangements that stand out from the rest. Hopefully, this can serve as a benchmark for other events to be more memorable and extraordinary,\" expressed Joko. On this occasion, Joko expressed appreciation to Edi Kurniawan, the CEO of PT Kasyr Sibernetika Indonesia, for successfully developing the Central Gamers Indonesia (CGI) application to accommodate gamers' needs to play and compete in various skill-based games such as Mobile Legends, Dota, Valorant, and League of Legends.
            \nEdi added that the MLBB tournament, held for the first time during the Tegal Regency anniversary, received enthusiastic participation from the millennial generation. There were 101 teams participating in the tournament, but after the preliminary rounds, only four teams advanced to the grand finals. \"Not only from Tegal Regency but also from Malang, Tangerang, and Pekalongan. However, among the three teams that made it to the grand finals, two are from Tegal Regency and one team is from Brebes,\" he explained. The winners received trophies, certificates, and cash prizes. The first-place team received IDR 8 million, the second-place team received IDR 4 million, the third-place team received IDR 2 million, and the consolation prize winner received IDR 1 million.",
            'category_id' => '1'
        ]);

        News::insert([
            'title' => 'Samsung is hosting the Galaxy Gaming Academy for casual gamers, paving the way to becoming pro players.',
            'slug' => 'samsung-galaxy-gaming-academy',
            'image' => 'mobile_legends2',
            'content' => "To search for gaming talents in Indonesia, Samsung is holding the Samsung Galaxy Gaming Academy as a platform for gamers to showcase their skills and compete, utilizing Samsung Galaxy devices. According to a survey, there are over 100 million registered Mobile Legends: Bang Bang (MLBB) players in Indonesia. The majority of these gamers, dominated by males aged 18 to 24, have been playing MLBB for more than 3 years, with the majority (86 percent) playing it for nearly 4 hours every day. Many gamers aspire to enhance their capabilities to become more competitive, but 92 percent admit to lacking opportunities to join pro-team scouting. Furthermore, 98 percent of gamers desire to participate in talent search programs in tournament formats, with the aim of securing exclusive contracts (51 percent) or cash prizes (33 percent).
            \n\"The Samsung Galaxy Gaming Academy aims to discover talented individuals and provide opportunities to compete at a professional level,\" said Taufiq Furqan, MX Product Marketing Manager of Samsung Electronics Indonesia. Through a press release on Wednesday, June 7, 2023, Taufiq stated that casual gamers would be trained by pro-player coaches using various Samsung Galaxy devices that have been optimized for gaming experiences. Samsung mentioned that to enhance skills, teams that advance to the playoff rounds will have the opportunity to participate in coaching clinics led by three coaches with extensive experience in esports, including Bangduk.
            \nRegistration for the Samsung Galaxy Gaming Academy is open from May 29 to June 19, 2023, through the Samsung Galaxy Gaming Academy website. Winners will be prepared for the Esports President Cup competition through intensive training alongside TEZET, the former coach of Aura Fire during their victory in the 2021 Esports President Cup.",
            'category_id' => '1'
        ]);

        News::insert([
            'title' => 'Indonesian Men National Team Hopes for MLBB SEA Games 2023 Final Dashed',
            'slug' => 'indonesian-men-mlbb',
            'image' => 'mobile_legends3',
            'content' => "Indonesia's hopes of securing a medal in the Mobile Legends Bang-Bang (MLBB) discipline at the SEA Games have been dashed, as the men's national team suffered defeats against Cambodia and Myanmar in the MLBB SEA Games 2023 Group Stage on Friday (May 12, 2023). In the match against the host team, it was evident how Alberttt and his teammates had the upper hand in the early and mid-game with their attacks that made Cambodia nervous. However, the host team managed to regain control from the Indonesian MLBB men's national team and prolonged the match until the late game.
            \nThis proved to be advantageous for the Cambodian players, as their heroes, Faramis and Gloo, grew stronger in the late game, making it difficult for the Indonesian players to take down their opponents. The Cambodian players also displayed better coordination with precise communication. This was evident every time Sok Roth used Faramis' ultimate skill, Cult Altar, at the right timing during team fights. As a result, the resources of the Indonesian players were depleted, but none of the opponents were defeated during team fights. The Indonesia vs. Cambodia battle was quite intense and lasted for more than 30 minutes. However, the Indonesian MLBB national team had to succumb to the host team in this best-of-one (BO1) format match.
            \nThe performance of the Indonesian MLBB national team did not change much when facing Myanmar, as Bjorn Ong (Zeys), the coach, maintained the same lineup that lost to Cambodia. Similar to the match against Cambodia, it was evident that the Indonesian MLBB national team struggled against the fast and aggressive attacks from the Myanmar players. Since the early game, Myanmar had been disrupting the jungle area controlled by Branz and his team. The Indonesian MLBB national team managed to briefly take control of the game, but it did not last long. With more cohesive gameplay, Myanmar was far ahead in terms of kills and gold network.
            \nUnable to mount a comeback and being thoroughly defeated, the Indonesian national team had to swallow the bitter pill of defeat against Myanmar. The certainty of Saykots and his team not advancing to the semi-finals was reinforced when Cambodia achieved victory over Singapore. Based on points, Cambodia and Myanmar have already secured their spots in the MLBB SEA Games 2023 semi-finals, even though the match between Singapore and Indonesia will only take place tomorrow.",
            'category_id' => '1'
        ]);
    }
}
