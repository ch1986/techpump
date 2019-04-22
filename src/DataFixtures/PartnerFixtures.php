<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Partner;

class PartnerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $partner1 = new Partner();
        $partner1->setGoogleAnalyticsId('UA-38612660-28');
        $partner1->setName('Babosas');
        $partner1->setNats1('Nzg5LjEuMjUuNDMuMC4wLjAuMC4w');
        $partner1->setNats2('Nzg5LjEuMjUuNDMuMC4wLjAuMC4w');
        $partner1->setStylePath('marca_blanca/babosas');
        $partner1->setUrl('https://babosas.com');
        $manager->persist($partner1);
        
        $partner2 = new Partner();
        $partner2->setGoogleAnalyticsId('UA-38612660-28');
        $partner2->setName('Cerdas');
        $partner2->setNats1('LjYwNS7xLjI1LjQzLjAuMC4wLjAuMA');
        $partner2->setNats2('LjYwNS7xLjI1LjQzLjAuMC4wLjAuMA');
        $partner2->setStylePath('marca_blanca/cerdas.com');
        $partner2->setUrl('https://www.cerdas.com');
        $manager->persist($partner2);
        
        $partner3 = new Partner();
        $partner3->setGoogleAnalyticsId('UA-863435-17');
        $partner3->setName('ConejoX');
        $partner3->setNats1('MjYwNS4xLjI1LjQzLjAuMC4wLjAuMA');
        $partner3->setNats2('MjYwNS4xLjI1LjQzLjAuMC4wLjAuMA');
        $partner3->setStylePath('marca_blanca/conejox.com');
        $partner3->setUrl('https://www.conejox.com');
        $manager->persist($partner3);

        $manager->flush();
    }
}
