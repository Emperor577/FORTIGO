<?php


namespace App\Services\Message\Interfaces;


interface MessageService
{
    
    public function create(bool $isContactForm, array $data);
    
}
