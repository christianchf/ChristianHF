<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experiencias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $tipo
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
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
            [['titulo'], 'string', 'max' => 150],
            [['tipo'], 'string', 'max' => 25],
            [['fecha_inicio', 'fecha_fin'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'titulo' => 'Título',
            'tipo' => 'Tipo de experiencia',
            'descripcion' => 'Descripción',
            'fecha_inicio' => 'Fecha de inicio',
            'fecha_fin' => 'Fecha de fin',
        ];
    }
}
