<?php
//
//
//abstract class Expression
//{
//    abstract public function interpret(Context $context);
//}
//
//class Context
//{
//    private array $worker = [];
//
//    /**
//     * @param string $worker
//     */
//    public function setWorker(string $worker): void
//    {
//        $this->worker[] = $worker;
//    }
//
//    public function lookUp($key)
//    {
//        if (isset($this->worker[$key])) {
//            return $this->worker[$key];
//        }
//        return false;
//    }
//}
//
//class VariableExp extends Expression
//{
//    private int $key;
//
//    /**
//     * VariableExp constructor.
//     * @param int $key
//     */
//    public function __construct(int $key)
//    {
//        $this->key = $key;
//    }
//
//    public function interpret(Context $context)
//    {
//        return $context->lookUp($this->key);
//    }
//}
//
//class AndExp extends Expression
//{
//    private int $keyOne;
//    private int $keyTwo;
//
//    /**
//     * AndExp constructor.
//     * @param int $keyOne
//     * @param int $keyTwo
//     */
//    public function __construct(int $keyOne, int $keyTwo)
//    {
//        $this->keyOne = $keyOne;
//        $this->keyTwo = $keyTwo;
//    }
//
//    public function interpret(Context $context)
//    {
//        return $context->lookUp($this->keyOne) && $context->lookUp($this->keyTwo);
//    }
//}
//
//class OrExp extends Expression
//{
//    private int $keyOne;
//    private int $keyTwo;
//
//    /**
//     * AndExp constructor.
//     * @param int $keyOne
//     * @param int $keyTwo
//     */
//    public function __construct(int $keyOne, int $keyTwo)
//    {
//        $this->keyOne = $keyOne;
//        $this->keyTwo = $keyTwo;
//    }
//
//    public function interpret(Context $context)
//    {
//        return $context->lookUp($this->keyOne) || $context->lookUp($this->keyTwo);
//    }
//}
//
//$context = new Context();
//
//$context->setWorker('Boris');
//$context->setWorker('Fedor');
//
//$variableExp = new VariableExp(1);
//$andExp = new AndExp(1, 3);
//$orExp = new OrExp(1, 3);
//
//var_dump($variableExp->interpret($context));
//var_dump($andExp->interpret($context));
//var_dump($orExp->interpret($context));