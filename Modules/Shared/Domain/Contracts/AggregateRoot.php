<?php

namespace Modules\Shared\Domain\Contracts;

/** @template T */
abstract class AggregateRoot extends Entity
{
    /**
     * @var array<int, DomainEvent>
     */
    public readonly array $domainEvents;

    public function clearEvents(): void
    {
        $this->domainEvents = [];
    }

    protected function addDomainEvent(DomainEvent $domainEvent): void
    {
        $this->domainEvents[] = $domainEvent;
    }
}
