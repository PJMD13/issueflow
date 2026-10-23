<?php

declare(strict_types=1);

namespace App\Model;

use InvalidArgumentException;

/*
Ticket representa una incidencia en IssueFloew como
un objeto PHP
*/
final class Ticket
{
    /*
    Constructor Property Promotion (PHP moderno)
    */
    public function __construct(
        private string $id,
        private string $title,
        private TicketPriority $priority,
        private TicketStatus $status
    )
    {
        /* Validar el formato de id: INC- seguido de cuatro dígitos
            Para ello usamos una regex: regular expression (expresión regular en 'regex'): '/^INC-\<d>4$/'
            Si el formato Id no es correcto da error.
        */
        if(preg_match('/^INC-\d{4}$/', $this->id) !== 1) {
            throw new InvalidArgumentException('El Id no tiene un formato válido');
        }
    
        /* Normalización de title: Eliminar espacios en blanco antes y despuesś
        La función trin() elimina estos espacios
        */
        $normalizedTitle = trim($title);

        /* Verifico que $normalizedTitle no sea una cadena de texto vacía */
        if ($normalizedTitle === '') {
            throw new InvalidArgumentException('El título no puede estar vacio');
        }
    }

    /* Creamos los getters para cada uno de los atributos */
    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPriority(): TicketPriority
    {
        return $this->priority;
    }

    public function getStatus(): TicketStatus
    {
        return $this->status;
    }

    /* Metodo que devuelve true si el ticket tiene una
    prioridad 'urgente', y false en caso contrario */
    public function isUrgent(): bool
    {
        return $this->priority->isUrgent();
    }

    /* Método que devuelve true si una incidencia está cerrada */
    public function isClosed(): bool
    {
        return $this->status->isClosed();
    }
}