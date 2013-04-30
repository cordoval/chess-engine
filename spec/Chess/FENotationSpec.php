<?php

namespace spec\Chess;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FENotationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Chess\NotationInterface');
    }

    function it_has_en_passant_target_square()
    {
        $this->hasEnPassant()->shouldReturn(true);
    }

    function it_shohuld_normalize_notation()
    {
        $this->normalize()->shouldReturn(true);
    }
}
