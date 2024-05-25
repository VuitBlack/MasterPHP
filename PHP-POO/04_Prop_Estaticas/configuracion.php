<?php

//  Las Propiedades o métodos estáticos son:
//      Propiedades o métodos para llamarlos no se necesita instanciar la clase (no se necesita crear ese objeto)
//      para acceder a los métodos y propiedades se pone el nombre de la clase seguido de dos puntos 
///     y el nombre de la propiedad o el método ej: Configuracion::$color

class Configuracion{
    
    public static $color;
    public static $newsletter;
    public static $entorno;

    //Getter & Setters
    public static function getColor()
    {
        return self::$color;
    }

    public static function setColor($color)
    {
        self::$color=$color;
    }

    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    public static function setNewsletter($newsletter)
    {
        self::$newsletter=$newsletter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno=$entorno;
    }
}

?>