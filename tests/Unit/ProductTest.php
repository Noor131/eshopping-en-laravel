<?php
namespace Tests\Unit;

use Tests\TestCase;
use Session;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\housesController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ProductController;
class ProductTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAllProduct(){
        $productCon= new ProductController;
        $product = $productCon->index()['products']->first();
        $expected_name = "I Phone 12 pro";
        $expected_price="1022";
        $expected_category="mobile";
        $this->assertEquals($product->name,$expected_name);
        $this->assertEquals($product->price,$expected_price);
        $this->assertEquals($product->category,$expected_category);
    }


    public function testDetails(){
        $productCon= new ProductController;
        $productId=23;
        $expectedName='Sony Smart TV';
        $expectedPrice=1600;
        $expectedCategory='tv';
        $result= $productCon->detail($productId)['product'];
        $this->assertEquals($result->price,$expectedPrice);
        $this->assertEquals($result->category,$expectedCategory);
        $this->assertEquals($result->name,$expectedName);
    }

    public function testSearch(){
        $productCon= new ProductController;
        $request = new Request;
        $request->replace([
            'query'=>'plus'
        ]);
        $expected='one plus';
        $result = $productCon->search($request)['products']->first();
        $this->assertEquals($result->name,$expected);
    }

    public function testAddToCart(){

        $productCon= new ProductController;
        $data=array(22,24,23,25);
        foreach($data as $d){
            $this->login(2);
            $response=$this->json('POST', '/add_to_cart',['product_id'=>$d]);
            $response->assertStatus(302);
        }

    }

    public function testCountCartItems(){
        $productCon= new ProductController;
        $this->login(2);
        $itemCount=$productCon->cartItem();

        $this->assertEquals($itemCount,6);

    }

    public function testOrderNow(){
        $this->login(2);

        $productCon= new ProductController;
        $totalPrice=$productCon->orderNow()['total'];
        $this->assertEquals($totalPrice,9300.0);

    }

    public function testStoreProduct(){
        $this->login(1);
        $response=$this->postJson('/store', [
        'name' => 'Test',
        'category'=>'test',
        'description'=>'testing',
        'price'=>2000
        ]);
        $this->assertDatabaseHas('products', [
            'name'=>'Test'
        ]);

    }

    public function testremoveCart(){
        $this->login(2);
        $productCon= new ProductController;
        $cartid=104;
        $response = $productCon->removeCart($cartid);
        $this->assertDatabaseMissing('cart',[
            'id'=>104
        ]
        );

    }


    protected function login($id){
        Session::start();
        $user = User::find($id);
        Auth::login($user);
        session(['user' => $user]);
     }


     protected function user($id){
         $user = User::find($id);
         return $user;
     }



}
