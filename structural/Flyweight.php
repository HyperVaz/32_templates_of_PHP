<?php
//
//interface Mail{
//    public function render();
//}
//
//abstract class TypeMail{
//    private string $text;
//
//    /**
//     * @return string
//     */
//    public function getText(): string
//    {
//        return $this->text;
//    }
//
//    /**
//     * TypeMail constructor.
//     * @param string $text
//     */
//    public function __construct(string $text)
//    {
//        $this->text = $text;
//    }
//}
//
//class BusinessMail extends TypeMail implements Mail{
//
//    public function render()
//    {
//        return $this->getText() . ' business mail';
//    }
//}
//
//class JobMail extends TypeMail implements Mail{
//
//    public function render()
//    {
//        return $this->getText() . ' job mail';
//
//    }
//}
//
//class MailFactory{
//    private array $pool = [];
//
//    public function getMail($id, $typeMail)
//    {
//        if (!isset($this->pool[$id])) {
//            $this->pool[$id] = $this->make($typeMail);
//        }
//        return $this->pool[$id];
//    }
//
//    public function make($typeMail)
//    {
//        if ($typeMail === 'business') {
//            return new BusinessMail('Business text');
//        }
//        return new JobMail('Job text');
//    }
//}
//
//$mailFactory = new MailFactory();
//$mail = $mailFactory->getMail(10, 'business');
//var_dump($mail->render());