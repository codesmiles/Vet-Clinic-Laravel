<?php

use Illuminate\Support\Str;
function generatePlayerId(): string
{
    return Str::random(10);
}
