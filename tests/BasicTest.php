<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    // Pour que le test la fonctionne il faut ajouter les fichiers migrations de la BDD (car la la BDD est vide)
    /*public function testClickNextForBeta()
    {
        $this->visit('/')
             ->click('Shop')
             ->seePageIs('/shop')
             ->see('Articles');
    }*/
}
