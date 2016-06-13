<?php


class ImageUploader {
	private $max_height;
	private $max_width;
	private $upload_dir;

	private $file_name;
	private $file_size;
	private $file_tmp;
	private $file_type;

	private $image_name; //the name set as uploaded

	/**
	 * Constructor, sets initial conditions
	 * @param , $max_size [Max size]
	 * @param integer $max_width
	 * @param , integer $max_height
	 * @param   $upload_dir string
	 */
	function __construct($max_size, $max_width, $max_height, $upload_dir) {
		//Assign the Parameter
		$this->max_size = $max_size;
		$this->max_height = $max_height;
		$this->max_width = $max_width;
		$this->upload_dir = $upload_dir;

	}

	/**
	 * set the input image name what was used in input field
	 *
	 * @param $name string
	 */
	
	function setImage($name) 
	{
		$this->file_name = $_FILES[$name]['name'];
		$this->file_size = $_FILES[$name]['size'];
		$this->file_tmp = $_FILES[$name]['tmp_name'];
		$this->file_type = $_FILES[$name]['type'];

	}

	/**
	 * set the out image name
	 *
	 * @param string/integer $name
	 */

	function setImageName($name)
	{
		$this->image_name = $name;
	}

	
	/**
	 * Delete existing image with same name set via $this->setImageName
	 *
	 */
	function deleteExisting()
	{
		$jpg =  $this->upload_dir.''.$this->image_name.'.jpg';
		if(file_exists($jpg)) unlink($jpg);
		
		$jpeg =  $this->upload_dir.''.$this->image_name.'.jpeg';
		if(file_exists($jpeg)) unlink($jpeg);		
			
		$gif =  $this->upload_dir.''.$this->image_name.'.gif';
		if(file_exists($gif)) unlink($gif); 		
			
		$png =  $this->upload_dir.''.$this->image_name.'.png';
		if(file_exists($png)) unlink($png);		
	}

	/**
	 * uploads the image
	 *
	 * @return boolean
	 */
	function upload()
	{
		$ext = strrchr($this->file_name, '.');
		$name = $this->upload_dir.''.$this->image_name.''.$ext;
		if(!move_uploaded_file($this->file_tmp, $name)){
			echo $_FILES[$this->file_name]['error'];
			return false;
		}
		else

			return $name;
	}


	/**
	 * Check the input image size with max image size
	 *
	 * @return boolean
	 */
	function checkSize()
	{
		if($this->file_size > ($this->max_size*1024))
			return false;
		else
			return true;
	}


	/**
	 * Check the input image height with max image height
	 *
	 * @return boolean
	 */
	function checkHeight()
	{
		$file = getimagesize($this->file_tmp);
		//$height = $file[1];
		
		if($file[1] > $this->max_height)
			return false;
		else
			return true;
	}

	/**
	 * Check the input image width with max image height
	 *
	 * @return boolean
	 */
	function checkWidth()
	{
		$file = getimagesize($this->file_tmp);
		//$width = $file[0];
		
		if($file[0] > $this->max_height)
			return false;
		else
			return true;
	}


	/**
	 * checks image extension
	 *
	 * @return boolean
	 */
	function checkExt()
	{		
		if (($this->file_type != 'image/jpg') && ($this->file_type != 'image/jpeg') && 
				($this->file_type != 'image/gif') && ($this->file_type != 'image/png'))
			return false;
		else
			return true;		
	}


}