<?php

declare(strict_types=1);

namespace Nikolai\Php\Domain\Model;

class Burger extends AbstractDish
{
/*
    private BurgerStateInterface $state;

    public function __construct()
    {
        parent::__construct();
        $this->state = new NewState($this);
    }

    public function fryCutlet(): void
    {
        $this->state->fryCutlet();
    }

    public function cutBun(): void
    {
        $this->state->cutBun();
    }

    public function addIngredients(): void
    {
        $this->state->addIngredients();
    }

    public function setState(BurgerStateInterface $state): void
    {
        $this->state = $state;
        $this->notify();
    }

    public function getStringState(): string
    {
        return $this->state->toString();
    }
*/
    public function getDescription(): string
    {
        return 'Бургер';
    }

    public function getPrice(): int
    {
        return 111;
    }
}
