<?php

namespace App\DataFixtures;

use App\Entity\Ticket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1; $i <= 80; $i++)
        {
            $ticket = new Ticket();
            $ticket->setIsHandled(false);
            $ticket->setCreatedAt(new \DateTime());
            $ticket->setClosedAt(null);
            $ticket->setOpenedBy('user.'.$i.'@edu.devinci.fr');
            $ticket->setFile('asset/ticket/file-user-'. $i);
            $manager->persist($ticket);
        }
        $manager->flush();
    }
}
