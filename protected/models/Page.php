<?php

/**
 * This is the model class for table "{{page}}".
 *
 * The followings are the available columns in table '{{page}}':
 * @property integer $id
 * @property string $title
 * @property string $text
 */
class Page extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{page}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,category_id,text', 'required'),
                        array('category_id', 'numerical'),
			array('title', 'numerical','on'=>'my'),
			array('title', 'length', 'max'=>255),
                        array('text', 'safe'),
			//array('title, text','valid'),
			//array('title', 'compare', 'compareAttribute'=>'text','message'=>'Валидация'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, text', 'safe', 'on'=>'search'),
			//array('text', 'unsafe',),
		);
	}

	/**
	 * @return array relational rules.
	 */
	 
	public function valid($attributes,$params)
	{
		$a=$this->attributes;
		if($a!=1){
			$this->addError($attributes,'Мой валидатор');
		}
	} 
	 
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'category'=>array(self::BELONGS_TO,'Category','category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Заголовок',
			'text' => 'Текст',
                        'category'=>'Категория',
                        'category_id'=>'Категория',
                        'description'=>'Категория',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('text',$this->text,true);
               // $criteria->condition = 'id>5';
                $sort = new CSort();
                $sort->attributes=array(
                    'title'=>array(
                        'asc'=>'title',
                        'desc'=>'title desc',
                    )
                );
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                            'pageSize'=>3,
                        ),
                        'sort'=>$sort,
		));
	}
        
        public function beforeSave() {
            $this->title=$this->title.'_____sdfsdfsdfsfd';
            return parent::beforeSave();
        }
        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
