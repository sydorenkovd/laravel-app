<?php

/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 20.09.2016
 * Time: 22:04
 */
class WelcomeTest extends TestCase
{
    public function testCanSeeTheContactUsLink()
    {
        $this->visit('/laravel/public/')->see('gallery');
    }
}