<?php

use PHPUnit\Framework\TestCase;

class UpdateProductTest extends TestCase
{
  protected $updateProduct;
    public function setUp():void{
       $this->updateProduct = new \App\Models\Product;
    }
    public function testGetProductName():void
    {
        $this->updateProduct->setName(1);
        $this->assertEquals( $this->updateProduct->getName(),1);
    }
    public function testGetProductId():void
    {
        $this->updateProduct->setId('Iphone 14 Pro Max');
        $this->assertEquals( $this->updateProduct->getId(),'Iphone 14 Pro Max');
    }   
    public function testGetProductDetails():void
    {
        $this->updateProduct->setDetails("Chiếc iPhone 14 Pro Max VN/A sở hữu màn hình Super Retina XDR mới với ProMotion có kích thước 6.7 inch. Tần số quét màn hình sẽ giảm xuống 1 Hz để tiết kiệm pin, trong khi hình nền được làm mờ. Màn hình tiên tiến cũng mang lại mức độ sáng HDR cao nhất tương tự như Pro Display XDR và ​​độ sáng đỉnh ngoài trời cao nhất trong điện thoại thông minh: lên đến 2000 nits, sáng gấp đôi so với người tiền nhiệm.");
        $this->assertEquals( $this->updateProduct->getDetails(),"Chiếc iPhone 14 Pro Max VN/A sở hữu màn hình Super Retina XDR mới với ProMotion có kích thước 6.7 inch. Tần số quét màn hình sẽ giảm xuống 1 Hz để tiết kiệm pin, trong khi hình nền được làm mờ. Màn hình tiên tiến cũng mang lại mức độ sáng HDR cao nhất tương tự như Pro Display XDR và ​​độ sáng đỉnh ngoài trời cao nhất trong điện thoại thông minh: lên đến 2000 nits, sáng gấp đôi so với người tiền nhiệm.");
    }  
    public function testGetProductPrice():void
    {
        $this->updateProduct->setPrice("290000");
        $this->assertEquals( $this->updateProduct->getPrice(),"290000");
    }  
    public function testGetProductImage_01():void
    {
        $this->updateProduct->setImage_01("iphone-14-pro-max-1.webp");
        $this->assertEquals( $this->updateProduct->getImage_01(),"iphone-14-pro-max-1.webp");
    }  
   
    public function testGetProductImage_2():void
    {
        $this->updateProduct->setImage_02("iphone-14-pro-max-2.webp");
        $this->assertEquals( $this->updateProduct->getImage_02(),"iphone-14-pro-max-2.webp");
    }  
    public function testGetProductImage_3():void
    {
        $this->updateProduct->setImage_03("iphone-14-pro-max-3.webp");
        $this->assertEquals( $this->updateProduct->getImage_03(),"iphone-14-pro-max-3.webp");
    }  
    public function testGetUpdateProduct():void
    {
        $this->updateProduct->setUpdateProduct(1,'Iphone 14 Pro Max','Chiếc iPhone 14 Pro Max VN/A sở hữu màn hình Super Retina XDR mới với ProMotion có kích thước 6.7 inch. Tần số quét màn hình sẽ giảm xuống 1 Hz để tiết kiệm pin, trong khi hình nền được làm mờ. Màn hình tiên tiến cũng mang lại mức độ sáng HDR cao nhất tương tự như Pro Display XDR và ​​độ sáng đỉnh ngoài trời cao nhất trong điện thoại thông minh: lên đến 2000 nits, sáng gấp đôi so với người tiền nhiệm.','290000','iphone-14-pro-max-1.webp','<iphone-14-pro-max-2></iphone-14-pro-max-2>.webp',"iphone-14-pro-max-3.webp");
        $this->assertEquals($this->updateProduct ->getUpdateProduct(),[1,'Iphone 14 Pro Max','Chiếc iPhone 14 Pro Max VN/A sở hữu màn hình Super Retina XDR mới với ProMotion có kích thước 6.7 inch. Tần số quét màn hình sẽ giảm xuống 1 Hz để tiết kiệm pin, trong khi hình nền được làm mờ. Màn hình tiên tiến cũng mang lại mức độ sáng HDR cao nhất tương tự như Pro Display XDR và ​​độ sáng đỉnh ngoài trời cao nhất trong điện thoại thông minh: lên đến 2000 nits, sáng gấp đôi so với người tiền nhiệm.','290000','iphone-14-pro-max-1.webp','<iphone-14-pro-max-2></iphone-14-pro-max-2>.webp',"iphone-14-pro-max-3.webp"]);
        $this->assertArrayHasKey(6,$this->updateProduct->getUpdateProduct());
    }  
}