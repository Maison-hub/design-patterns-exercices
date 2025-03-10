<?php

namespace App;
 use App\User;
class MusicBand 
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    private array $observers = [];

    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}


    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concert = [
            'date' =>  $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(User $user): void
    {
        $this->observers[] = $user;
    }

    public function detach(User $user): void
    {
        $this->observers = array_filter($this->observers, function($observer) use ($user) {
            return $observer !== $user;
        });
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}