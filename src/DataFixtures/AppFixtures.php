<?php

namespace App\DataFixtures;

use App\Entity\Posts;
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
        for($j; $j <= 50; $j++){
            $post = new Posts();
            $post->setName('Article'. $j);
            $post->setContent('test');
            $post->setCreatedAt(new \DateTime());
            $post->setAuthor('author #'.$j);
            $post->setMainPicture('assets/img/main_picture/picture'.$j.'.jpg');
            $post->setPostPicture(null);
            $manager->persist($post);
        };
        $manager->flush();
    }
}
