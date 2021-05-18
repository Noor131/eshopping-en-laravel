<?php

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class RouteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_loginRoute()
    {
        $this->get('/myorders')
        ->assertStatus(200);
    }

    public function test_search()
    {
        $this->get('/search')
        ->assertStatus(200);
    }

    public function test_RegRoute()
    {
        $this->get('/register')
        ->assertStatus(200);
    }

    public function testCartlist(){
        $this->login(2);
        $this->get('/cartlist')
        ->assertStatus(200);
    }

    public function test_detail()
    {

        $response= $this->get('/detail/24');
        $data = $this->getResponseData($response,'product');
        $this->assertEquals($data->name,"LG 4k UHD TV");
    }

    public function test_store()
    {

        $this->get('/store')
        ->assertStatus(405);
    }

    public function test_orderlist()
    {

        $this->get('/orderlist')
        ->assertStatus(200);
    }

    protected function getResponseData($response, $key){
        $content = $response->getOriginalContent();
        $content = $content->getData();
       return $content[$key];

    }

    public function testRemove(){
        $this->login(2);
        $this->get('/removecart/2')
        ->assertStatus(302);
    }

    protected function login($id){
        Session::start();
        $user = User::find($id);
        Auth::login($user);
        session(['user' => $user]);
     }


    public function testMyOrders(){
        $this->login(2);
        $this->get('/myorders')
        ->assertStatus(200);
    }


    public function testAbout(){
        $this->get('/about')
        ->assertStatus(200);
    }

    public function testContact(){
        $this->get('/contact')
        ->assertStatus(200);
    }

}
