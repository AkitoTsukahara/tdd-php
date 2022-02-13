<?php
declare(strict_types=1);

namespace TddPhp\Money;

class Dollar
{
    public int $amount;

    public function __construct(
        int $amount
    )
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $dollar)
    {
        return $this->amount === $dollar->amount;
    }
}
