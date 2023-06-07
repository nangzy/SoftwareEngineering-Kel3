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
            'content' => "Q: How do I place an order for merchandise on your website? \nA: To place an order for merchandise on our website, simply browse our collection of products then you can proceed to checkout and follow the instructions to complete your purchase.
                    \n\nQ: What payment methods are accepted on your website for purchasing merchandise? \nA: We accept a variety of payment methods, including QRIS, OVO and Dana. When you proceed to checkout, you will see a list of available payment options.
                        \n\nQ: How long does it take for my merchandise to be shipped? \nA: This can vary depending on the product and your location. Generally, we aim to ship orders within 1-2 business days after the purchase. 
                        \n\nQ: How do I know what size to order for apparel items? \nA: To determine your size, refer to the sizing chart provided on the product page. Sizing charts can vary by brand and product, so be sure to check the specific chart for the item you are interested in.
                        \n\nQ: Do you offer discounts or promotions on merchandise? \nA: Yes, we may offer discounts or promotions on our merchandise from time to time. Be sure to sign up for our newsletter or follow us on social media to stay up-to-date on any current promotions."
        ]);

        // tambah di bawah sini
    }
}
