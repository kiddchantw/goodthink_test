<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;




class ExampleTest extends TestCase
{
    
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }


    public function test_fetches_trending_articles()
    {
        // factory('App\Model\Article',2)->create();
        // factory('App\Model\Article')->create(['reads' => 10]);
        // $mostPopular = factory('App\Model\Article')->create(['reads' => 20]);
                // $this->assertEquals($mostPopular->id,$articles->first()->id);

        //laravel 8 的 factory寫法
        Article::factory()->count(3)->create();
        $articles = Article::all();
        $this->assertCount(3,$articles);
    }
}
