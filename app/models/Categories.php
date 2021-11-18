<?php

class Categories extends Model{

    public function blogs(){
        return $this->belongsTo('Posts');
    }

    public function rules(): array{
        return [];
    }

    public function tableName(): string{
        return 'categories';
    }

    // public function attributes():array{
    //     return ['filename', 'mimetype', 'filedata'];

    // }

}