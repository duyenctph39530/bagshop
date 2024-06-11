<?php
namespace Fpt\ThoiTrang\Models;

use Fpt\ThoiTrang\Commons\Model;

class Product extends Model
{
    protected string $tableName = 'products';

    public function all()
    {
        $queryBuilder = clone $this->queryBuilder;
        return $queryBuilder
            ->select('p.id', 'p.name', 'p.price', 'p.img', 'p.id_categories', 'p.description', 'p.created_at', 'p.updated_at', 'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();
    }

    public function paginate($page = 1, $perPage = 6)
    {
        $queryBuilder = clone $this->queryBuilder;

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select('p.id', 'p.name', 'p.price', 'p.img', 'p.id_categories', 'p.description', 'p.created_at', 'p.updated_at', 'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        $queryBuilder = clone $this->queryBuilder;
        return $queryBuilder
            ->select('p.id', 'p.name', 'p.price', 'p.img', 'p.id_categories', 'p.description', 'p.created_at', 'p.updated_at', 'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
            ->where('p.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

    public function insert(array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->insert($this->tableName);

            $index = 0;
            foreach ($data as $key => $value) {
                $query->setValue($key, '?')->setParameter($index, $value);
                ++$index;
            }

            $query->executeQuery();
            return true;
        }

        return false;
    }

    public function update($id, array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->update($this->tableName);

            $index = 0;
            foreach ($data as $key => $value) {
                $query->set($key, '?')->setParameter($index, $value);
                ++$index;
            }

            $query->where('id = ?')
                ->setParameter(count($data), $id)
                ->executeQuery();

            return true;
        }

        return false;
    }

    public function delete($id)
    {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->executeQuery();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
