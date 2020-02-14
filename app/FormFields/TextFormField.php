<?php


namespace App\FormFields;


use TCG\Voyager\FormFields\AbstractHandler;

class TextFormField extends AbstractHandler
{
    protected $codename = 'tag-input';


    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.tag-input', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
