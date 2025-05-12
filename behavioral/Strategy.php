<?php
//
//
//interface Definer{
//    public function define($arg);
//}
//
//class Data{
//    private Definer $definer;
//    private int|string|bool $arg;
//
//    /**
//     * @param bool|int|string $arg
//     */
//    public function setArg(bool|int|string $arg): void
//    {
//        $this->arg = $arg;
//    }
//
//    /**
//     * Data constructor.
//     * @param Definer $definer
//     */
//    public function __construct(Definer $definer)
//    {
//        $this->definer = $definer;
//    }
//
//    public function executeStrategy()
//    {
//        return $this->definer->define($this->arg);
//    }
//}
//
//class IntDefiner implements Definer{
//    public function define($arg)
//    {
//        return $arg . 'from int strategy';
//    }
//}
//
//class StringDefiner implements Definer{
//    public function define($arg)
//    {
//        return $arg . 'from string strategy';
//    }
//}
//
//class BoolDefiner implements Definer{
//    public function define($arg)
//    {
//        return $arg . 'from bool strategy';
//    }
//}
//
//$data = new Data(new IntDefiner());
//
//$data->setArg('some arg for first');
//
//var_dump($data->executeStrategy());