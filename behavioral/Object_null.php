<?php
//
//
//interface Worker{
//    public function work();
//}
//
//class ObjectManager{
//    private Worker $worker;
//
//    /**
//     * ObjectManager constructor.
//     * @param Worker $worker
//     */
//    public function __construct(Worker $worker)
//    {
//        $this->worker = $worker;
//    }
//
//    public function goWork()
//    {
//        $this->worker->work();
//    }
//}
//
//class Developer implements Worker
//{
//
//    public function work()
//    {
//        printf('working');
//    }
//}
//
//class NullDeveloper implements Worker{
//
//    public function work()
//    {
//        // TODO: Implement work() method.
//    }
//}
//
//$developer = new Developer();
//
//$nullableDeveloper = new NullDeveloper();
//
//$objectManager = new ObjectManager($developer);