<?php

namespace NinjaCharts\Framework\Database\Orm\Relations;

use NinjaCharts\Framework\Database\Orm\Model;
use NinjaCharts\Framework\Database\Orm\Builder;

abstract class MorphOneOrMany extends HasOneOrMany {

	/**
	 * The foreign key type for the relationship.
	 *
	 * @var string
	 */
	protected $morphType;

	/**
	 * The class name of the parent model.
	 *
	 * @var string
	 */
	protected $morphClass;

	/**
	 * Create a new has many relationship instance.
	 *
	 * @param  \NinjaCharts\Framework\Database\Orm\Builder  $query
	 * @param  \NinjaCharts\Framework\Database\Orm\Model  $parent
	 * @param  string  $type
	 * @param  string  $id
	 * @param  string  $localKey
	 * @return void
	 */
	public function __construct(Builder $query, Model $parent, $type, $id, $localKey)
	{
		$this->morphType = $type;

		$this->morphClass = $parent->getMorphClass();

		parent::__construct($query, $parent, $id, $localKey);
	}

	/**
	 * Set the base constraints on the relation query.
	 *
	 * @return void
	 */
	public function addConstraints()
	{
		if (static::$constraints)
		{
			parent::addConstraints();

			$this->query->where($this->morphType, $this->morphClass);
		}
	}

	/**
	 * Get the relationship count query.
	 *
	 * @param  \NinjaCharts\Framework\Database\Orm\Builder  $query
	 * @param  \NinjaCharts\Framework\Database\Orm\Builder  $parent
	 * @return \NinjaCharts\Framework\Database\Orm\Builder
	 */
	public function getRelationCountQuery(Builder $query, Builder $parent)
	{
		$query = parent::getRelationCountQuery($query, $parent);

		return $query->where($this->morphType, $this->morphClass);
	}

	/**
	 * Set the constraints for an eager load of the relation.
	 *
	 * @param  array  $models
	 * @return void
	 */
	public function addEagerConstraints(array $models)
	{
		parent::addEagerConstraints($models);

		$this->query->where($this->morphType, $this->morphClass);
	}

	/**
	 * Attach a model instance to the parent model.
	 *
	 * @param  \NinjaCharts\Framework\Database\Orm\Model  $model
	 * @return \NinjaCharts\Framework\Database\Orm\Model
	 */
	public function save(Model $model)
	{
		$model->setAttribute($this->getPlainMorphType(), $this->morphClass);

		return parent::save($model);
	}

	/**
	 * Create a new instance of the related model.
	 *
	 * @param  array  $attributes
	 * @return \NinjaCharts\Framework\Database\Orm\Model
	 */
	public function create(array $attributes)
	{
		$instance = $this->related->newInstance($attributes);

		// When saving a polymorphic relationship, we need to set not only the foreign
		// key, but also the foreign key type, which is typically the class name of
		// the parent model. This makes the polymorphic item unique in the table.
		$this->setForeignAttributesForCreate($instance);

		$instance->save();

		return $instance;
	}

	/**
	 * Set the foreign ID and type for creating a related model.
	 *
	 * @param  \NinjaCharts\Framework\Database\Orm\Model  $model
	 * @return void
	 */
	protected function setForeignAttributesForCreate(Model $model)
	{
		$model->{$this->getPlainForeignKey()} = $this->getParentKey();

		$model->{last(explode('.', $this->morphType))} = $this->morphClass;
	}

	/**
	 * Get the foreign key "type" name.
	 *
	 * @return string
	 */
	public function getMorphType()
	{
		return $this->morphType;
	}

	/**
	 * Get the plain morph type name without the table.
	 *
	 * @return string
	 */
	public function getPlainMorphType()
	{
		return end(explode('.', $this->morphType));
	}

	/**
	 * Get the class name of the parent model.
	 *
	 * @return string
	 */
	public function getMorphClass()
	{
		return $this->morphClass;
	}
}
