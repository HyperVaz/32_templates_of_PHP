<?php
//
//
//class Worker{
//    private string $name;
//
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * Worker constructor.
//     * @param string $name
//     */
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    public static function make($args)
//    {
//        return new self($args['name']);
//    }
//}
//
//class WorkerMapper{
//    private WorkerStorageAdapter $workerStorageAdapter;
//
//    /**
//     * WorkerMapper constructor.
//     * @param WorkerStorageAdapter $workerStorageAdapter
//     */
//    public function __construct(WorkerStorageAdapter $workerStorageAdapter)
//    {
//        $this->workerStorageAdapter = $workerStorageAdapter;
//    }
//
//    public function findById($id)
//    {
//        $res = $this->workerStorageAdapter->find($id);
//        if ($res === null) {
//            return 'Worker does not exists';
//        }
//        return $this->make($res);
//    }
//
//    private function make($args): Worker
//    {
//        return new Worker::make($args);
//    }
//}
//
//class WorkerStorageAdapter{
//    private array $data = [];
//
//    /**
//     * WorkerStorageAdapter constructor.
//     * @param array $data
//     */
//    public function __construct(array $data)
//    {
//        $this->data = $data;
//    }
//
//    public function find($id)
//    {
//        if (isset($this->data[$id])) {
//            return $this->data[$id];
//        }
//        return null;
//    }
//}
//
//$data = [
//    1 => [
//        'name'=>'Boris'
//    ]
//];
//
//$workerStorageAdapter = new WorkerStorageAdapter($data);
//
//$workerMapper = new WorkerMapper($workerStorageAdapter);
//
//$worker = $workerMapper->findById(1);
//
//var_dump($worker->getName());