<?php
namespace Genkgo\Xsl\Xpath;

use Genkgo\Xsl\ObjectFunction;
use Genkgo\Xsl\StringFunction;
use Genkgo\Xsl\Transpiler;
use Genkgo\Xsl\XmlNamespaceInterface;

class XmlPath implements XmlNamespaceInterface {

    const URI = '';

    /**
     * @param Compiler $compiler
     */
    public function registerXpathFunctions(Compiler $compiler)
    {
        $compiler->addFunctions([
            new StringFunction('abs', Functions::class),
            new StringFunction('ceiling', Functions::class),
            new StringFunction('floor', Functions::class),
            new StringFunction('round', Functions::class),
            new StringFunction('roundHalfToEven', Functions::class),
            new StringFunction('startsWith', Functions::class),
            new StringFunction('endsWith', Functions::class),
            new StringFunction('indexOf', Functions::class),
            new StringFunction('matches', Functions::class),
            new StringFunction('lowerCase', Functions::class),
            new StringFunction('upperCase', Functions::class),
            new StringFunction('tokenize', Functions::class),
            new StringFunction('translate', Functions::class),
            new StringFunction('substringAfter', Functions::class),
            new StringFunction('substringBefore', Functions::class),
            new StringFunction('replace', Functions::class),
            new ObjectFunction('stringJoin', Functions::class),
            new ObjectFunction('currentTime', Functions::class),
            new ObjectFunction('currentDate', Functions::class),
            new ObjectFunction('currentDateTime', Functions::class, 'current-dateTime'),
        ]);
    }

    /**
     * @param Transpiler $transpiler
     * @param Compiler $compiler
     */
    public function registerTransformers(Transpiler $transpiler, Compiler $compiler)
    {
        ;
    }
}