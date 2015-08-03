<?php


class BookController extends Controller
{
	public function actionIndex($id){
		
		/*$b = new Book();
		
		$b->title='Огонь из нутри';
		$b->year=1960;
		$b->author='Кастанеда';
		
		$b->save(false);
		
		$b->id=false;
		$b->isNewRecord=true;
		//echo $b->id;
		
		$b->title='Колесо времени';
		$b->year=1967;
		$b->author='Кастанеда';
		
		$b->save(false);*/
		
		//$id = $_GET['id'];
		$model = Book::model()->findByPk($id);
		
		/*$criteria = new CDbCriteria;
		$criteria->condition='id = :id';
		$criteria->params=array(':id'=>7);
		$criteria->limit='10';
		$criteria->order='id DESC';
		
		$a = Book::model()->findAll($criteria);*/
		
		
		
		//$array=array(5,3);
		//$num=1859;
		//$num='qweВинни пух';
		
		//$a = Book::model()->findByPk(3);
		
		//$a = Book::model()->findAllByPk($array);
		
		//$a = Book::model()->find('id<:num',array(':num'=>$num));
		
		//$a = Book::model()->findByAttributes(array('id'=>array(3,4),'title'=>'Война и мир'));
		
		//$a = Book::model()->findAllByAttributes(array(('id')=>array(4,5),'title'=>array('Война и мир','Анна Каренина')));
		
		//$a = Book::model()->findBySql('SELECT title FROM {{book}} WHERE id = :num',array(':num'=>$num));
		
		//$a = Book::model()->findAllBySql('SELECT title FROM {{book}} WHERE year = :num',array(':num'=>$num));
		
		//$a = Book::model()->count('year=:num',array(':num'=>$num));
		
		//$a = Book::model()->countBySql('SELECT count(title) FROM {{book}} WHERE year = :num',array(':num'=>$num));
		
		//$a = Book::model()->exists('year = :num',array(':num'=>$num));
		
		//$a = Book::model()->updateByPk($array,array('title'=>'qweqwe'));
		
		//$a = Book::model()->updateAll(array('title'=>'qweВинни пух'),'title=:title',array(':title'=>'Винни пух'));
		
		//$a = Book::model()->deleteByPk(3);
		
		//$a = Book::model()->deleteAll('title=:title',array(':title'=>$num));
		
		/*if($a){
			echo 'Есть';
		}
		else{
			echo 'Нет';
		}
		*/
		//echo $a;
		/*foreach($a as $one){
			echo $one->title;
			echo '<hr/>';
		}
		echo $a->title;*/
		
		$this->render('index',array('model'=>$model));
	}
}