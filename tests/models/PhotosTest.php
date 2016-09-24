<?php

/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 24.09.2016
 * Time: 18:46
 */
 use Illuminate\Foundation\Testing\WithoutMiddleware;
 use Illuminate\Foundation\Testing\DatabaseMigrations;

 use App\Photos;

 class PhotosTest extends TestCase
 {
 use DatabaseMigrations;

     public function testCanInstantiateTodolist()
     {
         $list = new Photos;

         $this->assertEquals(get_class($list), 'App\Photos');
     }
 }