<?php
//
//
//class QueryBuilder
//{
//    private array $select = [];
//    private array $from = [];
//    private array $where = [];
//
//    public function select (array $select): QueryBuilder{
//        $this->select = $select;
//        return $this;
//    }
//
//    public function from($from)
//    {
//        $this->from[] = $from;
//        return $this;
//    }
//
//    public function where($where)
//    {
//        $this->where[] = $where;
//        return $this;
//    }
//
//    public function get(){
//        return sprintf('SELECT %s FROM %s WHERE %s',
//        join(',', $this->select),
//        join(',', $this->from),
//        join(' AND ', $this->where));
//    }
//}
//
//$queryBuilder = new QueryBuilder();
//
//$query = $queryBuilder->select(['title', 'id'])->from('posts')->where('views > 20')->get();
//
//var_dump($query);