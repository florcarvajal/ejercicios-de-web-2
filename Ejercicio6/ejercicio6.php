<?php
class Saludar {
    private $nombre;
    private $apellido;

    // Constructor que recibe nombre y apellido
    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // Método para generar un saludo formal basado en el horario
    public function saludoFormal($horario) {
        $saludo = $this->obtenerSaludoSegunHorario($horario);
        return "$saludo $this->nombre $this->apellido";
    }

    // Método para generar un saludo informal basado en el horario
    public function saludoInformal($horario) {
        $saludo = $this->obtenerSaludoSegunHorario($horario);
        $finSaludo = $this->obtenerFinalSaludo($horario);
        return "¡Hola $this->nombre! Que tengas un $finSaludo";
    }

    // Método privado para obtener el saludo según el horario
    private function obtenerSaludoSegunHorario($horario) {
        if ($horario >= 5 && $horario < 13) {
            return "Buenos días";
        } elseif ($horario >= 13 && $horario < 21) {
            return "Buenas tardes";
        } else {
            return "Buenas noches";
        }
    }

    // Método privado para obtener el final del saludo informal
    private function obtenerFinalSaludo($horario) {
        if ($horario >= 5 && $horario < 13) {
            return "buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            return "buena tarde";
        } else {
            return "buena noche";
        }
    }
}
?>
