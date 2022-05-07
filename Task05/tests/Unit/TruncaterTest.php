<?php

namespace Kiryuhin\Tests;
use \PHPUnit\Framework\TestCase;
use Kiryuhin\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Кирюхин Алексей Андреевич...', $truncater->truncate('Кирюхин Алексей Андреевич'));
        $this->assertSame('Кирюхин Алек...', $truncater->truncate('Кирюхин Алексей Андреевич', ['length' => 10]));
        $this->assertSame('Кирюхин Алексей Андреевич...', $truncater->truncate('Кирюхин Алексей Андреевич', ['length' => 50]));
        $this->assertSame('Кирюхин Алексей Андреевич...', $truncater->truncate('Кирюхин Алексей Андреевич', ['length' => -10]));
        $this->assertSame('Кирюхин Алек*', $truncater->truncate('Кирюхин Алексей Андреевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Кирюхин Алексей Андреевич*', $truncater->truncate('Кирюхин Алексей Андреевич', ['separator' => '*']));
    }
}
