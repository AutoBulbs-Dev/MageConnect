<?php 

//Location of interface
namespace ABDirect\MageConnect\Api\Data;

//Interface name
interface ConnectionInterface
{
	//Constants for keys of data array
	const ID               = 'id';
	const MAKE             = 'make'; 
	const MODEL            = 'model';
	const BULB_SIZE        = 'bulb_size';
	const WIPERBLADE_SIZE  = 'wiperblade_size';
	const YEAR             = 'year';

	/**
	* Get ID
	* @return int|null
	**/
	public function getId();

	/**
	* Get Make
	* @return string|null
	**/
	public function getMake();

	/**
	* Get Model
	* @return string|null
	**/
	public function getModel();

	/**
	* Get Bulb Size
	* @return int|null
	**/
	public function getBulbSize();

	/**
	* Get WiperBlade Size
	* @return int|null
	**/
	public function getWiperbladeSize();

	/**
	* Get Year
	* @return int|null
	**/
	public function getYear();

    /**
     * Set ID
     *
     * @param int $id
     * @return \ABDirect\MageConnect\Api\Data\ConnectionInterface
     */
    public function setId($id);

    /**
     * Set Make
     *
     * @param string $make
     * @return \ABDirect\MageConnect\Api\Data\ConnectionInterface
     */
    public function setMake($make);

    /**
     * Set Model
     *
     * @param string $model
     * @return \ABDirect\MageConnect\Api\Data\ConnectionInterface
     */
    public function setModel($model);

     /**
     * Set Bulbsize
     *
     * @param int $bulbs_ize
     * @return \ABDirect\MageConnect\Api\Data\ConnectionInterface
     */
    public function setBulbSize($bulb_size);
}
