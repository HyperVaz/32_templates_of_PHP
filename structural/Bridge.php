<!-- --><?php
//
//interface Formatter{
//    public function format($str): string;
//}
//
//class SimpleText implements Formatter{
//
//    public function format($str): string
//    {
//        return $str;
//    }
//}
//
//class HTMLText implements Formatter{
//
//    public function format($str): string
//    {
//        return "<p>$str</p>";
//    }
//}
//
//abstract class BridgeService{
//    public Formatter $formatter;
//
//    /**
//     * BridgeService constructor.
//     * @param Formatter $formatter
//     */
//    public function __construct(Formatter $formatter)
//    {
//        $this->formatter = $formatter;
//    }
//
//    abstract public function getFormatter($str);
//}
//
//class SimpleTextService extends BridgeService{
//
//    public function getFormatter($str)
//    {
//        return $this->formatter->format($str);
//    }
//}
//
//class HTMLTextService extends BridgeService{
//
//    public function getFormatter($str)
//    {
//        return $this->formatter->format($str);
//    }
//}
//
// $simpleText = new SimpleText();
//$htmlText = new HTMLText();
//
// $simpleTextService = new SimpleTextService($simpleText);
// $htmlTextService = new HTMLTextService($htmlText);
//
// var_dump($simpleTextService->getFormatter('hellow'));