<?php

namespace spec\Chess;

use Chess\NotationInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChessParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Chess\ChessParser');
    }

    function it_parses_string_into_representation(NotationInterface $notation)
    {
        $this->parse('rn3b1N/pp2k2p/4p2q/1NQ5/3P4/8/PPP3PP/5RK1 b - - 1 1', $notation)
            ->shouldReturn(array('1', '2', '3', '4'))
        ;
    }
}
