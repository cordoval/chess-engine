<?php

namespace Chess;

class FENotation implements NotationInterface
{
    public function hasEnPassant()
    {
        return true;
    }

    public function normalize()
    {
        $callback = function($input) {
            // here goes algorithm

            return true;
        };

        return $callback;
    }

    public function denormalize()
    {
        $callback = function($input) {
            // here goes algorithm

            return true;
        };

        return $callback;
    }
}