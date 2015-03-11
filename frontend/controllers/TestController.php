<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actions1() {
        $a=3;
        $b=5;
        $sum=$a+$b;
        
        $param = ['sum' => $sum, 'a'=>$a, 'bb'=>$b];
        return $this->render('test1',$param);
        //จบ
        
    public function actionsTest2($name=null) {    
       
        echo "Your name is $name";
        }
    
    }
}