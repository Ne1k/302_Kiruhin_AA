<?php

function run_test()
{
    $book1 = new Book("Ведьмак:Последнее желание", array("Анджей Сапковский"), "Астрель", 1993);
    $bookslist = new BooksList();
    $bookslist->add($book1);
    $bookslist->store('Books.txt');
    $book2 = new Book("Kali Linux от разработчиков", array("Рафаэль Херцог", "Марк Хедингтон", "Мати Ахарони"), "ПИТЕР", 2019);
    $book3 = new Book("Лаборатория хакера", array("Cергей Бабин"), "БХВ-Петербург", 2016);
    $bookslist->add($book2);
    $bookslist->add($book3);
    echo "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Ведьмак:Последнее желание" . PHP_EOL .
        "Автор 1: Анджей Сапковский" . PHP_EOL .
        "Издательство: Астрель" . PHP_EOL .
        "Год: 1993" . PHP_EOL .
        "Id: 2" . PHP_EOL .
        "Название: Kali Linux от разработчиков" . PHP_EOL .
        "Автор 1: Рафаэль Херцог" . PHP_EOL .
        "Автор 2: Марк Хедингтон" . PHP_EOL .
        "Автор 2: Мати Ахарони" . PHP_EOL .
        "Издательство: ПИТЕР" . PHP_EOL .
        "Год: 2019" . PHP_EOL .
        "Id: 3" . PHP_EOL .
        "Название: Лаборатория хакера" . PHP_EOL .
        "Автор 1: Cергей Бабин" . PHP_EOL .
        "Издательство: БХВ-Петербург" . PHP_EOL .
        "Год: 2016" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
    $bookslist->load('Books.txt');
    echo PHP_EOL . "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Ведьмак:Последнее желание" . PHP_EOL .
        "Автор 1: Анджей Сапковский" . PHP_EOL .
        "Издательство: Астрель" . PHP_EOL .
        "Год: 1993" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
}
