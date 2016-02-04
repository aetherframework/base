<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 18/12/15
 * Time: 18:02
 */

namespace AetherFramework\Template;


interface RenderInterface
{
    public function assign($templateVariable, $value);

    public function setTemplate($templateFilePath);

    public function render($templateFilePath = null, array $templateVariables = null);
}