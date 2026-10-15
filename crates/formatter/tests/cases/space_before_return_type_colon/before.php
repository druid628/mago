<?php

function standalone(): void {}

function nullable(): ?string {}

function union(): int|string {}

class Example
{
    public function concrete(): void {}

    abstract public function abstract(): Countable&Iterator;
}

interface Contract
{
    public function method(): bool;
}

$closure = function (): string {};
$closureWithUse = function () use ($closure): callable {};
$arrow = fn(): int => 1;

enum Status: string
{
    case Ready = 'ready';
}
