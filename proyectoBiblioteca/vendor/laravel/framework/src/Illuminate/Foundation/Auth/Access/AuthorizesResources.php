<?php

namespace Illuminate\Foundation\Auth\Access;

trait AuthorizesResources
{
    /**
     * Authorize a resource action based on the incoming request.
     *
     * @param  string  $model
     * @param  string|null  $parameter
     * @param  array  $options
     * @return void
     */
    public function authorizeResource($model, $parameter = null, array $options = [])
    {
        $parameter = $parameter ?: strtolower(class_basename($model));

        foreach ($this->resourceAbilityMap() as $method => $ability) {
            $modelName = in_array($method, ['index', 'create', 'store']) ? $model : $parameter;

            $this->middleware("can:{$ability},{$modelName}", $options)->only($method);
        }
    }

    /**
     * Get the map of resource methods to ability names.
     *
     * @return array
     */
    protected function resourceAbilityMap()
    {
        return [
<<<<<<< HEAD
            'index' => 'view',
            'create' => 'create',
            'store' => 'create',
            'show' => 'view',
            'edit' => 'update',
            'update' => 'update',
=======
            'index'   => 'view',
            'create'  => 'create',
            'store'   => 'create',
            'show'    => 'view',
            'edit'    => 'update',
            'update'  => 'update',
>>>>>>> 3ef61ea3e8c3c49a3d5853831d93055f65b89f27
            'destroy' => 'delete',
        ];
    }
}
