<?php


interface Specification
{
    public function isNormal(Pupil $pupil);
}

class Pupil
{
    private int $rate = 0;

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * Pupil constructor.
     * @param int $rate
     */
    public function __construct(int $rate)
    {
        $this->rate = $rate;
    }
}

class PupilSpecification implements Specification
{
    private int $needRate = 0;

    /**
     * PupilSpecification constructor.
     * @param int $needRate
     */
    public function __construct(int $needRate)
    {
        $this->needRate = $needRate;
    }

    public function isNormal(Pupil $pupil)
    {
        return $this->needRate < $pupil->getRate();
    }
}

class AndSpecification implements Specification
{
    private array $specification = [];

    /**
     * AndSpecification constructor.
     * @param array $specification
     */
    public function __construct(array $specification)
    {
        $this->specification = $specification;
    }

    public function isNormal(Pupil $pupil)
    {
        foreach ($this->specification as $specification) {
            if (!$specification->isNormal($pupil)) {
                return false;
            }
        }
        return true;
    }
}

class OrSpecification implements Specification
{
    private array $specification = [];

    /**
     * AndSpecification constructor.
     * @param array $specification
     */
    public function __construct(array $specification)
    {
        $this->specification = $specification;
    }

    public function isNormal(Pupil $pupil)
    {
        foreach ($this->specification as $specification) {
            if ($specification->isNormal($pupil)) {
                return true;
            }
        }
        return false;
    }
}

class NotSpecification implements Specification
{
    private Specification $specification;

    /**
     * NotSpecification constructor.
     * @param Specification $specification
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isNormal(Pupil $pupil)
    {
        return !$this->specification->isNormal($pupil);
    }
}