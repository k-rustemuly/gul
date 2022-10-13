<?php
namespace App\Domain\Repositories;

abstract class Repository implements RepositoryInterface
{
    public function __call($method, $arguments)
    {
        return $this->model->{$method}(...$arguments);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function update($id, array $attributes)
    {
        return tap($this->getById($id), function ($record) use ($attributes) {
            $record->update($attributes);
        });
    }

    public function updateWhere(array $where, array $attributes)
    {
        return $this->where($where)->update($attributes);
    }

    public function updateById($id, array $attributes)
    {
        return $this->where(["id" => $id])->update($attributes);
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }

    public function getByBinAndIin($bin, $iin)
    {
        return $this->model->where('iin', $iin)->where('bin', $bin)->first();
    }

    public function deleteWhere(array $where)
    {
        return $this->where($where)->delete();
    }

    /**
     * 
     * @param string|int $id Айди
     */
    public function findById($id)
    {
        $result = $this->model->where('id', $id)->first();
        return $result ??[];
    }

    /**
     * 
     * @param string|int $id Айди организации
     * @param string $iin ИИН сотрудника
     */
    public function getByIdAndIin($id, $iin)
    {
        return $this->model->where('organization_id', $id)->where('iin', $iin)->first();
    }
}