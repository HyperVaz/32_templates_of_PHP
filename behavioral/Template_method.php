<?php
//
//
//abstract class Task
//{
//    public function printSections()
//    {
//        $this->printHeader();
//        $this->printBody();
//        $this->printFooter();
//        $this->printCustom();
//    }
//
//    private function printHeader()
//    {
//        printf('header' . PHP_EOL);
//    }
//
//    private function printBody()
//    {
//        printf('body' . PHP_EOL);
//    }
//
//    private function printFooter()
//    {
//        printf('footer' . PHP_EOL);
//    }
//
//    abstract protected function printCustom();
//
//}
//
//class DeveloperTask extends Task
//{
//
//    protected function printCustom()
//    {
//        printf('for dev' . PHP_EOL);
//    }
//}
//
//class DesignerTask extends Task
//{
//
//    protected function printCustom()
//    {
//        printf('for designer' . PHP_EOL);
//    }
//}
//
//$developerTask = new DeveloperTask();
//$designerTask = new DesignerTask();
//
//$designerTask->printSections();
