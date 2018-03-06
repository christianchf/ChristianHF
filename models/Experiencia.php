<?php

namespace app\models;

use Yii;
use DateTime;

/**
 * This is the model class for table "experiencias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $tipo
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $entidad
 */
class Experiencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experiencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'tipo', 'fecha_inicio', 'fecha_fin'], 'required'],
            [['descripcion'], 'string'],
            [['titulo', 'entidad'], 'string', 'max' => 150],
            [['tipo'], 'string', 'max' => 25],
            [['fecha_inicio', 'fecha_fin'], 'date', 'format'=>'php:Y-m-d'],
            [['fecha_inicio', 'fecha_fin'], 'validarFechas'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'titulo' => 'Título',
            'entidad' => 'Entidad',
            'tipo' => 'Tipo de experiencia',
            'descripcion' => 'Descripción',
            'fecha_inicio' => 'Fecha de inicio',
            'fecha_fin' => 'Fecha de fin',
        ];
    }

    /**
     * Comprueba que la fecha de inicio sea anterior o igual a la fecha de fin.
     * @param mixed $attribute
     * @param mixed $params
     */
    public function validarFechas($attribute, $params)
    {
        $fechaInicio = new DateTime($this->fecha_inicio);
        $fechaFin = new DateTime($this->fecha_fin);
        if ($fechaInicio > $fechaFin) {
            $this->addError($attribute, 'La fecha de inicio debe ser anterior o igual a la fecha de fin.');
        }
    }
}
