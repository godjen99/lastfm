<?php

use LastFm\Query;

class QueryTest extends PHPUnit_Framework_TestCase
{
    /** @var Query */
    protected $query;

    protected $fakeApiKey = '1234567';

    protected function setUp()
    {
        $this->query = new Query($this->fakeApiKey);
    }

    public function test_proper_sting_is_created_based_when_multiple_keys_are_added()
    {
        $this->query->add('someKey', 'some.value')
            ->add('anotherKey', 'a value that should\'t break things');

        $result = $this->query->get();

        $this->assertInternalType('string', $result);
        $this->assertHasProperBaseUrl($result);
        $this->assertContains('someKey=some.value', $result);
        $this->assertContains('anotherKey=a value that should\'t break things', $result);
        // 1 per "add" call, and 1 for the api key/type.
        $this->assertEquals(3, substr_count($result, '&'));
    }

    public function test_previous_queries_to_not_interfere_with_new_ones()
    {
        $this->query->add('test_key', 'test value')
            ->add('another_test_key', 'another test value');

        $this->query->get();

        $this->query->add('a_newKey', 'a new value');

        $result = $this->query->get();

        $this->assertHasProperBaseUrl($result);
        $this->assertNotContains('another_test_key', $result);
        $this->assertNotContains('test value', $result);
        $this->assertContains('a_newKey=a new value', $result);
    }

    public function test_previous_query_params_can_be_kept()
    {
        $this->query->add('test_key', 'test value');

        $this->query->get(false);

        $this->query->add('another_test_key', 'another test value');

        $result = $this->query->get();

        $this->assertHasProperBaseUrl($result);
        $this->assertContains('test_key=test value', $result);
        $this->assertContains('another_test_key=another test value', $result);
    }

    protected function assertHasProperBaseUrl($string)
    {
        $this->assertStringStartsWith(Query::BASE_URL, $string);
        $this->assertContains("api_key={$this->fakeApiKey}&format=json", $string);
    }
}
