<?php

/**
 * @template T
 * @implements IteratorAggregate<string,T>
 */
class Foo implements IteratorAggregate
{
	/**
	 * @var array<string, T>
	 */
	private $data;
	
	/**
	 * @param array<string, T> $data
	 */
	public function __construct(array $data = [])
	{
		$this->data = $data;
	}
	
	/**
	 * @return ArrayIterator
	 */
	#[\ReturnTypeWillChange]
	public function getIterator()
	{
		return new ArrayIterator($this->data);
	}
}
