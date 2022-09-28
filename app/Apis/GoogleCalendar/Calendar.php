<?php

namespace App\Apis\GoogleCalendar;
use Google;

class Calendar{
    
    /**
     * MÉTODO RESPONSÁVEL POR CRIAR UM NOVO CALENDÁRIO PARA O USUÁRIO
     * @param object $service
     * @param string $summary
     * @return string
     */
    public static function CrateCalendarSummary($service, $summary){
        //INSÂNCIA DE UM NOVO CALENDÁRIO
        $calendar = new Google\Service\Calendar\Calendar();
        $calendar->setSummary($summary);
        $calendar->setTimeZone('America/Bahia');

        //CRIA UM NOVO CALENDÁRIO PARA O CLIENTE SERVICE
        $createdCalendar = $service->calendars->insert($calendar);

        //RETORNA COM O ID DO CALENDÁRIO CRIADO
        return $createdCalendar->getId();
    }














}