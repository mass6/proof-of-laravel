<?php

namespace Tests\Feature;

use Tests\TestCase;

class TableofContentsTest extends TestCase
{
    /** @test */
    public function it_shows_the_table_of_contents_view()
    {
        $response = $this->get('/toc')
            ->assertStatus(200)
            ->assertSee('Introduction');
    }
}
