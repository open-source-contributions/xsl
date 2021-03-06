<?php
declare(strict_types=1);

namespace Genkgo\Xsl\Integration\Schema;

use Genkgo\Xsl\Exception\TransformationException;

class XsTimeTest extends AbstractSchemaTest
{
    public function testConstructor()
    {
        $result = $this->transformFile('Stubs/Schema/time.xsl');

        $this->assertContains('12:00:00', $result);
    }

    public function testWrongConstructor()
    {
        $this->expectException(TransformationException::class);
        $this->transformFile('Stubs/Schema/time-wrong-constructor.xsl');
    }
}
