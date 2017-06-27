<?php

use LastFm\Artist\SingleResult;
use Tests\Stubs\ArtistSearch;

class SingleResultTest extends PHPUnit_Framework_TestCase
{
    /** @var SingleResult */
    protected $result;

    /** @var array */
    protected $expectedArtist;

    public function setUp()
    {
        $this->expectedArtist = ArtistSearch::$successfulResult['results']['artistmatches']['artist'][1];
        $this->result = new SingleResult($this->expectedArtist);
    }

    public function test_getting_the_name_of_the_artist()
    {
        $this->assertEquals($this->expectedArtist['name'], $this->result->name());
    }

    public function test_getting_the_listeners_count_of_an_artist()
    {
        $this->assertEquals($this->expectedArtist['listeners'], $this->result->listeners());
    }

    public function test_getting_the_mbid_of_an_artist()
    {
        $this->assertEquals($this->expectedArtist['mbid'], $this->result->mbid());
    }

    public function test_getting_the_url_of_an_artist()
    {
        $this->assertEquals($this->expectedArtist['url'], $this->result->url());
    }

    public function test_getting_if_the_artist_is_streamable()
    {
        $this->assertEquals((bool) $this->expectedArtist['streamable'], $this->result->streamable());
    }

    public function test_getting_the_small_image_url()
    {
        $this->assertEquals($this->expectedArtist['image'][0]['#text'], $this->result->smallImage());
    }

    public function test_getting_the_medium_image_url()
    {
        $this->assertEquals($this->expectedArtist['image'][1]['#text'], $this->result->mediumImage());
    }

    public function test_getting_the_large_image_url()
    {
        $this->assertEquals($this->expectedArtist['image'][2]['#text'], $this->result->largeImage());
    }

    public function test_getting_the_extra_large_image_url()
    {
        $this->assertEquals($this->expectedArtist['image'][3]['#text'], $this->result->extraLargeImage());
    }

    public function test_getting_the_mega_sized_image_url()
    {
        $this->assertEquals($this->expectedArtist['image'][4]['#text'], $this->result->megaImage());
    }
}
