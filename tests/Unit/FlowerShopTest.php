<?php
namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class FlowerShopTest extends TestCase
{
    public function testAFlowerCanBeCreated()
    {

        $region = Region::create([
            'name' => 'Salem'
        ]);

        $supplier = Supplier::create([
            'name' => 'Aroma'
        ]);

        $flower = Flower::create([
        'name' => 'Jasmin',
        'colour' =>'red',
        'region_id' => $region->id,
        'supplier_id'=>$supplier->id,
        'stock_status' => 'available',
        ]);

        $this->assertEquals('Jasmin',$flower->name);
        $this->assertEquals('red',$flower->colour);
        $this->assertEquals('madurai',$flower->region);
        $this->assertEquals('aroma flowers',$flower->region->supplier);
        $this->assertEquals('available',$flower->stock_status);
    }
}
