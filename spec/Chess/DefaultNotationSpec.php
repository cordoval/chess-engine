<?php

namespace spec\Chess;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefaultNotationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Chess\NotationInterface');
    }

    /**
     *
     */
    function it_should_normalize_notation()
    {
        $this->normalize()->shouldReturn($this);
    }

    /**
     *
     */
    function it_should_denormilize_notation()
    {
        $this->denormilize()->shouldReturn($this);
    }
}
