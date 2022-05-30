<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Detail;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $category = ['Fiction', 'Science', 'Comic', 'Cooking', 'History'];

        foreach ($category as $val) {
            Category::create([
                'category' => $val,
            ]);
        }

        Book::create([
            'category_id' => 1,
            'title' => 'Harry Potter and the Philosopher\'s Stone',
        ]);

        Detail::create([
            'book_id' => 1,
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury',
            'year' => 1997,
            'description' => 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry\'s parents, but failed to kill Harry when he was just 15 months old.'
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Harry Potter and the Chamber of Secrets',
        ]);

        Detail::create([
            'book_id' => 2,
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury',
            'year' => 1998,
            'description' => 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the "Chamber of Secrets" has been opened and that the "heir of Slytherin" would kill all pupils who do not come from all-magical families. These threats are found after attacks that leave residents of the school petrified. Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.'
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Harry Potter and the Prisoner of Azkaban',
        ]);

        Detail::create([
            'book_id' => 3,
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury',
            'year' => 1999,
            'description' => 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort\'s old allies.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 1: Romance Dawn',
        ]);

        Detail::create([
            'book_id' => 4,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 1: Romance Dawn is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 2: Buggy the clown',
        ]);

        Detail::create([
            'book_id' => 5,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 2: Buggy the clown is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 3: Cool Fight',
        ]);

        Detail::create([
            'book_id' => 6,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 3: Cool Fight is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 4: The Black Cat Pirates',
        ]);

        Detail::create([
            'book_id' => 7,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 4: The Black Cat Pirates is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 5: For Whom the Bell Tolls',
        ]);

        Detail::create([
            'book_id' => 8,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 5: For Whom the Bell Tolls is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 6: The Oath',
        ]);

        Detail::create([
            'book_id' => 9,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 6: The Oath is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'One Piece, Vol. 7: The Crap-Geezer',
        ]);

        Detail::create([
            'book_id' => 10,
            'author' => 'Eiichiro Oda',
            'publisher' => 'Shueisha',
            'year' => 2019,
            'description' => 'One Piece, Vol. 7: The Crap-Geezer is a Japanese manga series written and illustrated by Eiichiro Oda.'
        ]);

        Book::create([
            'category_id' => 4,
            'title' => 'Salt Fat Acid Heat',
        ]);

        Detail::create([
            'book_id' => 11,
            'author' => 'Samin Nosrat',
            'publisher' => 'Gramedia',
            'year' => 2017,
            'description' => 'Salt Fat Acid Heat: Mastering the Elements of Good Cooking is a 2017 cookbook written by American chef Samin Nosrat and illustrated by Wendy MacNaughton. The book was designed by Alvaro Villanueva. It inspired the 2018 American four-part cooking docu-series Salt Fat Acid Heat'
        ]);
    }
}
