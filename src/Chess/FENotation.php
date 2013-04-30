<?php

namespace Chess;

class FENotation implements NotationInterface
{
    public function hasEnPassant()
    {
        return true;
    }

    
}