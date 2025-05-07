<?php
//
//
//class WorkerFacade
//{
//    private Developer $developer;
//    private Designer $designer;
//
//    /**
//     * WorkerFacade constructor.
//     * @param Developer $developer
//     * @param Designer $designer
//     */
//    public function __construct(Developer $developer, Designer $designer)
//    {
//        $this->developer = $developer;
//        $this->designer = $designer;
//    }
//
//    public function startWork()
//    {
//        $this->developer->startDevelop();
//        $this->designer->startDesigning();
//    }
//    public function endWork(){
//        $this->developer->endDevelop();
//        $this->designer->endDesigning();
//    }
//}
//
//class Developer
//{
//    public function startDevelop(){
//        printf('start develop');
//    }
//    public function endDevelop(){
//        printf('end develop');
//    }
//}
//
//class Designer
//{
//    public function startDesigning(){
//        printf('start designing');
//    }
//    public function endDesigning(){
//        printf('end designing');
//    }
//}
//
//$developer = new Developer();
//$designer= new Designer();
//
//$workerFacade = new WorkerFacade($developer, $designer);
//
//$workerFacade->startWork();