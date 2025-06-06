<?php
//
//
//class Memento
//{
//    private State $state;
//
//    /**
//     * @return State
//     */
//    public function getState(): State
//    {
//        return $this->state;
//    }
//    /**
// * Memento constructor.
// * @param State $state
// */
//    public function __construct(State $state)
//{
//    $this->state = $state;
//}
//}
//
//class State
//{
//    public const CREATED = 'created';
//    public const PROCESS = 'process';
//    public const TEST = 'test';
//    public const DONE = 'done';
//
//    private string $state;
//
//    /**
//     * State constructor.
//     * @param string $state
//     */
//    public function __construct(string $state)
//    {
//        $this->state = $state;
//    }
//
//    public function __toString(): string
//    {
//        return $this->state;
//    }
//}
//
//class Task
//{
//    private State $state;
//
//    public function create()
//    {
//        $this->state = new State(State::CREATED);
//    }
//
//    public function process()
//    {
//        $this->state = new State(State::PROCESS);
//
//    }
//
//    public function test()
//    {
//        $this->state = new State(State::TEST);
//
//    }
//
//    public function done()
//    {
//        $this->state = new State(State::DONE);
//
//    }
//
//    public function saveToMemento()
//    {
//        return new Memento($this->state);
//    }
//
//    public function getFromMemento(Memento $memento)
//    {
//        $this->state = $memento->getState();
//    }
//
//    public function getState()
//    {
//        return $this->state;
//    }
//}
//
//$task = new Task();
//
//$task->create();
//
//$memento = $task->saveToMemento();
//
//var_dump($memento->getState());