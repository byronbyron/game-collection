<?php

class LinkMeToTest extends TestCase {

    public function testGeneratesAnchorTab()
    {
        $actual = link_me_to('dogs/1', 'Show Dog');
        $expect = "<a href='http://localhost/dogs/1'>Show Dog</a>";

        $this->assertEquals($expect, $actual);
    }

    public function testAppliesAttributesUsingArray()
    {
        $actual = link_me_to('dogs/1', 'Show Dog', ['class' => 'button']);
        $expect = "<a href='http://localhost/dogs/1' class=\"button\">Show Dog</a>";

        $this->assertEquals($expect, $actual);
    }
}