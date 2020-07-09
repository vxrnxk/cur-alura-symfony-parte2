<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('usuario')
            ->setPassword('$argon2i$v=19$m=1024,t=2,p=2$QmNMbWZQeGRzZmkxMjczbA$9kJxompi2O5mVscOaPPChvFd8etBVQiRLOj0SFOngcg');
        $manager->persist($user);

        $manager->flush();
    }
}
