<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                "title" => "Best of Hasbulla",
                "description" => "Fan favorite Hasbulla has swept the MMA community by storm, teaming up with some of the sports biggest names like Khabib and Alexander Volkanovski to deliver memorable moments in and out of the Octagon.",
                "like" => 10000,
                "publish_date" => Carbon::parse("2022-10-26"),
                "link" => "https://www.youtube.com/watch?v=c9G36djAH88"
            ]
        );
        Post::create(
            [
                "title" => "Top Finishes of 2022 (So Far)",
                "description" => "Relive a number of the best finishes we have seen in 2022 so far, from some of the UFC's biggest names including Michael Chandler, Tai Tuivasa, Molly McCann and more!",
                "like" => 77000,
                "publish_date" => Carbon::parse("2022-05-26"),
                "link" => "https://www.youtube.com/watch?v=oQ4_yZvdiz8&t=1s"
            ]
        );
        Post::create(
            [
                "title" => "რა? სად? როდის? - ტელემაყურებელი დავით სიჭინავას ექვსეულის წინააღმდეგ",
                "description" => "დღეს თამაშობს დავით სიჭინავას ექვსეული: ანა კალატოზი, ბექა ხოჯავა, ცვატა ბერძენიშვილი, გაგი გაბრიჭიძე, ივლიანე ქარდავა, დავით სიჭინავა",
                "like" => 1300,
                "publish_date" => Carbon::parse("2022-10-22"),
                "link" => "https://www.youtube.com/watch?v=G9HWoifaEjc"
            ]
        );
        Post::create(
            [
                "title" => "კაცები - 'ჩაბჟირებები' (ანუ საკუთარ ნათქვამზე რომ იცინიან)",
                "description" => "🟣 კაცების მომენტები გასული ეპიზოდებიდან.
                ❗ არ არის რეკომენდებული ჭამის დროს  🍽😁",
                "like" => 3700,
                "publish_date" => Carbon::parse("2022-09-19"),
                "link" => "https://www.youtube.com/watch?v=r656EcTaXsU&t=422s"
            ]
        );
        Post::create(
            [
                "title" => "ZywOo Insane 51 Kills POV on FACEIT (51-16) (INFERNO) 2022.06.21",
                "description" => "► CROSSHAIR:CSGO-K4tww-sRybY-Rw7AL-6nXmm-uQzfF
                ► https://prosettings.net/players/zywoo/",
                "like" => 2400,
                "publish_date" => Carbon::parse("2022-06-23"),
                "link" => "https://www.youtube.com/watch?v=RQt4yFom70U&t=840s"
            ]
        );
    }
}
