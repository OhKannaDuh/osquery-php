<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Cpuid;
use OhKannaDuh\OsQueryTests\TestCase;

final class CpuidTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the feature attribute from our model [Cpuid].
     */
    public function testGetFeature(): void
    {
        $model = Cpuid::load([
            "feature" => "feature",
        ], $this->container);

        $this->assertSame("feature", $model->getFeature());
    }


    /**
     * Ensure we can get the value attribute from our model [Cpuid].
     */
    public function testGetValue(): void
    {
        $model = Cpuid::load([
            "value" => "value",
        ], $this->container);

        $this->assertSame("value", $model->getValue());
    }


    /**
     * Ensure we can get the output_register attribute from our model [Cpuid].
     */
    public function testGetOutputRegister(): void
    {
        $model = Cpuid::load([
            "output_register" => "output_register",
        ], $this->container);

        $this->assertSame("output_register", $model->getOutputRegister());
    }


    /**
     * Ensure we can get the output_bit attribute from our model [Cpuid].
     */
    public function testGetOutputBit(): void
    {
        $model = Cpuid::load([
            "output_bit" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOutputBit());
    }


    /**
     * Ensure we can get the input_eax attribute from our model [Cpuid].
     */
    public function testGetInputEax(): void
    {
        $model = Cpuid::load([
            "input_eax" => "input_eax",
        ], $this->container);

        $this->assertSame("input_eax", $model->getInputEax());
    }
}
