<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies of '{$this->title}' available for borrowing.\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        $book->borrowBook();
        // echo "{$this->name} has borrowed '{$book->getTitle()}'.\n";
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        // echo "{$this->name} has returned '{$book->getTitle()}'.\n";
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);
// $book3 = new Book("The Hobbit", 4);
// $book4 = new Book("The Catcher in the Rye", 6);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");
// $member3 = new Member("Bob Johnson");
// $member4 = new Member("Alice Williams");

// Borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);
// $member3->borrowBook($book3);
// $member4->borrowBook($book4);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
// echo "Available Copies of '{$book3->getTitle()}': {$book3->getAvailableCopies()}\n";
// echo "Available Copies of '{$book4->getTitle()}': {$book4->getAvailableCopies()}\n";
