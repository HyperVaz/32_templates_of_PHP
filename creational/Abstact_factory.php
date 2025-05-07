<?php
//interface AbstactFactrory{
//    public static function makeDeveloperWorker() : DeveloperWorker;
//    public static function makeDesignerWorker() : DesignerWorker;
//}
//
//class OutsourceWorkerFactory implements AbstactFactrory{
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new OutSourceDeveloperWorker();
//    }
//
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new OutSourceDesignerWorker();
//    }
//}
//
//class NativeWorkerFactory implements AbstactFactrory{
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new NativeDeveloperWorker();
//    }
//
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new NativeDesignerWorker();
//    }
//}
//
//
//interface Worker{
//    public function work();
//}
//interface DeveloperWorker extends Worker{
//
//}
//interface DesignerWorker extends Worker{
//
//}
//
//class NativeDeveloperWorker implements DeveloperWorker{
//    public function work()
//    {
//        printf('im developing as native');
//    }
//}
//
//class OutSourceDeveloperWorker implements DeveloperWorker{
//    public function work()
//    {
//        printf('im developing as outsource');
//    }
//}
//
//class NativeDesignerWorker implements DesignerWorker{
//    public function work()
//    {
//        printf('im designing as native');
//    }
//}
//
//class OutSourceDesignerWorker implements DesignerWorker{
//    public function work()
//    {
//        printf('im designing as outsource');
//    }
//}
//
//$nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
//$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
//$nativeDesigner = NativeWorkerFactory::makeDesignerWorker();
//$outsourceDesigner = OutsourceWorkerFactory::makeDesignerWorker();
//
//$nativeDesigner->work();