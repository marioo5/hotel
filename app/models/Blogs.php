<?php

class Blogs extends Model{

    protected $table = 'posts';

    public function rules():array{
        return $rules = array(

            'title'=>[self::RULE_REQUIRED],
            
            'date_published'=>[self::RULE_REQUIRED],
            
            'text'=>[self::RULE_REQUIRED],
            
            'publisher'=>[self::RULE_REQUIRED],
            
            'category'=>[self::RULE_REQUIRED]
            
            );
    }

    public function tableName(): string {
        return 'posts';
    }
    
    public function attributes(): array {
        return ['title','date_published','text','publisher','category'];
    }

    public function files(){

        return $this->hasOne('Files');
    }


}
