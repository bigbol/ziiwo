<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class Music_info extends CActiveRecord
{
	public $music_name;
	public $music_men;
	public $music_pubtime;
	public $description;
	public $music_cover;

	/**
	 * Declares the validation rules.
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function tableName()
	{
                return '{{music_info}}';
	}
        
    public function selectMusic()
    {
            
    }
        
        
        
        
        
        
}