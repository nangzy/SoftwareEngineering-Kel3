<?php

namespace Database\Seeders;

use App\Models\Faq as Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            'title' => 'FAQ BUY MERCH',
            'slug' => 'buy-merch',
            'content' => "Q: How do I place an order for merchandise on your website? \nA: To place an order for merchandise on our website, simply browse our collection of products then you can proceed to checkout and follow the instructions to complete your purchase.
                    \n\nQ: What payment methods are accepted on your website for purchasing merchandise? \nA: We accept a variety of payment methods, including QRIS, OVO and Dana. When you proceed to checkout, you will see a list of available payment options.
                        \n\nQ: How long does it take for my merchandise to be shipped? \nA: This can vary depending on the product and your location. Generally, we aim to ship orders within 1-2 business days after the purchase. 
                        \n\nQ: How do I know what size to order for apparel items? \nA: To determine your size, refer to the sizing chart provided on the product page. Sizing charts can vary by brand and product, so be sure to check the specific chart for the item you are interested in.
                        \n\nQ: Do you offer discounts or promotions on merchandise? \nA: Yes, we may offer discounts or promotions on our merchandise from time to time. Be sure to sign up for our newsletter or follow us on social media to stay up-to-date on any current promotions."
        ]);

        Faq::insert([
            'title' => 'FAQ BUY TICKET',
            'slug' => 'buy-ticket',
            'content' => "Q: How do I purchase tickets for an esports tournament on your website? \nA: To purchase tickets for an esports tournament on our website, simply go to the Ticket page and select which tournament you want to watch. Once you have chosen your tickets, click the \"Buy\" button and follow the instructions to complete your purchase.
                    \n\nQ: What payment methods are accepted on your website for purchasing tickets? \nA: We accept a variety of payment methods, including QRIS, OVO and Dana. When you click button \"Buy Now\", you will see a list of available payment options.
                        \n\nQ: Can I print my tickets at home or do I need to pick them up at the venue? \nA: This can vary depending on the event and the venue. Some events may offer e-tickets that you can print at home or display on your mobile device, while others may require you to pick up physical tickets at the venue's box office. This information will be provided during the ticket purchasing process and in your confirmation email. 
                        \n\nQ: How do I contact customer support if I have questions or issues with my ticket purchase? \nA: You can contact our customer support team through our website's, you should go to “Profile” page then you can choose \"Contact Us\" or by emailing or calling our customer service number. We are available to assist you with any questions or issues you may have before, during, or after your ticket purchase."
        ]);

        Faq::insert([
            'title' => 'FAQ TOP UP',
            'slug' => 'top-up',
            'content' => "Q: How long does it take for me to receive the game currency after I make a purchase? \nA: The delivery time for game currency can vary depending on the game and the amount of currency you purchased. However, we typically aim to deliver your game currency within 24 hours after your purchase.
                    \n\nQ: Is it safe to purchase game currency from your website? \nA: Yes, we take the safety and security of our customers' transactions seriously. Our website uses industry-standard encryption and security measures to protect your personal and financial information. Additionally, we have a refund policy in case of any issues with your purchase.
                        \n\nQ: What happens if I don't receive the game currency I purchased? \nA: If you don't receive the game currency you purchased, please contact our customer support team as soon as possible. We will investigate the issue and provide a refund or a re-delivery of your game currency if necessary. 
                        \n\nQ: Do you offer game currency for all games? \nA: We offer game currency for a wide variety of popular games, but we may not offer currency for every single game out there. If you don't see your game listed on our website, feel free to contact our customer support team to see if we can help you."
        ]);

        Faq::insert([
            'title' => 'FAQ Valorant Tournament',
            'slug' => 'valorant-tournament',
            'content' => "Q: How do I watch an esports tournament? \nA: Most esports tournaments are livestreamed online, either on the tournament's official website or on a platform like Twitch. Our website provides information on how to watch each tournament, including links to livestreams or broadcast schedules.
                    \n\nQ: Can I attend an esports tournament in person? \nA: Some esports tournaments are held in physical locations and are open to spectators. Our website provides information on the location of each tournament and you can buy the ticket in our website.
                        \n\nQ: How do I get updates on upcoming esports tournaments? \nA: You can sign up for our newsletter or follow us on social media to stay up-to-date on upcoming esports tournaments. Additionally, our website is regularly updated with new listings and information. 
                        \n\nQ: What are the most popular esports games? \nA: The most popular esports games vary depending on region and other factors, but some of the most commonly played games include Valorant, Mobile Legends, Free Fire, and PUBGM. Our website provides information on upcoming tournaments for Valorant and Mobile Legends games."
        ]);

        Faq::insert([
            'title' => 'FAQ MLBB Tournament',
            'slug' => 'mlbb-tournament',
            'content' => "Q: How do I watch an esports tournament? \nA: Most esports tournaments are livestreamed online, either on the tournament's official website or on a platform like Twitch. Our website provides information on how to watch each tournament, including links to livestreams or broadcast schedules.
                    \n\nQ: Can I attend an esports tournament in person? \nA: Some esports tournaments are held in physical locations and are open to spectators. Our website provides information on the location of each tournament and you can buy the ticket in our website.
                        \n\nQ: How do I get updates on upcoming esports tournaments? \nA: You can sign up for our newsletter or follow us on social media to stay up-to-date on upcoming esports tournaments. Additionally, our website is regularly updated with new listings and information. 
                        \n\nQ: What are the most popular esports games? \nA: The most popular esports games vary depending on region and other factors, but some of the most commonly played games include Valorant, Mobile Legends, Free Fire, and PUBGM. Our website provides information on upcoming tournaments for Valorant and Mobile Legends games."
        ]);
    }
}
