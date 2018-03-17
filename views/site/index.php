<?php

/* @var $this yii\web\View */

use yii\web\View;
use app\assets\IndexAsset;

IndexAsset::register($this);

$this->title = 'ChristianHF';

$js = <<<EOT
    window.onload = function(){
        $('#opc1').addClass('actual');
    }
EOT;
$this->registerJs($js, View::POS_END);
?>
<div class="site-index">

    <img src="/images/fondo_index.jpg" id="fondo_index" alt="Fondo">

    <!-- <div class="holder">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div> -->

    <div class="body-content">

        <section>
            <h2>Mis datos personales</h2>
            <article>
                <p>¡Hola! Soy Christian, desarrolador y diseñador web. En mi
                profesional he realizado desde el diseño de la web de la fundación
                de Sanlúcar de Barrameda Afa-Enalsa, asi como aplicaciones web
                para el Excmo. Ayuntamiento de Sanlúcar de Bda.</p>
                <p>Si quieres conocer con mas detalle mis experiencias profesionales
                puedes verlas en esta web o en mi perfil de Linkedin (
                <a href="https://www.linkedin.com/in/christianhidalgoferrero/" target="_blank">
                Perfil de Linkedin</a>). También puedes visitar mi cuenta de GitHub (
                <a href="https://github.com/christianchf/" target="_blank">
                Perfil de Github</a>).</p>
                <p>Puedes contactar conmigo a traves del formulario de contacto
                de esta web o directamente desde mi email (<span>christianhf.chf@gmail.com</span>)
                o mi número de telefono (<span>671346980</span>).</p>
            </article>
        </section>

        <section>
            <h2>Mi trayectoria</h2>
            <article class="raw">
                <?php for ($i = 0; $i < count($experiencias); $i++) { ?>
                    <?php if ($experiencias[$i]['tipo'] == 'Experiencia profesional') { ?>
                        <div class="flip-container trabajo">
                    <?php } elseif ($experiencias[$i]['tipo'] == 'Formación académica') { ?>
                        <div class="flip-container orla">
                    <?php } elseif ($experiencias[$i]['tipo'] == 'Formación complementaria') { ?>
                        <div class="flip-container curso">
                    <?php } ?>
                            <div class="flipper">
                                <div class="front">
                                    <div class="arriba">
                                        <?php if ($experiencias[$i]['tipo'] == 'Experiencia profesional') { ?>
                                            <img src="/images/trabajo.jpg" alt="Icono trabajo">
                                        <?php } elseif ($experiencias[$i]['tipo'] == 'Formación académica') { ?>
                                            <img src="/images/orla.svg" alt="Icono orla">
                                        <?php } elseif ($experiencias[$i]['tipo'] == 'Formación complementaria') { ?>
                                            <img src="/images/curso.png" alt="Icono Curso">
                                        <?php } ?>
                                        <p class="negrita"><?= $experiencias[$i]['titulo'] ?></p>
                                    </div>
                                    <div class="abajo">
                                        <p class="negrita"><?= $experiencias[$i]['entidad'] ?></p>
                                        <p><?= Yii::$app->formatter->format($experiencias[$i]['fecha_inicio'], 'date') ?> -
                                            <?= Yii::$app->formatter->format($experiencias[$i]['fecha_fin'], 'date') ?></p>
                                    </div>
                                </div>
                                <div class="back">
                                    <p <?= (strlen($experiencias[$i]['descripcion']) > 260) ? 'class="machica"' : '' ?>><?= $experiencias[$i]['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </article>
        </section>

        <section>
            <h2>Mis conocimientos</h2>
            <article id="conocimientos">
                <div>
                    <img src="/images/bootstrap.png" alt="Logo Bootstrap">
                    <h4>Bootstrap</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/css3.png" id="imgb" alt="Logo CSS3">
                    <h4>CSS3</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/git.png" alt="Logo Git">
                    <h4>Git</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/github.png" alt="Logo Github">
                    <h4>Github</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/gitlab.png" alt="Logo Gitlab">
                    <h4>Gitlab</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/HTML5.png" alt="Logo HTML5">
                    <h4>HTML5</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/javascript.png" alt="Logo Javascript">
                    <h4>JavaScript</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/jquery.png" alt="Logo jQuery">
                    <h4>jQuery</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/php.png" alt="Logo PHP">
                    <h4>PHP</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/postgresql.png" alt="Logo Postgresql">
                    <h4>Postgresql</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/sql.png" alt="Logo SQL">
                    <h4>SQL</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/yii2.png" alt="Logo Yii2">
                    <h4>Yii2 Framework</h4>
                    <div class="nivel alto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/dreamweaver.png" alt="Logo Dreamweaver">
                    <h4>Adobe Dreamweaver</h4>
                    <div class="nivel medio">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/apache.png" alt="Logo Apache">
                    <h4>Apache</h4>
                    <div class="nivel medio">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/java.png" alt="Logo Java">
                    <h4>Java</h4>
                    <div class="nivel medio">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/ubuntu.png" alt="Logo Ubuntu">
                    <h4>Linux Ubuntu</h4>
                    <div class="nivel medio">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/windows.png" alt="Logo Windows">
                    <h4>Windows</h4>
                    <div class="nivel medio">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <div>
                    <img src="/images/photoshop.png" alt="Logo Photoshop">
                    <h4>Adobe Photoshop</h4>
                    <div class="nivel bajo">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
            </article>
        </section>

    </div>
</div>
