<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        Gallery::create([
            'title' => '3rd Birthday Party',
            'slug' => '3rd-birthday-party',
            'image' => '1.JPG',
            'status' => 'Kids',
            'yearMoment' => '2007',
            'story' => '<p style="text-align: justify">Birthdays are very memorable days in a person\'s life, the celebration and organization of a happy birthday party are what makes it most fun. My name is Nicole, I celebrate my birthday party on 29th January every year with my family and friends. I like celebrating my birthday party with cakes and chocolates. All my friends attended the birthday party. We cut the cake and distribute sweets and chocolates to my friends and family.</p>
            <p style="text-align: justify">I invite all my neighbors and relatives to my happy birthday party. My parents decorate the venue using balloons and flowers. Every year my parents bake my favorite cake.  After cutting the cake we celebrate the day by singing and dancing. I like reading out my birthday speech to show my appreciation and respect to my friends and family. I received a lot of gifts on my birthday, my parents gifted me a bicycle. All the children were given stuffed toys and candies as a return gift. I love my birthday as it is very fun.</p>'
        ]);
        Gallery::create([
            'title' => 'PPTI 1st Anniversary',
            'slug' => 'ppti-1st-anniversary',
            'image' => '2.JPG',
            'status' => 'Adult',
            'yearMoment' => '2022',
            'story' => '<p style="text-align: justify">As the leader of an anniversary event, I was both excited and nervous about the task ahead. It was a big responsibility, but I was determined to make it a success. It requires a lot of hard work, dedication, and creativity, but it also offers the opportunity to create a meaningful and memorable celebration for the guests of honor and attendees.</p>
            <p style="text-align: justify">Looking back on the experience, being the leader of an anniversary event was challenging, but it was also incredibly rewarding. The opportunity to work with a dedicated team to create a memorable celebration was an experience I will never forget. I learned that with proper planning, teamwork, and attention to detail, any event can be a success.</p>'
        ]);
        Gallery::create([
            'title' => 'High School',
            'slug' => 'high-school',
            'image' => '3.jpg',
            'status' => 'Teens',
            'yearMoment' => '2019',
            'story' => '<p style="text-align: justify">High school was an unforgettable experience that shaped my life in many ways. High school was a time of growth and self-discovery that helped prepare me for the challenges of adulthood. I faced numerous challenges, both academically and personally, but each one helped me become a stronger and more resilient person.</p>
            <p style="text-align: justify">I learned how to balance my time, manage my stress, and overcome obstacles with determination and perseverance. High school taught me valuable lessons about hard work, determination, and resilience. It helped me develop important skills and discover my passions. And most importantly, it provided me with memories and friendships that will last a lifetime.</p>'
        ]);
        Gallery::create([
            'title' => 'Lunar New Year',
            'slug' => 'lunar-new-year',
            'image' => '4.JPG',
            'status' => 'Kids',
            'yearMoment' => '2008',
            'story' => '<p style="text-align: justify">As a child, I always looked forward to Lunar New Year, which is one of the most important holidays in my culture. It was a time of excitement, tradition, and family gathering. In the weeks leading up to Lunar New Year, my family and I would clean our house from top to bottom, a tradition known as "spring cleaning." It was believed that this would sweep away any bad luck from the previous year and make way for good luck in the upcoming year.</p>
            <p style="text-align: justify">As the new year approached, my family would purchase new clothes, shoes, and red envelopes filled with money, which we would give to each other as a symbol of good luck and prosperity. On New Year\'s Eve, my family would gather for a feast of traditional dishes. The first few days of Lunar New Year were spent visiting relatives and friends, exchanging greetings, and feasting on more delicious food.</p>'
        ]);
        Gallery::create([
            'title' => 'Around the Museum',
            'slug' => 'around-the-museum',
            'image' => '5.jpg',
            'status' => 'Adult',
            'yearMoment' => '2022',
            'story' => '<p style="text-align: justify">As I stepped into the bank museum, I was immediately struck by the grandeur of the building. The high ceilings, marble floors, and intricate chandeliers all spoke of a time when banks were the pillars of the community. One of the highlights of my visit was seeing the bank\'s original vault.</p>
            <p style="text-align: justify">The massive steel door was a testament to the bank\'s commitment to security and safety, and I couldn\'t help but feel a sense of awe as I stood before it. Overall, my visit to the bank museum was an educational and fascinating experience. It gave me a new appreciation for the important role banks have played throughout history and continue to play in our modern world.</p>'
        ]);
        Gallery::create([
            'title' => 'Win the Competition',
            'slug' => 'win-the-competition',
            'image' => '6.jpg',
            'status' => 'Teens',
            'yearMoment' => '2019',
            'story' => '<p style="text-align: justify">As I sat in the audience of the Creative Idea Competition, I couldn\'t help but feel a sense of excitement and anticipation. My team had submitted the idea for a new innovative game named "I-Box". The competition had drawn a diverse group of participants, each with their unique and innovative ideas. When it was finally my team\'s turn to present, we took a deep breath and stepped onto the stage. We spoke passionately about our idea.</p>
            <p style="text-align: justify">When the judges announced the winner, my heart was pounding in my chest. And then, to my delight, they called out my team\'s name! I couldn\'t believe it - We had won the Creative Idea Competition! Looking back on that day, I still feel a sense of pride and accomplishment. Winning the Creative Idea Competition not only gave me the confidence to pursue my idea further, but it also showed me the power of creativity and innovation in shaping our world.</p>'
        ]);
        Gallery::create([
            'title' => 'Farewell Photoshoot',
            'slug' => 'farewell-photoshoot',
            'image' => '7.jpg',
            'status' => 'Adult',
            'yearMoment' => '2021',
            'story' => '<p style="text-align: justify">As a senior in high school, I couldn\'t believe how quickly the time had flown by. It seemed like just yesterday, I was a nervous freshman walking through the halls for the first time. Now, I was preparing to say goodbye to the place that had become my home for the past three years. To commemorate our farewell, me and my friends had planned a photoshoot.</p>
            <p style="text-align: justify">We dressed in our finest clothes and gathered at a photo studio, ready to capture memories that would last a lifetime. As we posed for the camera, laughter and chatter filled the air. We reminisced about our favorite moments in high school and shared our hopes and dreams for the future. It was a bittersweet moment, knowing that our time together was coming to an end.</p>'
        ]);
        Gallery::create([
            'title' => 'Taekwondo Class',
            'slug' => 'taekwondo-class',
            'image' => '8.jpg',
            'status' => 'Teens',
            'yearMoment' => '2016',
            'story' => '<p style="text-align: justify">As a teenager, I was always looking for new ways to challenge myself and stay active. So when I discovered taekwondo, I was immediately intrigued. I had never tried martial arts before, but something about the grace and power of taekwondo drew me in. I signed up for classes and soon found myself immersed in a whole new world of discipline and focus.</p>
            <p style="text-align: justify">At first, the moves were difficult to master, and I stumbled often. But with each class, I grew stronger and more confident. As I progressed through the ranks, I found myself feeling more connected to my body and my mind. The discipline and training required of me in taekwondo translated into other areas of my life as well. I became more focused and determined in my studies and in my personal relationships.</p>'
        ]);
        Gallery::create([
            'title' => 'Halloween Party',
            'slug' => 'halloween-party',
            'image' => '9.JPG',
            'status' => 'Adult',
            'yearMoment' => '2021',
            'story' => '<p style="text-align: justify">Last year, with the pandemic still raging, my class knew we had to get creative if we wanted to celebrate Halloween together. So we decided to throw an online Halloween party. We each dressed up in our costumes and joined the zoom, eager to see what everyone had come up with. We had witches, vampires, superheroes, and even a few homemade costumes that had us all laughing.</p>
            <p style="text-align: justify">To keep the party going, we played Halloween-themed games. We also took turns telling scary stories, turning off our cameras to add to the spooky atmosphere. As the night drew to a close, we all agreed that it had been a unique and memorable Halloween. Despite the distance between us, we had still managed to come together and celebrate in our own way. And for that, we were grateful.</p>'
        ]);
        Gallery::create([
            'title' => 'Kindergarten Graduation',
            'slug' => 'kindergarten-graduation',
            'image' => '10.JPG',
            'status' => 'Kids',
            'yearMoment' => '2009',
            'story' => '<p style="text-align: justify">I still remember my kindergarten graduation like it was yesterday. I was dressed in my best dress, and my hair was pulled back into a neat ponytail. My parents and grandparents had come to watch, and I felt so proud to show them what I had learned. We marched into the gymnasium, and I saw that all of my classmates were dressed up too.</p>
            <p style="text-align: justify">We were each called up one by one to receive our diplomas. I felt a surge of pride as I walked across the stage, feeling like a true scholar. As the ceremony drew to a close, I knew that this was just the beginning of my educational journey. But for that day, I was content to bask in the glow of my accomplishments and the love and support of my family.</p>'
        ]);
        Gallery::create([
            'title' => 'Vesakh Day Celebration',
            'slug' => 'vesakh-day-celebration',
            'image' => '11.jpg',
            'status' => 'Teens',
            'yearMoment' => '2019',
            'story' => '<p style="text-align: justify">I had the opportunity to perform at a Vesakh Day celebration. I was nervous but excited to share my talents with the community. As I arrived at the event, I could feel the excitement in the air. The decorations were beautiful, and the energy was electric.</p>
            <p style="text-align: justify">I checked in with the organizers and made my way to the performance area. As I took my place on the stage, I felt a wave of nerves wash over me. But as the music started and I began to dance, all of my worries faded away. The crowd was enthusiastic and appreciative, and their applause was like music to my ears.</p>'
        ]);
        Gallery::create([
            'title' => 'Holiday in Yogyakarta',
            'slug' => 'holiday-in-yogyakarta',
            'image' => '12.JPG',
            'status' => 'Adult',
            'yearMoment' => '2023',
            'story' => '<p style="text-align: justify">I went on a holiday trip with my friends to Yogyakarta, also known as Jogja. It was an incredible experience that I will never forget. We spent our days exploring the city\'s rich cultural and historical landmarks. We also went to local restaurants to try delicious Indonesian cuisine.</p>
            <p style="text-align: justify">Most importantly, I had the chance to spend quality time with my friends and create unforgettable memories together. We laughed, joked, and bonded over our shared experiences. Our trip to Jogja was truly a life-changing experience, and I am grateful to have had the opportunity to explore this beautiful city with my amazing friends.
            </p>'
        ]);
        Gallery::create([
            'title' => 'Mother\'s Day Event',
            'slug' => 'mother\'s-day-event',
            'image' => '13.JPG',
            'status' => 'Teens',
            'yearMoment' => '2019',
            'story' => '<p style="text-align: justify">I had the opportunity to be the committee chairman for a Mother\'s Day event in my community. It was an exciting and challenging experience that taught me a lot about leadership and event planning. As the committee chairman, I was responsible for overseeing all aspects of the event, including the venue, decorations, food, and activities.</p>
            <p style="text-align: justify">I worked closely with my team members to ensure that everything ran smoothly and that we met our goals for the event.One of the most memorable parts of the event was when we invited all the mothers to come up to the stage to share their stories and experiences. It was touching to see the love and appreciation that the families had for their mothers.</p>'
        ]);
        Gallery::create([
            'title' => 'Sister\'s Birthday Party',
            'slug' => 'sister\'s-birthday-party',
            'image' => '14.JPG',
            'status' => 'Kids',
            'yearMoment' => '2007',
            'story' => '<p style="text-align: justify">My family and I celebrated my sister\'s birthday. It was a day filled with love, laughter, and lots of cake! We started the day by decorating the house with balloons, streamers, and banners. We also put up a special birthday banner that we made ourselves, which my sister absolutely loved. We ordered my sister\'s favorite food from her favorite restaurant.</p>
            <p style="text-align: justify">We also had a delicious chocolate cake, which we had decorated with her name and some colorful candles. We also played some fun party games, like pin the tail on the donkey and charades. We also had a mini-dance party, where we played some of my sister\'s favorite songs and danced around the living room. Overall, my sister\'s birthday was a day filled with joy and love. It was the perfect way to celebrate her special day and make her feel loved and appreciated.</p>'
        ]);
        Gallery::create([
            'title' => 'New Year\'s Eve',
            'slug' => 'new-year\'s-eve',
            'image' => '15.JPG',
            'status' => 'Adult',
            'yearMoment' => '2021',
            'story' => '<p style="text-align: justify">Last New Year\'s Eve, I celebrated with my closest friends. It was a night filled with fun, laughter, and plenty of memories. We started off the night by having a potluck dinner at my friend\'s house. Each of us brought a dish to share, and we had everything from pizza to sushi. We spent the first part of the night catching up and chatting over dinner.</p>
            <p style="text-align: justify">After dinner, we played some fun party games, like Cards Against Humanity and Pictionary. We also had a mini dance party, where we played some of our favorite songs and danced around the living room. As midnight approached, we all gathered around the TV to watch the ball drop. We counted down the seconds together, and when the clock struck midnight, we all hugged and cheered.</p>'
        ]);
        Gallery::create([
            'title' => 'Christmas Party',
            'slug' => 'christmas-party',
            'image' => '16.JPG',
            'status' => 'Kids',
            'yearMoment' => '2007',
            'story' => '<p style="text-align: justify">When I was a child, celebrating Christmas in school was one of the most exciting times of the year. It was a time for festive decorations, delicious treats, and fun activities with my classmates. I remember one year in particular when my class and I decorated the classroom with colorful paper chains, sparkling ornaments, and a bright Christmas tree. We also sang Christmas carols and had a class party where we exchanged gifts and enjoyed festive snacks.</p>
            <p style="text-align: justify">One of my favorite activities was making homemade Christmas cards for our families. We spent hours cutting, gluing, and decorating our cards with glitter and stickers. It was a fun way to get creative and show our loved ones how much we cared. The highlight of the celebration was when Santa Claus visited our classroom. We were all so excited to see him and tell him what we wanted for Christmas. He even brought small gifts for each of us, which made us feel extra special.</p>'
        ]);
    }
}
