<?php

function getBooks()
{
    return [
        [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "isbn" => "",
            "year" => 2005,
            "stock" => 12,
            "category" => "Fiksi",
            "category_id" => 1,
            "description" => "",
            "authors" => ["Andrea Hirata"],
            "author_ids" => [1],
        ],
        [
            "id" => 2,
            "title" => "Bumi",
            "isbn" => "",
            "year" => 2014,
            "stock" => 8,
            "category" => "Fiksi",
            "category_id" => 1,
            "description" => "",
            "authors" => ["Tere Liye"],
            "author_ids" => [2],
        ],
        [
            "id" => 3,
            "title" => "Harry Potter dan Batu Bertuah",
            "isbn" => "",
            "year" => 1997,
            "stock" => 5,
            "category" => "Fiksi",
            "category_id" => 1,
            "description" => "",
            "authors" => ["J.K. Rowling"],
            "author_ids" => [3],
        ],
        [
            "id" => 4,
            "title" => "Bumi Manusia",
            "isbn" => "",
            "year" => 1980,
            "stock" => 6,
            "category" => "Sejarah",
            "category_id" => 3,
            "description" => "",
            "authors" => ["Pramoedya Ananta Toer"],
            "author_ids" => [4],
        ],
        [
            "id" => 5,
            "title" => "Antologi Rasa Nusantara",
            "isbn" => "978-602-1234-56-7",
            "year" => 2021,
            "stock" => 4,
            "category" => "Fiksi",
            "category_id" => 1,
            "description" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.",
            "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
            "author_ids" => [4, 5],
        ],
    ];
}

function getBook($id)
{
    $books = getBooks();

    foreach ($books as $book) {
        if ($book['id'] === $id) {
            return $book;
        }
    }

    return null;
}