<?php
//
//
//interface Worker{
//    public function closedHours($hours);
//
//    public function countSalary();
//}
//
//class WorkerOutsource implements Worker{
//    private array $hours = [];
//
//    public function closedHours($hours)
//    {
//        $this->hours = $hours;
//    }
//
//    public function countSalary()
//    {
//        return array_sum($this->hours) * 500;
//    }
//}
//
//class WorkerProxy extends WorkerOutsource implements Worker{
//    private int $salary = 0;
//
//    public function countSalary()
//    {
//        if ($this->salary === 0) {
//            $this->salary = parent::countSalary();
//        }
//        return $this->salary;
//    }
//}
//
//$workerProxy = new WorkerProxy();
//$workerProxy->closedHours(5);
//var_dump($workerProxy->countSalary());