<?php
//
//
//interface Command
//{
//    public function execute();
//}
//
//interface Undoable extends Command
//{
//    public function undo();
//}
//
//class Output{
//    private bool $isEnable = true;
//
//    private string $body='';
//
//    public function enable(){
//        $this->isEnable = true;
//    }
//
//    public function disable()
//    {
//        $this->isEnable = false;
//    }
//
//    /**
//     * @return string
//     */
//    public function getBody(): string
//    {
//        return $this->body;
//    }
//
//    public function write($str)
//    {
//        if ($this->isEnable) {
//            $this->body = $str;
//        }
//    }
//}
//
//class Invoker{
//    private Command $command;
//
//    /**
//     * @param Command $command
//     */
//    public function setCommand(Command $command): void
//    {
//        $this->command = $command;
//    }
//
//
//    public function run()
//    {
//        $this->command->execute();
//    }
//}
//
//class Message implements Command {
//    private Output $output;
//
//    /**
//     * Message constructor.
//     * @param Output $output
//     */
//    public function __construct(Output $output)
//    {
//        $this->output = $output;
//    }
//
//    public function execute()
//    {
//        $this->output->write('from execute string');
//    }
//}
//
//class ChangerStatus implements Undoable
//{
//    private Output $output;
//
//    /**
//     * ChangerStatus constructor.
//     * @param Output $output
//     */
//    public function __construct(Output $output)
//    {
//        $this->output = $output;
//    }
//
//    public function execute()
//    {
//        $this->output->enable();
//    }
//
//
//    public function undo()
//    {
//        $this->output->disable();
//
//    }
//}
//
//$output = new Output();
//
//$worker = new Invoker();
//
//$message = new Message($output);
//
//$message->execute();
//
//var_dump($output->getBody());